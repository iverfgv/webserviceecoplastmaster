<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRastreosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rastreos', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('embarques_id')->unsigned();
            $table->foreign('embarques_id')->references('id')->on('embarques');
            $table->dateTime('fecha');
            $table->text('firma');
            $table->tinyInteger('entrada');
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->integer('ubicaciones_id')->unsigned();
            $table->foreign('ubicaciones_id')->references('id')->on('ubicaciones');
            $table->string('placas',100);
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
        Schema::drop('rastreos');
    }
}
