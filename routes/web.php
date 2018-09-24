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
