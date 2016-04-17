<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\ubicaciones;
use App\Http\Requests;

class CreateUbicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubicaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ubicacion',100);
            $table->string('clave',10);
            $table->text('descripcion');
            $table->tinyInteger('activo');
            $table->timestamps();
        });

        ubicaciones::create([
                'ubicacion'=>'tuxtla gutierrez',    
                'clave'=>'0001',
                'descripcion'=>'ubicacion de tuxtla',
                'activo'=>'1'
                ]);

        ubicaciones::create([
                'ubicacion'=>'chiapa de corzo',    
                'clave'=>'0002',
                'descripcion'=>'ubicacion de chiapas',
                'activo'=>'1'
                ]);

         ubicaciones::create([
                'ubicacion'=>'san cristobal',    
                'clave'=>'3',
                'descripcion'=>'ubicacion de san cristobal',
                'activo'=>'1'
                ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ubicaciones');
    }
}
