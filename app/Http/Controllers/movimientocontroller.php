<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\embarques;
use App\rastreo;
use DB;
use Auth;
use Response;

class movimientocontroller extends Controller
{
	/*$name = $request->input('name');
    $pass = $request->input('pass');*/

    public function registrar(Request $request){
    	
    	$idTransaccion=0;
    	$code="999";
    	$status="ERROR";
    	$message="Registro no guardado";
    	$idEmbarque=0;
    	$idUser=0;

    	$idEmbarque= DB::table('embarques')    
        ->select('embarques.id')    
        ->wherecodigocontrol($request->input('codigoControl'))->first();


        $idusuario= DB::table('users')    
        ->select('users.id')    
        ->whereusuario($request->input('usuarioactual'))->whereactivo("1")->first();
		
        if($idEmbarque!=null)
        {
        	$idEmbarque=$idEmbarque->id;
        }   

        if($idusuario!=null)
        {
        	$idUser=$idusuario->id;
        }        

       

	    if($idEmbarque!=null && $idusuario!=null)
	    {
			rastreo::create([
				'embarques_id'=>$idEmbarque,	
				'fecha'=>$request->input('fecha'),
				'firma'=>$request->input('firma'),
				'entrada'=>$request->input('entradaSalida'),
				'usuario_id'=>$idUser,
				'ubicaciones_id'=>$request->input('idUbicacion'),
				'placas'=>$request->input('matricula')
				]);

			$code="1001";
			$status="SUCCESS";
			$message="Registro guardado";
		}
		if($status!="SUCCESS")
		{$idTransaccion = DB::table('embarques')->max('id');
			$idTransaccion=($idTransaccion+1);
		}

		$respuesta = '{"id":'+$idTransaccion+',"code:"'+$code+'",Cantidad":'+$status+'",message":'+$message+'}';
 		
		return $respuesta;
	}   

}
