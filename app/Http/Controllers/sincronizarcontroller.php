<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Routing\UrlGenerator;
use Storage;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\embarques;
use App\rastreo;
use DB;
use Auth;
use Response;


class sincronizarcontroller extends Controller
{
    
     public function registrar(Request $request){

   $idTransaccion=0;
    	$code="999";
    	$status="ERROR";
    	$message="Registro no guardado";
    	$idEmbarque=0;
    	$idUser=0;
    	$url=null;
	
    	$idEmbarque= DB::table('embarques')    
        ->select('embarques.id')    
        ->wherecodigocontrol($request->input('codigoControl'))->first();


        $idusuario= DB::table('usuarios')    
        ->select('usuarios.id')    
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
	    	$urlFirmas = DB::table('rastreo')    
		        ->select('rastreo.firma')  
		        ->whereentrada($request->input('entradaSalida'))
		        ->whereplacas($request->input('matricula'))->first();

		        //return response()->json($urlFirmas,200);
		    
	    	if($urlFirmas==null)
	    	{
	    		$img=$request->input('firma');
	    		$img = str_replace('data:image/png;base64,', '', $img);
				$img = str_replace(' ', '+', $img);
				$data = base64_decode($img);
	
				$nombreImagen=uniqid();
			
				$file = "../public/store".$nombreImagen . '.png';
				$success = file_put_contents($file, $data);   

				//$contents = Storage::disk('s3')->get($nombreImagen . '.png');

				//$s3=Storage::disk('s3')->put('file.txt','contenido del rchivo','public');		
				$s3=Storage::disk('s3')->put('store' . $nombreImagen . '.png',$data,'public');	

				$urlFirma=(Storage::cloud()->url('store' . $nombreImagen . '.png'));
				$url=str_replace('your-bucket','ecoplast', $urlFirma);

				 

	    	}

	    	if($urlFirmas!=null)
	    	{
	    		$urlFirma= DB::table('rastreo')    
		        ->select('rastreo.*')  
		        ->whereentrada($request->input('entradaSalida'))
		        ->whereplacas($request->input('matricula'))->first();
		        //->whereautorizadopor($request->input('autorizadopo'))->first();

		        $url=$urlFirma->firma;
				 

	    	} 
	   	
	    	
 			if(strlen($url)>10)
 			{
						rastreo::create([
							'embarques_id'=>$idEmbarque,	
							'fecha'=>$request->input('fecha'),
							'firma'=>$url,
							'entrada'=>$request->input('entradaSalida'),
							'usuarios_id'=>$idUser,
							'ubicaciones_id'=>$request->input('idUbicacion'),
							'placas'=>$request->input('matricula')
							//'autorizadopor'=>$request->input('autorizadopo')
							]);

						if($urlFirmas==null)
						{
							unlink("store".$nombreImagen.".png");
						}
			}
				

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
