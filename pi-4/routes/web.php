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
    return view('layouts.main');
});

Route::resource('checklists', 'ChecklistsController');

Route::patch('funcionarios/{funcionario}', 'FuncionariosController@status')->name('funcionarios.status');
Route::resource('funcionarios', 'FuncionariosController');

Route::resource('incidentes', 'IncidentesController');

Route::resource('pessoas', 'PessoasController');

Route::resource('predios', 'PrediosController');

Route::resource('rotafugas', 'RotafugasController');

Route::resource('salas', 'SalasController');

Route::resource('telefones', 'TelefonesController');

Route::resource('visitantes', 'VisitantesController');
