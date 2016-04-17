<?php

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Credentials: true');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers:  'Content-Type, Accept, Authorization, X-Requested-With'");
header('Access-Control-Allow-Headers: Origin, Content-Type, *');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::post('login','logincontroller@login');

Route::post('login/obtener','logincontroller@obtener');

Route::post('movimientos','movimientocontroller@registrar');
Route::post('movimientos/obtener','historialcontroller@obtener');

Route::get('/', function () {
    return view('welcome');
});
