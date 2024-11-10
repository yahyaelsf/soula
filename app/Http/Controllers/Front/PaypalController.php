<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
class PaypalController extends Controller
{
    /**
     * @var \PayPalCheckoutSdk\Core\PayPalHttpClient;
     */
    protected $client;
    public function __construct()
    {
        $this->client =App::make('paypal.client');
    }
    public function create(){
        $request = new OrdersCreateRequest();
        $request->prefer('return=representation');
        $request->body = [
            "intent" => "CAPTURE",
            "purchase_units" => [[
                "reference_id" => "vedio_id",
                "amount" => [
                    "value" => "100.00",
                    "currency_code" => "USD"
                ]
            ]],
            "application_context" => [
                "cancel_url" => "https://example.com/cancel",
                "return_url" => "https://example.com/return"
            ]
        ];

        try {
            // Call API with your client and get a response for your call
            $response = $this->client->execute($request);

            // If call returns body in response, you can get the deserialized version from the result attribute of the response
            print_r($response);
        }catch (\PayPalHttp\HttpException $ex) {
            echo $ex->statusCode;
            print_r($ex->getMessage());
        }
    }
}
