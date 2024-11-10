<?php

namespace App\Providers;

use App\Models\TSetting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\ProductionEnvironment;
use PayPalCheckoutSdk\Core\SandboxEnvironment;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       if (Schema::hasTable('t_system_settings')) {
            $settings = Cache::rememberForever('settings', function () {
                return TSetting::enabled()->pluck('s_value', 's_key')->toArray();
            });
            view()->share([
                'settings' => $settings,
            ]);
        }
        // singleton => return allways the same object not return new object every time
        $this->app->singleton('paypal.client',function($app){
            $config = config('services.paypal');
            if($config['mode'] == 'sandbox'){
                $environment = new SandboxEnvironment($config['client_id'], $config['client_secret']);
            }else{
                $environment = new ProductionEnvironment($config['client_id'], $config['client_secret']);
            }
            $client = new PayPalHttpClient($environment);
            return $client;
        });
    }
}
