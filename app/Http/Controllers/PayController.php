<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Omnipay\Omnipay;

class PayController extends Controller
{
    //
    private $getway;
    public function __construct(){
        // dd(env("PAYAPAL_CLIENT_ID"));
        $this->getway=Omnipay::create("PayPal_Rest");
        $this->getway->setClientId('AQWti9DsXSbSFp2tuafEntVjLzkBs8iNhgGTy68971XbAQlu9bMTlejxilJweBZfnX3l8GNdD8VgWt8p');
        $this->getway->setSecret('ECqJF5NKhsBRIluw1AikjHsNo-6eLQmYLLYDGRTLmzccnzwJ5AQA6bd-QqvoTlZw8V7Z8h67HAcjzxXN');
        $this->getway->setTestMode(true);

    }

    public function pay_cancel(Request $request){
        $transaction=Transaction::where("transactionId", $request->transactionId)->first();

        return view('site.panel.pay_cancel', compact(['transaction']));
    }
    public function pay_success(Request $request){
        $transaction=Transaction::where("transactionId", $request->transactionId)->first();

        return view('site.panel.pay_success', compact(['transaction']));
    }
    public function send_pay(Request $request){
        // سسsss
        $customer=auth()->user();
        try{
            $response=$this->getway->purchase([
                'amount'=>$request->amount,
                'currency'=>'USD',
                "returnUrl"=>route("pay.result"),
                "cancelUrl"=>route('pay.cancel'),
            ])->send();
           $data=$response->getData();
        //    dd( $data);
            if($response->isRedirect()){
                $customer->transactions()->create([
                    'meet_id'=>null,
                    'amount'=>$request->amount,
                    'type'=>"charge_wallet",
                    'status'=>"payed",
                    'currency'=>"usd",
                    'transactionId'=>$data['id'],
                ]);
                $response->redirect();
            }else{
                return            $response->getMessage();
                return redirect()->route('pay.cancel');
            }

        }catch(\Throwable $t){
            return     $t->getMessage();
           return redirect()->route('pay.cancel');

        }
    }

    public function pay_result(Request $request){

        if($request->input("paymentId") && $request->input("PayerID")){
            $transaction = $this->getway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId')
            ));
            $response = $transaction->send();
            if($response->isSuccessful()){
                $arr=$response->getData();
                $data=$request->all();
                $transaction=Transaction::where('transactionId', $data['paymentId'])->first();
                $transaction->update(['status'=>"payes"]);
                return redirect()->route('pay.success');
            }else{
                // return $response->getMessage();
                return redirect()->route('pay.cancel');
            }
        }

    }


}
