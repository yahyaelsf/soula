<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TCource;
use App\Models\TSubscription;
use App\Models\TUser;
use App\Models\TVedio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $pageTitle = trans('navigation.dashboard');
        $pageDescription = trans('navigation.dashboard');
         $cources = TCource::count();
         $vedios = TVedio::count();
         $users = TUser::count();
         $subscriptions = TSubscription::count();
        return view('admin.home', compact('pageTitle', 'pageDescription','cources','vedios','users','subscriptions'));
    }
}
