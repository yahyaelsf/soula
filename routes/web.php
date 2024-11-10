<?php

use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\PaymentController;
use App\Http\Controllers\Front\ThawaniController;
use App\Http\Controllers\ImageServiceController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/optimize', function () {
    Artisan::call('optimize:clear',[]);

    return "Optimized Successfully!";
});

Route::get('/img/{path}', [ImageServiceController::class, 'show'])->where('path', '.*');;
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/cources',[HomeController::class,'cources'])->name('cources');
Route::get('/cource-detials/{id}',[HomeController::class,'courceDetials'])->name('cource.detials');
Route::post('/register',[HomeController::class,'register'])->name('register');
Route::post('/logging',[HomeController::class , 'logging'])->name('front.logging');
Route::get('/logout',[HomeController::class , 'logout'])->name('logout');
Route::post('/subscription',[HomeController::class , 'subscription'])->name('front.subscription');


// Payments route
// Route::get('payments/create' , [ThawaniController::class , 'create'] )->name('payments.create');
// Route::get('payments/callback/success' , [ThawaniController::class , 'success'] )->name('payments.success');
// Route::get('payments/callback/cancel' , [ThawaniController::class , 'cancel'] )->name('payments.cancel');
