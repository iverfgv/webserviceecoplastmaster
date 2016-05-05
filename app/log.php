<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class log extends Model
{
   public $timestamps = false;
   protected $table='logs';
   protected $fillable=['usuarios_id','log','fecha'];
   protected $guarded=['id'];
}
