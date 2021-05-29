<?php

namespace App\Providers;

use Airwire\Airwire;
use App\Airwire\UpdateProduct;
use Illuminate\Support\ServiceProvider;

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
        Airwire::component('update-product', UpdateProduct::class);
    }
}
