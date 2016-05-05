<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ubicacionempresa extends Model
{
	public $timestamps = false;
    protected $table='ubicacionesempresas';
   protected $fillable=['ubicaciones_id','empresas_id'];
   protected $guarded=['id'];
}
