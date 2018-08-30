<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\AdaptivePayments;
use PayPal;
use Illuminate\Support\Facades\Mail;
use Session;

class DonateController extends Controller
{
    public function index()
    {
        return view('donate.donate');
    }

    public function storePayment(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email',
            'name' => 'min:3'


        ]);
        $data = array(
            'email' => $request->email,
            'name' => $request->name
        );



        // Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
        \Stripe\Stripe::setApiKey("sk_test_Tz2zoQSqOfQp27Qk0aMOaa4X");

// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:
        $token = $_POST['stripeToken'];
        $charge = \Stripe\Charge::create([
            'amount' => 100,
            'currency' => 'usd',
            'description' => 'bishal',
            'source' => $token,
        ]);
        Mail::send('emails.thankdonate', $data, function($message) use ($data){
            $message->to($data['email']);
            $message->from('great.shah222@gmail.com');
        });
        Mail::send('emails.admindonate', $data, function($message) use ($data){
            $message->to('t5shbi00@students.oamk.fi');
            $message->from('great.shah222@gmail.com');
        });
        Session::flash('success','Thanks for Donation');

        return redirect()->route('name')  ;  }

public function payWithPaypal()
{
    {
        $provider = new AdaptivePayments;
        $provider = PayPal::setProvider('adaptive_payments');     // To use adaptive payments.



        $data = [
            'receivers' => [
                [
                    'email' => 'great.shah222-facilitator_api1.gmail.com
',
                    'amount' => 9,
                    'primary' => true,
                ],
                [
                    'email' => 'www@yyy.zzz',
                    'amount' => 1,
                    'primary' => false
                ]
            ],
            'payer' => 'EACHRECEIVER',
            'return_url' => asset('name'),
            'cancel_url' => asset('name'),
        ];

        $response = $provider->createPayRequest($data);
        //dd($response);
        $redirect_url = $provider->getRedirectUrl('approved', $response['payKey']);

        return redirect($redirect_url);

    }

}
}
