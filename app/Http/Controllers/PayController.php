<?php

namespace App\Http\Controllers;

use App\Models\Meet;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Omnipay\Omnipay;

class PayController extends Controller
{
    //
    private $getway;
    public function __construct()
    {
        // dd(env("PAYAPAL_CLIENT_ID"));
        $this->getway = Omnipay::create("PayPal_Rest");
        $this->getway->setClientId('AQWti9DsXSbSFp2tuafEntVjLzkBs8iNhgGTy68971XbAQlu9bMTlejxilJweBZfnX3l8GNdD8VgWt8p');
        $this->getway->setSecret('ECqJF5NKhsBRIluw1AikjHsNo-6eLQmYLLYDGRTLmzccnzwJ5AQA6bd-QqvoTlZw8V7Z8h67HAcjzxXN');
        $this->getway->setTestMode(true);
    }

    public function pay_cancel(Request $request)
    {
        $transaction = Transaction::where("transactionId", $request->transactionId)->first();

        return view('site.panel.pay_cancel', compact(['transaction']));
    }
    public function pay_success(Request $request)
    {
        $transaction = Transaction::where("transactionId", $request->transactionId)->first();

        return view('site.panel.pay_success', compact(['transaction']));
    }
    public function send_pay(Request $request)
    {
        // سسsss
        $customer = auth()->user();
        if ($customer->role != "student") {
            toast()->warning($customer->short(340));
            return back();
        }

        $balance = $customer->balance();


        $via = "paypal";

        $type = $request->type;
        $meet_id = $request->meet_id;
        $class_type = $request->class_type;
        $pay = $request->pay;
        $amount = $request->amount;
        // dd($request->all());
        $teacher=null;
        if($type=="reserve"){
            $meet = Meet::find($meet_id);
            $start = Carbon::parse($meet->start)->addMinutes(30);
            $meet_next = Meet::where("user_id", $meet->user->id)->whereStart($start)->first();
            $teacher = $meet->user;
            if(!$meet_next){
                $meet_next = Meet::find($meet_id);
                $start = Carbon::parse($meet->start)->subMinutes(30);
                $meet = Meet::where("user_id", $meet->user->id)->whereStart($start)->first();
            }
        }



        if ($type == "reserve" && $pay == "wallet") {
            if ($meet->student_id || $meet_next->student_id) {
                toast()->warning($customer->short(275));
                return redirect()->route("profile", $meet_next->user_id);
            }
            $class_price = $teacher->class_price($class_type);
            $unit_class_price = $teacher->unit_class_price($class_type);
            if ($balance > $class_price) {
                $paymentId = $meet->id . '_' . $customer->id . '_' . time();
                $customer->transactions()->create([
                    'class_type' => $class_type,
                    'via' => "wallet",
                    'meet_id' => $meet_id,
                    'amount' => $class_price * -1,
                    'type' => "reserve_class",
                    'status' => "payed",
                    'currency' => "usd",
                    'transactionId' => $paymentId,
                ]);
                $meet->update(['student_id' => $customer->id, "status" => "reserved"]);
                if ($class_type != "test") {
                    $meet_next->update(['student_id' => $customer->id, "status" => "reserved", "price" => $unit_class_price, "pair" => $meet->id]);
                }

                if (is_numeric($class_type) && $class_type > 1) {
                    $customer->selects()->create([
                        'count' => ($class_type - 1),
                        'user_id' => $meet->user->id,
                        'price' => $unit_class_price,
                    ]);
                }
                return redirect()->route("pay.result", ['paymentId' => $paymentId]);
            } else {
                toast()->warning($customer->short(276));
                return redirect()->route("profile", $meet_next->user_id);
            }
        }else{
            $amount = $teacher->class_price($class_type);
        }







        try {
            $response = $this->getway->purchase([
                'amount' => $amount,
                'currency' => 'USD',
                "returnUrl" => route("pay.result"),
                "cancelUrl" => route('pay.cancel'),
            ])->send();
            $data = $response->getData();
            //    dd( $data);
            if ($response->isRedirect()) {
                $customer->transactions()->create([
                    'class_type' => $class_type,
                    'meet_id' => $meet_id,
                    'amount' => $amount,
                    'type' => $type,
                    'via' => $via,
                    'status' => "created",
                    'class_type' => $class_type,
                    'currency' => "usd",
                    'transactionId' => $data['id'],
                ]);
                $response->redirect();
            } else {
                return            $response->getMessage();
                return redirect()->route('pay.cancel');
            }
        } catch (\Throwable $t) {
            return     $t->getMessage();
            return redirect()->route('pay.cancel');
        }
    }

    public function pay_result(Request $request)
    {
        $customer=auth()->user();

        $data = $request->all();
        $tran = Transaction::where('transactionId', $data['paymentId'])->first();
        if ($request->input("paymentId") && $request->input("PayerID")) {
            $transaction = $this->getway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId')
            ));
            $response = $transaction->send();
            if ($response->isSuccessful()) {
                $arr = $response->getData();
                $tran->update(['status' => "payed"]);
                if( $tran->type=="reserve"){
                    $meet=$tran->meet;
                    $meet_id=$meet->id;
                    $class_type=$tran->class_type;
                    $class_price=$tran->amount;
                    $teacher = $meet->user;
                    $unit_class_price = $teacher->unit_class_price($class_type);
                    $meet->update(['student_id' => $customer->id, "status" => "reserved","type"=>"charge_wallet"]);

                    $start = Carbon::parse($meet->start)->addMinutes(30);
                    $meet_next = Meet::where("user_id", $meet->user->id)->whereStart($start)->first();
                    if(!$meet_next){
                        $meet_next = Meet::find($meet_id);
                        $start = Carbon::parse($meet->start)->subMinutes(30);
                        $meet = Meet::where("user_id", $meet->user->id)->whereStart($start)->first();
                    }


                    $customer->transactions()->create([
                        'class_type' => $class_type,
                        'via' => "wallet",
                        'meet_id' => $meet_id,
                        'amount' => $class_price * -1,
                        'type' => "reserve_class",
                        'status' => "payed",
                        'currency' => "usd",
                        'transactionId' => $tran->transactionId,
                    ]);
                    if ($class_type != "test") {
                        $meet_next->update(['student_id' => $customer->id, "status" => "reserved", "price" => $unit_class_price, "pair" => $meet->id]);
                    }

                    if (is_numeric($class_type) && $class_type > 1) {
                        $customer->selects()->create([
                            'count' => ($class_type - 1),
                            'user_id' => $meet->user->id,
                            'price' => $unit_class_price,
                        ]);
                    }
                }

                return redirect()->route('pay.success', ['transactionId' => $data['paymentId']]);
            } else {
                $tran->update(['status' => "failed"]);
                // return $response->getMessage();
                return redirect()->route('pay.cancel', ['transactionId' => $data['paymentId']]);
            }
        }

        if($tran->via=="wallet"){
            if($tran->status=="payed"){
                return redirect()->route('pay.success', ['transactionId' => $data['paymentId']]);
            }else{
                return redirect()->route('pay.cancel', ['transactionId' => $data['paymentId']]);
            }

        }
    }
}
