<?php

namespace App\Providers;

use App\Cliente;
use App\Mercadoria;
use App\Veiculo;
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

        view()->composer('layouts.barra-lateral', function($view){
            $mercadorias = ['Celular', 'TV', 'Geladeira', 'Microondas'];
            $view->with('mercadorias', $mercadorias);
        });

        view()->composer('mercadorias.index', function ($view){
            $mercadorias = Mercadoria::get();
            $view->with('mercadorias', $mercadorias);
        });

        view()->composer('clientes.index', function ($view){
            $clientes = Cliente::get();
            $view->with('clientes', $clientes);
        });
		
        view()->composer('veiculos.index', function ($view){
            $veiculos = Veiculo::get();
            $view->with('veiculos', $veiculos);
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
