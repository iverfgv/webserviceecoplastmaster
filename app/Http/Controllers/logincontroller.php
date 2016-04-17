<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Response;


class logincontroller extends Controller
{	
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function login(Request $request)
    {    	
    	$name = $request->input('name');
    	$pass = $request->input('pass');

    	$user = DB::table('users')
        ->join('perfiles','users.id','=','perfiles.id')      
        ->select('users.*','perfiles.*')    
        ->whereusuario($name)->wherepassword($pass)->get();
    	
		
    	 return response()->json($user,200);    	
    }

    public function obtener(Request $request)
    {       
        $usuario=$request->input('name');
        
        $user = DB::table('users')    
        ->select('users.*')    
        ->whereusuario($usuario)->get();
    
         return $user;    
    }
}
