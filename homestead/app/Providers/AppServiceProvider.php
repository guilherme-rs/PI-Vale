<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //$mercadorias = ['Celular', 'TV', 'Geladeira', 'Microondas'];
        //view()->share('mercadorias', $mercadorias);
        view()->composer('layouts.barra-lateral', function ($view){
            $mercadorias = ['Celular', 'TV', 'Geladeira', 'Microondas'];
            $view->with('mercadorias', $mercadorias);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
