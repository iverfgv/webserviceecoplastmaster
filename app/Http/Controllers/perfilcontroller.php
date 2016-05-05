<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\perfiles;
use Session;
use DB;

class perfilcontroller extends Controller
{
    public function store(Request $request){
    	$pesaje=0;
    	$supervisor=0;
    	$embarques=0;
    	$administracion=0;
    	$reportes=0;
		$activo=0;

		if($request['activo']=="si")
		{	
			$activo=1;
		}

		if($request['pesaje']=="on")
		{
			$pesaje=1;
		}

		if($request['supervisor']=="on")
		{
			$supervisor=1;
		}

		if($request['embarques']=="on")
		{
			$embarques=1;
		}

		if($request['administracion']=="on")
		{
			$administracion=1;
		}

		if($request['reportes']=="on")
		{
			$reportes=1;
		}

	    perfiles::create([
	            		'perfil'=>$request['perfil'],
	            		'pesaje'=>$pesaje,
	            		'supervisor'=>$supervisor,
	            		'embarques'=>$embarques,
	            		'administracion'=>$administracion,
	            		'reportes'=>$reportes,
	            		'activo'=>$activo
	            	]);

	   $perfiles=DB::table('perfiles')
    				 	 ->select('perfiles.*')->get();

	   return view('perfiles',compact('perfiles'));
    }

    public function index(){
    	 $perfiles=DB::table('perfiles')
    				 	 ->select('perfiles.*')->get();

	   return view('perfiles',compact('perfiles'));
    }

     public function delete($id)
     { 
        perfiles::destroy($id);
        Session::flash('message','Perfil Eliminado Correctamente');  
    	
    	return redirect('/perfiles');
      }
}
