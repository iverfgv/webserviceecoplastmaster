<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class embarques extends Model
{   public $timestamps = false;
    protected $table='embarques';
   protected $fillable=['usuarios_id','materiales_id','ubicaciones_id','peso','fechalocal','fecha','codigocontrol','cancelado','notasalidaecoplast','notasalidacliente'];
   protected $guarded=['id'];
}
