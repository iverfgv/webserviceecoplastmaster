<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empresas extends Model
{
    protected $table='empresas';
   protected $fillable=['tiposempresas_id','empresa','empresa'];
   protected $guarded=['id'];
}
