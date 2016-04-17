<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoempresas extends Model
{
    protected $table = 'tipoempresas';
    protected $fillable = ['tipoempresas','cliente','proveedor','activo'];
    protected $guarded=['id'];
}
