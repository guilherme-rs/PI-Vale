<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Api'], function(){
    //route::resource('telefones', 'TelefonesController');
    Route::get('telefones', 'TelefonesController@index');
    Route::post('telefones', 'TelefonesController@store');
    Route::get('telefones/{telefone}', 'TelefonesController@show');
    Route::put('telefones/{telefone}', 'TelefonesController@update');
    Route::delete('telefones/{telefone}', 'TelefonesController@destroy');

    //Route::resource('predios', 'PrediosController');
    Route::get('predios', 'PrediosController@index');
    Route::post('predios', 'PrediosController@store');
    Route::get('predios/{predio}', 'PrediosController@show');
    Route::get('predios/{predio}/salas', 'PrediosController@salas');
    Route::put('predios/{predio}', 'PrediosController@update');
    Route::delete('predios/{predio}', 'PrediosController@destroy');

//    Route::resource('funcionarios', 'FuncionariosController');
    Route::get('funcionarios', 'FuncionariosController@index');
    Route::post('funcionarios', 'FuncionariosController@store');
    Route::get('funcionarios/{funcionario}', 'FuncionariosController@show');
    Route::put('funcionarios/{funcionario}', 'FuncionariosController@update');
    Route::delete('funcionarios/{funcionario}', 'FuncionariosController@destroy');

    Route::get('salas', 'SalasController@index');

    Route::get('rotasfugas', 'RotasfugasController@index');

    Route::get('soap', 'SoapController@show');
});