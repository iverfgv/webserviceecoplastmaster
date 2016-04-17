<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\perfiles;
use App\Http\Requests;

class CreatePerfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('perfil',100);
            $table->tinyInteger('pesaje');
            $table->tinyInteger('supervisor');
            $table->tinyInteger('embarques');
            $table->tinyInteger('administracion');
            $table->tinyInteger('reportes');
            $table->tinyInteger('activo');
            $table->timestamps();
        });

        perfiles::create([
                'perfil'=>'iver fabian gonzalez vidal',    
                'pesaje'=>'1',
                'supervisor'=>'1',
                'embarques'=>'1',
                'administracion'=>'1',
                'reportes'=>'1',
                'activo'=>'1',
                ]);

         perfiles::create([
                'perfil'=>'Raul herrera lopez',    
                'pesaje'=>'1',
                'supervisor'=>'1',
                'embarques'=>'1',
                'administracion'=>'1',
                'reportes'=>'1',
                'activo'=>'1',
                ]);

          perfiles::create([
                'perfil'=>'roman albores',    
                'pesaje'=>'1',
                'supervisor'=>'1',
                'embarques'=>'1',
                'administracion'=>'1',
                'reportes'=>'1',
                'activo'=>'1',
                ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('perfiles');
    }
}
