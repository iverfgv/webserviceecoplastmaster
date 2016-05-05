<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Session;

class RastreoController extends Controller
{
    public function index()
    {
    	        
		$flag=1;
    	$rastreo = DB::table('rastreos')
          ->select('rastreos.*')
          ->paginate(20);
                   	
          
      	return view('/rastreo',['rastreos'=>$rastreo]);
    }

}
