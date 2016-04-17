<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class embarques extends Model
{
    protected $table='embarques';
   protected $fillable=['usuarios_id','materiales_id','ubicaciones_id','peso','fechalocal','fecha','codigocontrol','cancelado'];
   protected $guarded=['id'];
}
