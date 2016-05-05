<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Session;
use App\User;
use App\perfiles;
use App\ubicaciones;

class usuariocontroller extends Controller
{
     public function store(Request $request){
     	$activo=0;

     	$contrasena=md5($request['contrasena']);		

		if($request['activo']=="si")
		{	
			$activo=1;
		}		

	    User::create([
	            		'usuario'=>$request['usuario'],
	            		'nombre'=>$request['nombre'],
	            		'contrasena'=>$contrasena,
	            		'perfiles_id'=>$request['perfil'],
	            		'ubicaciones_id'=>$request['ubicacion'],
	            		'activo'=>$activo
	            	]);

	    $usuarios = DB::table('usuarios')  
            ->join('perfiles','usuarios.perfiles_id','=','perfiles.id')  
            ->join('ubicaciones','usuarios.ubicaciones_id','=','ubicaciones.id')  
            ->select('usuarios.*','perfiles.perfil','ubicaciones.ubicacion')
            ->get();

	   return view('usuarios',compact('usuarios'));
    }

    public function index(){
    	 $usuarios = DB::table('usuarios')  
            ->join('perfiles','usuarios.perfiles_id','=','perfiles.id')  
            ->join('ubicaciones','usuarios.ubicaciones_id','=','ubicaciones.id')  
            ->select('usuarios.*','perfiles.perfil','ubicaciones.ubicacion')
            ->get();

	   return view('usuarios',compact('usuarios'));
    }

     public function delete($id)
     { 
        User::destroy($id);
        Session::flash('message','usuario Eliminado Correctamente');  
    	
    	return redirect('/perfiles');
      }
}
