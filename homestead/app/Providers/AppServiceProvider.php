<?php

namespace App\Providers;

use App\Cliente;
use App\Motorista;
use App\Mercadoria;
use App\Veiculo;
use App\Renavan;
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

        view()->composer('clientes.index', function ($view){
            $clientes = Cliente::get();
            $view->with('clientes', $clientes);
        });
		
        view()->composer('motoristas.index', function ($view){
            $motoristas = Motorista::get();
            $view->with('motoristas', $motoristas);
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
