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
Route::get('/nosotros', function () {
    return 'Hola mundo';
});
/*para mandarle parametros a la página */
/*si un valor no es mandado se pone un null */
/*el valor es opcional */
Route::get('/name/{name}/{lastname?}', function ($name,$lastName='null') {
    return 'Hola '.$name." ".$lastName;
});
/*esto sirve para mandar llamar una funcion dentro del PruebaController llamada prueba */
Route::get('prueba/{name}', 'PruebaController@prueba');

Route::resource('trainers', 'TraineController');