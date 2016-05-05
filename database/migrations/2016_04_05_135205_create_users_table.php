<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;
use App\Http\Requests;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('usuario',100);
            $table->string('nombre',250);
            $table->string('contrasena',250);           
            $table->integer('perfiles_id')->unsigned();
            $table->foreign('perfiles_id')->references('id')->on('perfiles');
            $table->integer('ubicaciones_id')->unsigned();
            $table->foreign('ubicaciones_id')->references('id')->on('ubicaciones');
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
        Schema::drop('usuarios');
    }
}
