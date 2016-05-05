<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ubicaciones;
use DB;
use Session;

class ubicacionescontroller extends Controller
{
	public function store(Request $request){
		$activo=0;
		if($request['activo']=="si")
		{	
			$activo=1;
		}

	    ubicaciones::create([
	            		'ubicacion'=>$request['ubicacion'],
	            		'clave'=>$request['clave'],
	            		'descripcion'=>$request['descripcion'],
	            		'activo'=>$activo
	            	]);

	   $ubicaciones=DB::table('ubicaciones')
    				 	 ->select('ubicaciones.*')->get();

	   return view('ubicaciones',compact('ubicaciones'));
    }

    public function index(){
    	$ubicaciones=DB::table('ubicaciones')
    				 	 ->select('ubicaciones.*')->get();

	   return view('ubicaciones',compact('ubicaciones'));
    }

     public function delete($id)
     { 
        ubicaciones::destroy($id);
  		Session::flash('message','Embarque Eliminado Correctamente');    
    	
    	return redirect('/ubicaciones');
      }
}
