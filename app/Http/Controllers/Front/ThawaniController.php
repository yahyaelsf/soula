<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Services\PaymentService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ThawaniController extends Controller
{
    public function create(){
        $client = new PaymentService(
            config('services.thawani.secret_key'),
            config('services.thawani.publishable_key'),
        );
        $data =[
            "client_reference_id" => "test", //just for you as a developer to return number of oreder on example
            "mode" => "payment", // pay for just one not every month or period
            "products" => [
                [
                    "name" => "first vedio",
                    "unit_amount" =>100*1000,
                    "quantity"=> 2
                ],
            ],
            "success_url" => route('payments.success'),
            "cancel_url" => route('payments.cancel'),

        ];
        try{
            $session_id = $client->createPaymentSession($data);
            $payment = Payment::create([
                'fk_i_user_id' => Auth::id(),
                "gateway" => "thawani",
                'reference_id' => $session_id,
                'amount' => 200,
                'stauts' => 'pending',
            ]);
            Session::put('payment_id' , $payment->pk_i_id);
            Session::put('session_id' , $session_id);
            return redirect()->away($client->getPaymentUrl($session_id));
        }catch(Exception $e){
            dd($e->getMessage());
        }

    }
    public function success()
    {
        $payment_id = Session::get('payment_id');
        $session_id = Session::get('session_id');
        if(!$payment_id && !$session_id){
            abort(404);
        }
        $payment = Payment::findOrFail($payment_id);
        if($payment->reference_id !== $session_id){
            abort(404);
        }
         $client = new PaymentService(
            config('services.thawani.secret_key'),
            config('services.thawani.publishable_key'),
        );
        try{
             $responce = $client->createCheckoutSession($session_id);
             if($responce['data']['payment_status'] == 'paid'){
                $payment->status = 'success';
                $payment->data = $responce;
                $payment->save();
                dd("Success");
             }
        }catch(Exception $e){
            dd($e->getMessage());
        }

    }
    public function cancel()
    {
        $payment_id = Session::get('payment_id');
        $session_id = Session::get('session_id');
        if(!$payment_id && !$session_id){
            abort(404);
        }
        $payment = Payment::findOrFail($payment_id);
        if($payment->reference_id !== $session_id){
            abort(404);
        }
        $payment->status = 'failed';
        $payment->save();
         dd("Failed");
    }
}
