<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  public $timestamps = false;
   protected $table='usuarios';
   protected $fillable=['usuario','nombre','contrasena','perfiles_id','ubicaciones_id','activo'];
   protected $guarded=['id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   
    
    protected $hidden = [
        'password', 'remember_token',
    ];
}
