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

Route::get('canchas', 'Api\v1\CanchaController@index');
Route::get('canchas/{cancha}', 'Api\v1\CanchaController@show');

Route::get('reservas', 'Api\v1\ReservaController@index');
Route::get('reservas/{reserva}', 'Api\v1\ReservaController@show');

Route::get('precios', 'Api\v1\PrecioController@index');
Route::get('precios/{precio}', 'Api\v1\PrecioController@show');

Route::group(['middleware' => 'auth:api'], function() {
  Route::post('canchas', 'Api\v1\CanchaController@store');
  Route::put('canchas/{cancha}', 'Api\v1\CanchaController@update');
  Route::delete('canchas/{cancha}', 'Api\v1\CanchaController@delete');

  Route::post('reservas', 'Api\v1\ReservaController@store');
  Route::put('reservas/{reserva}', 'Api\v1\ReservaController@update');
  Route::delete('reservas/{reserva}', 'Api\v1\ReservaController@delete');

  Route::post('precios', 'Api\v1\PrecioController@store');
  Route::put('precios/{precio}', 'Api\v1\PrecioController@update');
  Route::delete('precios/{precio}', 'Api\v1\PrecioController@delete');
});
