<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ubicaciones extends Model
{
	public $timestamps = false;
    protected $table='ubicaciones';
   	protected $fillable=['ubicacion','clave','descripcion','activo'];
    protected $guarded=['id'];
}
