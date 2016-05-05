<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empresas extends Model
{	
	public $timestamps = false;
    protected $table='empresas';
   protected $fillable=['empresa','tiposempresas_id','razonsocial'];
   protected $guarded=['id'];
}
