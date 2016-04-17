<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accesos extends Model
{
    protected  $table='users';

   protected $fillable=['perfiles_id','ubicaciones_id','nombre','password','activo','remember_token'];

    protected $guarded=['id'];
}
