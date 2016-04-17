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
    	//$fecha = '%' . $fecha . '%';

    	$historial = DB::table('rastreos')
		    ->join('embarques', 'rastreos.embarques_id', '=', 'embarques.id')
		    ->join('users', 'rastreos.usuario_id', '=', 'users.id')
		    ->join('ubicaciones', 'rastreos.ubicaciones_id', '=', 'ubicaciones.id')
		    ->join('materiales','embarques.materiales_id', '=','materiales.id')            
            ->select('rastreos.fecha', 'embarques.codigocontrol','embarques.peso','users.usuario','users.nombre','materiales.material','materiales.id','ubicaciones.id','ubicaciones.ubicacion')      
        	->where('users.activo','=',1)->where('rastreos.fecha','=','2016-03-16 16:00:05')->get();
        										
         return $historial;
    }
}
