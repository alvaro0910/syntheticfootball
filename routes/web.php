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

Auth::routes();

Route::get('/homeadm', 'HomeController@index')->name('admin');
Route::get('/homeusu', 'HomeController@index')->name('usu');
//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function() {
  Route::resource('canchas','CanchaController');
  Route::resource('precios','PrecioController');
  Route::resource('reservas','ReservaController');
  Route::resource('canchasusu','CanchaUsuController');
  Route::resource('reservasusu','ReservaUsuController');
});
