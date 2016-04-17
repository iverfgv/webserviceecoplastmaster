<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grupos extends Model
{
    protected $table='grupos';
   protected $fillable=['grupo','clave'];
   protected $guarded=['id'];
}
