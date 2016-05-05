<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\embarques;
use DB;
use Auth;
use Response;

class historialcontroller extends Controller
{
   public function obtener(Request $request)
   {
       	$fecha = $request->input('fecha');  
        $nombreusuario=$request->input('usuario');	
        $sql = "select rastreo.fecha, rastreo.entrada, embarques.id, embarques.peso, materiales.material, embarques.codigocontrol FROM rastreo ".
          "inner join embarques on rastreo.embarques_id = embarques.id ".
          "inner join usuarios on rastreo.usuarios_id = usuarios.id ".
          "inner join ubicaciones on rastreo.ubicaciones_id = ubicaciones.id ".
          "inner join materiales on embarques.materiales_id = materiales.id ".
          "where usuarios.activo=1 and usuarios.usuario='".$nombreusuario."' and CAST(rastreo.fecha AS DATE) ='".$fecha."'";       
        
	      $historial = DB::select(DB::raw($sql));

      
         return $historial;

    }
  
   /*public function obtenerhistorial(Request $request)
    {        
      
       $fecha = $request->input('fecha');
       $fechaAux = $request->input('fecha');
       $fechafin = $fechaAux." 11:59:00";
    
       $sql = "SELECT * FROM rastreo ".
          "INNER JOIN embarques ON rastreo.embarques_id = embarques.id ".
          "INNER JOIN usuarios ON rastreo.usuarios_id = usuarios.id ".
          "INNER JOIN ubicaciones ON rastreo.ubicaciones_id = ubicaciones.id ".
          "INNER JOIN materiales ON embarques.materiales_id = materiales.id ".
          "WHERE usuarios.activo=1 AND CAST(rastreo.fecha as DATE)='".$fecha."'";
        $historial = DB::select( DB::raw($sql));
                                                           
         return $historial;
    }*/
  
}
