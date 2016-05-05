<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rastreo extends Model
{
   public $timestamps = false;
   protected $table='rastreo';
   protected $fillable=['embarques_id','fecha','firma','entrada','usuarios_id','ubicaciones_id','placas'];
   protected $guarded=['id'];
}
