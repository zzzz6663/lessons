<?php

namespace App\Http\Controllers;

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

    public function send_pay(Request $request){
        // سس
        try{

            $response=$this->getway->purchase([
                'amount'=>$request->amount,
                'currency'=>'USD',
                "returnUrl"=>route("pay.result"),
                "cancelUrl"=>route("pay.result"),
            ])->send();
            if($response->isRedirect()){
                $response->redirect();
            }else{
                return            $response->getMessage();
            }

        }catch(\Throwable $t){
            return     $t->getMessage();

        }
    }

    public function pay_result(Request $request){
        if($request->input("paymentId") && $request->input("PayerID")){
            $action=$this->getway->completePurchase([
                'payes_id'=> $request->input("PayerID"),
                'transactionReference'=> $request->input("paymentId"),
            ]);
            $res=$action()->send();
            if($res->isSuccessful()){
                $arr=$res->getData();
                return "pays is  success";
            }else{
                return $res->getMessage();
            }
        }

    }
}
