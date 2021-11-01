<?php

namespace App\Http\Controllers;
use App\Mail\EmailVerificationMail;
use Mail;
use App\Mail\SendRobotMail;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function paymentGateway(Request $request){
        return view('page.payment');
    }

    public function verify(Request $request){
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/{$request->transaction_id}/verify",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Authorization: Bearer FLWSECK_TEST-4029b9a3e96ba89811aaf2ee043f6a1d-X"//FLWSECK-ff1a4b506238917948edeb9b36eb3b1e-X  is for live environment 
        ),// for test FLWSECK_TEST-4029b9a3e96ba89811aaf2ee043f6a1d-X
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        //echo $response;
        $res = json_decode($response, TRUE);

        //Mail::to($request->email)->send(new SendRobotMail($res));
        
        return $res;
    }
}