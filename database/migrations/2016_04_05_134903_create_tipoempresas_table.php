<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoempresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiposempresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipoempresa',100);
            $table->tinyInteger('cliente');
            $table->tinyInteger('provedor');
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
        Schema::drop('tiposempresas');
    }
}
