<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Auth;

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
         //compose all the views....
    view()->composer('*', function ($view) 
    {
        //...with this variable
        if(Auth::check())
        $view->with('masv',Auth::user()->sinhvien_ma);

    });
    }
}
