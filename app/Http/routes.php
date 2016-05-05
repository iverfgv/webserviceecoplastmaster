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

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

/////////////EMBARQUES-ECOPLAST///////////////////
Route::resource('embarques','EmbarqueController');      //index. catalogo
Route::get('embarques','EmbarqueController@index');   


/////////////EMPRESA-ECOPLAST///////////////////
Route::resource('empresas','EmpresaController');       
Route::get('empresas','EmpresaController@index'); 


/////////////RASTREOS-ECOPLAST///////////////////
//Route::resource('rastreo','EmpresaController');       
Route::get('rastreo','RastreoController@index');  

/////////////EMBARQUES-ECOPLAST///////////////////
Route::resource('embarques','EmbarqueController');    
Route::get('embarques','EmbarqueController@index');
Route::get('embarques/embarquedel/{id}','EmbarqueController@delete'); 


/////////////USUARIOS-ECOPLAST///////////////////
Route::resource('usuario','usuariocontroller');
Route::get('/usuarios','usuariocontroller@index');
Route::get('usuarios/usuariodel/{id}','usuariocontroller@delete');


/////////////PERFIL-ECOPLAST///////////////////
Route::resource('perfil','perfilcontroller');
Route::get('/perfiles','perfilcontroller@index');
Route::get('perfiles/perfildel/{id}','perfilcontroller@delete');


/////////////UBICACION-ECOPLAST///////////////////
Route::resource('ubicacion','ubicacionescontroller');
Route::get('/ubicaciones','ubicacionescontroller@index');
Route::get('ubicaciones/ubicacionesdel/{id}','ubicacionescontroller@delete');







/***************** Rutas para aplicacion movil **************************/
/////////////LOGIN-ECOPLAST///////////////////
Route::post('login','logincontroller@login');


Route::post('login/obtener','logincontroller@obtener');
Route::post('login/getallusers','logincontroller@obtenerusers');

/////////////MOVIMIENTOS-ECOPLAST///////////////////
Route::post('movimientos','movimientocontroller@registrar');
Route::post('historial/obtener','historialcontroller@obtener');
Route::post('historial/obtenerh','historialcontroller@obtenerhistorial');

/////////////SINCRONIZAR-ECOPLAST///////////////////
Route::post('sincronizar','sincronizarcontroller@registrar');
