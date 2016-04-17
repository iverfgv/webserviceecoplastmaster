<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
             $table->increments('id');
            $table->integer('tiposempresas_id')->unsigned();
            $table->foreign('tiposempresas_id')->references('id')->on('tipoempresas');
            $table->string('empresa',250);
            $table->text('razonsocial');
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
        Schema::drop('empresas');
    }
}
