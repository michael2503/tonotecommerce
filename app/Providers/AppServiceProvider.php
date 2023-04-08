<?php

namespace App\Providers;

use App\Models\ShoppingCart;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();

        view()->composer('*', function($view)
        {
            $totalQuantity = 0;
            if(Auth::user()){
                $carts = ShoppingCart::where('user_id', Auth::user()->id)->get();
                if($carts){
                    foreach ($carts as $value) {
                        $totalQuantity += $value['qty'];
                    }
                }
            }
            $view->with('totalQuantity', $totalQuantity);

        });
    }
}
