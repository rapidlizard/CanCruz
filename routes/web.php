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

Route::resource('reserva','ReservaController');

Route::resource('estancia','EstanciaController');

Route::resource('calculadora','CalculadoraCotroller');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
