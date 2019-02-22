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
    return view('lista');
});

Auth::routes();

Route::get('/', 'ClienteController@index')->name('home');

Route::get('home', 'HomeController@index')->name('home');
Route::get('cliente', 'ClienteController@index')->name('cliente');
Route::get('cliente/formCliente', 'ClienteController@formCreate')->name('createFormCliente');
Route::get('cliente/store', 'ClienteController@store')->name('createCliente');
Route::post('cliente/store', 'ClienteController@store')->name('createCliente');
Route::get('cliente/{cliente}/edit', 'ClienteController@edit')->name('editCliente');
Route::patch('cliente/{cliente}', 'ClienteController@update')->name('updateCliente');
Route::delete('cliente/{cliente}', 'ClienteController@destroy')->name('updateCliente');


Route::get('veiculo', 'VeiculoController@index')->name('veiculo');
Route::get('reconhecimento_placa/veiculo', 'VeiculoController@index')->name('veiculo');
Route::get('veiculo/formveiculo', 'VeiculoController@formCreate')->name('createFormVeiculo');
Route::get('veiculo/store', 'VeiculoController@store')->name('createVeiculo');
Route::post('veiculo/store', 'VeiculoController@store')->name('createVeiculo');
Route::get('veiculo/{veiculo}/edit', 'VeiculoController@edit')->name('editVeiculo');
Route::patch('veiculo/{veiculo}', 'VeiculoController@update')->name('updateVeiculo');
Route::delete('veiculo/{veiculo}', 'VeiculoController@destroy')->name('updateVeiculo');
