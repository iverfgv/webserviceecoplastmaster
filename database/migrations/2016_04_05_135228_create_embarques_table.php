<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\embarques;
use App\Http\Requests;

class CreateEmbarquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('embarques', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('usuarios_id')->unsigned();
            $table->foreign('usuarios_id')->references('id')->on('usuarios');
            $table->integer('materiales_id')->unsigned();
            $table->foreign('materiales_id')->references('id')->on('materiales');
            $table->integer('ubicaciones_id')->unsigned();
            $table->foreign('ubicaciones_id')->references('id')->on('ubicaciones');
            $table->decimal('peso',10,2);
            $table->dateTime('fechalocal');
            $table->timestamp('fecha');
            $table->string('codigocontrol',100);
            $table->tinyInteger('cancelado');
            $table->string('notasalidaecoplast',20);
            $table->string('notasalidacliente',20);
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('embarques');
    }
}
