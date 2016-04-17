<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUbicacionempresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubicacionempresas', function (Blueprint $table) {
             $table->increments('id');
            $table->bigInteger('idubicacionempresas');
            $table->integer('ubicaciones_id')->unsigned();
            $table->foreign('ubicaciones_id')->references('id')->on('ubicaciones');
            $table->integer('empresas_id')->unsigned();            
            $table->foreign('empresas_id')->references('id')->on('empresas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ubicacionempresas');
    }
}
