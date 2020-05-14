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

Route::get('/home', 'ReservaController@index')->name('home');

Route::resource('reserva','ReservaController')->middleware('auth');

Route::resource('estancia','EstanciaController');

Route::resource('calculadora','CalculadoraController');

Route::get('/masia','PagesController@masia');


Route::get('/huerto_cocina','PagesController@huerto_cocina');

Route::get('/parque_montseny','PagesController@parque_montseny');

Route::get('/contacto','PagesController@contacto');

Route::get('/puigracios','PagesController@puigracios');

Route::get('/santcristofol','PagesController@santcristofol');

Route::get('/rocacentella','PagesController@rocacentella');



