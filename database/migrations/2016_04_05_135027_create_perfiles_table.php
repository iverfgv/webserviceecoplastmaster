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
           
        });

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
