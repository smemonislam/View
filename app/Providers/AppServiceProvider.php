<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\View\ViewComposer;
use App\View\Composers\UserComposer;
use Illuminate\Support\Facades\DB;

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
        # Sharing Data With All Views

        View::share( [ 'siteName' => "W3Programmers"] );
        View::share( [ 'customers' => DB::table('customers')->get() ] );
        
        // View::composer(['user', 'welcome'], function( $view ){
        //     $view->with('orders', DB::table('customers')
        //     ->selectRaw('CONCAT(first_name, " ", last_name) as fullName, order_date, amount')
        //     ->join('orders', 'customers.id', 'orders.customer_id')
        //     ->get());
        // });

        // View::composer(['welcome', 'user'], ViewComposer::class);
        View::composer(['welcome', 'user'], UserComposer::class);
    }
}
