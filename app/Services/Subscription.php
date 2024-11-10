<?php

namespace App\Services;

use App\Models\TSubscription;
use Illuminate\Support\Facades\Auth;

class Subscription{

    protected $request;
    protected $vedio;
    protected $cource;
    public function __construct($request ,$vedio,$cource)
    {
        $this->request = $request;
        $this->vedio = $vedio;
        $this->cource = $cource;

    }
    public function createSubscription($amount){
        $subscription = TSubscription::create([
            "gateway" => $this->request->gateway,
            'fk_i_user_id' => Auth::id(),
            'fk_i_cource_id' => $this->cource->pk_i_id,
            'fk_i_vedio_id' => $this->vedio->pk_i_id,
            'amount' => $amount,
            'stauts' => 'pending',
        ]);
        return $subscription;
    }
}
