<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ubicacionempresa extends Model
{
    protected $table='ubicacionempresas';
   protected $fillable=['idubicacionempresas','ubicaciones_id','empresas_id'];
   protected $guarded=['id'];
}
