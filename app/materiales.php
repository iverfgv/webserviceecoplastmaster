<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materiales extends Model
{
    protected $table='materiales';
   protected $fillable=['grupos_id','material','clave'];
   protected $guarded=['id'];
}
