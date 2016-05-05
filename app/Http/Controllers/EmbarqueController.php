<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App;
use Session;

class EmbarqueController extends Controller
{
    public function index(){
    	 $embarques = DB::table('embarques')
        ->join('materiales', 'materiales.id', '=', 'embarques.materiales_id')
        ->join('usuarios', 'usuarios.id', '=', 'embarques.usuarios_id')
        ->join('ubicaciones', 'ubicaciones.id', '=', 'embarques.ubicaciones_id')
        ->select('embarques.*','materiales.material as material','usuarios.usuario as usuari','ubicaciones.ubicacion as ubica')
        ->paginate(20);
      return view('/embarques',compact('embarques'));
    }

     public function store(Request $request)
    {   
        $hoy = getdate(); 
     $d = $hoy['mday'];
     $m = $hoy['mon'];
     $y = $hoy['year'];
     $fechahoy= ($y.'/'.$m.'/'.$d);
      \App\embarques::create([
               
               'usuarios_id'=>$request['usuario'],
               'materiales_id'=>$request['material'],
               'ubicaciones_id'=>$request['ubicacion'],
               'peso'=>$request['peso'],
               'fecha'=>$fechahoy,
               'fechalocal'=>$request['fecha'],
               'codigocontrol'=>$request['codigo'],
               'cancelado'=>$request['cancelado'],

              ]);

         
        return redirect('/embarques');
       
    }


      public function delete($id)
      { 

          \App\embarques::destroy($id);
          Session::flash('message','Embarque Eliminado Correctamente');    
          return redirect('/embarques');
      }
}
