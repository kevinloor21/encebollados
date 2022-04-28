<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuario','UsuarioController@index')->name('usuario');


Route::get('/usuario/create','UsuarioController@create')->name('usuario.create');

Route::post('/usuario/store','UsuarioController@store')->name('usuario.store');

Route::get('/clientes','ClientesController@index')->name('clientes');

Route::get('/cliente/create','ClientesController@create')->name('clientes.create');

Route::post('/cliente/store','ClientesController@store')->name('cliente.store');

Route::get('/cliente/edit/{cli_id}','ClientesController@edit')->name('cliente.edit');

Route::post('/cliente/update/{cli_id}','ClientesController@update')->name('cliente.uptade');

Route::post('/cliente/destroy/{cli_id}','ClientesController@destroy')->name('cliente.destroy');

Route::post('/usuario/destroy/{usu_id}','UsuarioController@destroy')->name('usuario.destroy');

Route::get('/comida','ComidaController@index')->name('comida');

Route::get('/comida/create','ComidaController@create')->name('comida.create');

Route::post('/comida/store','ComidaController@store')->name('comida.store');







