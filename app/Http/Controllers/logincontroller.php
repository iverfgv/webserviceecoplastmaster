<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Response;
use session;
use App\User;
use Hash;

class logincontroller extends Controller
{	
    public function login(Request $request)
    {       
        /*User::create([
            'perfiles_id'=>'1',    
            'ubicaciones_id'=>'1',
            'usuario'=>'iver',
            'nombre'=>'iver',
            'password'=> Hash::make('iver'),
            'activo'=>'1',
            'remember_token'=>'',
            'created_at'=>'2016-04-28',
            'updated_at'=>'2016-04-28'
            ]);*/

        /*$pass = DB::table('users')    
        ->select('users.password')    
        ->whereusuario('iver')->wherepassword('$2y$10$1p6y68eGL9Sbjgpb4JSjAOJaXPlQKkAabS6SG3fJSfsIddBPSgsLS')->first();*/

        /*$variable="ivers";
        $valor=Hash::check($variable, $pass->password); // true
         return response()->json($valor,200);*/
   
        $name = $request->input('name');
        $pass = $request->input('pass');
        
        $user = DB::table('usuarios')
        ->select('usuarios.*')    
        ->whereusuario($name)->wherecontrasena($pass)->get();     
        
        return response()->json($user,200);     
    }

    public function obtener(Request $request)
    {       
        $usuario=$request->input('name');
        
        $user = DB::table('usuarios')    
        ->select('usuarios.*')    
        ->whereusuario($usuario)->get();
    
         return $user;    
    }

      public function obtenerusers(Request $request)
    {

        /*if(DB::connection()->getDatabaseName())
        {
           echo "Connected to: ".DB::connection()->getDatabaseName();
        }
        return response()->json("",200);*/

        if($request->input('token')=="oPs1sHzle9O7jbJZcdVaFY3cAY0QHh8l3niucfcBLiaLT1yltPrh98aCbVRt")
        {
            $user = DB::table('usuarios')  
            ->join('ubicaciones','usuarios.ubicaciones_id','=','ubicaciones.id')  
            ->select('usuarios.usuario','usuarios.contrasena','usuarios.nombre','ubicaciones.ubicacion')
            ->where('usuarios.activo','=','1')->get();
            return $user;
        }

        else
        {
           return response()->json("",200);
        }
    }
}
