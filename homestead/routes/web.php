<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return 'Pagina de Login';
})->name('login');

Route::get('/usuarios', function () {
    return 'Hello Usuarios.';
});

Route::get('/clientes', 'ClientesController@index') ->name('clientes.index');

Route::get('/clientes/testeAdd', 'ClientesController@testeAdd') ->name('clientes.testeAdd');

Route::post('/clientes/salvar', 'ClientesController@salvar') ->name('clientes.salvar');

Route::post('/clientes/{id}', 'ClientesController@atualizar') ->name('clientes.atualizar');

Route::get('/clientes/{id}/excluir', 'ClientesController@salvar') ->name('clientes.excluir');

Route::get('/clientes/{id}', 'ClientesController@detalhes') ->name('clientes.detalhes');

Route::get('/clientes/{id}/enderecos/{end_id}', 'ClientesController@enderecos') ->name('clientes.enderecos');

Route::get('/mercadorias/json', 'MercadoriasController@json');

Route::resource('mercadorias', 'MercadoriasController');

Route::resource('veiculos', 'VeiculosController');