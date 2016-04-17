<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perfiles extends Model
{
    protected $table='perfiles';
   protected $fillable=['perfil','pesaje','supervisor','embarques','administracion','reportes','activo'];
   protected $guarded=['id'];
}
