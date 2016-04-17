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
            $table->foreign('usuarios_id')->references('id')->on('users');
            $table->integer('materiales_id')->unsigned();
            $table->foreign('materiales_id')->references('id')->on('materiales');
            $table->integer('ubicaciones_id')->unsigned();
            $table->foreign('ubicaciones_id')->references('id')->on('ubicaciones');
            $table->decimal('peso',10,2);
            $table->dateTime('fechalocal');
            $table->timestamp('fecha');
            $table->string('codigocontrol',100);
            $table->tinyInteger('cancelado');
            $table->timestamps();
        });

        embarques::create([
                'usuarios_id'=>'1',
                'materiales_id'=>'1',
                'ubicaciones_id'=>'1',    
                'peso'=>'190.5',
                'fechalocal'=>'2016/12/04 01:49:29',               
                'fecha'=>'2016/12/04',
                'codigocontrol'=>'15d389de53fafc4b08300a9a03d40729',
                'cancelado'=>'0',
                ]);

        embarques::create([
                'usuarios_id'=>'1',
                'materiales_id'=>'1',
                'ubicaciones_id'=>'1',    
                'peso'=>'280.5',
                'fechalocal'=>'2016/11/04 01:49:29',               
                'fecha'=>'2016/11/04',
                'codigocontrol'=>'218309s8d080joijo982309',
                'cancelado'=>'0',
                ]);

         embarques::create([
                'usuarios_id'=>'2',
                'materiales_id'=>'2',
                'ubicaciones_id'=>'2',    
                'peso'=>'180.5',
                'fechalocal'=>'2016/09/04 01:49:29',               
                'fecha'=>'2016/09/04',
                'codigocontrol'=>'sadoua0sd7a9s79879',
                'cancelado'=>'0',
                ]);

          embarques::create([
                'usuarios_id'=>'3',
                'materiales_id'=>'3',
                'ubicaciones_id'=>'3',    
                'peso'=>'370.5',
                'fechalocal'=>'2016/12/04 01:49:29',               
                'fecha'=>'2016/12/04',
                'codigocontrol'=>'nasody9u89u23989',
                'cancelado'=>'0',
                ]);
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
