<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accesos extends Model
{   public $timestamps = false;
    protected  $table='accesos';

   protected $fillable=['acceso','nombre','email','activo','empresas_id'];

    protected $guarded=['id'];
}
