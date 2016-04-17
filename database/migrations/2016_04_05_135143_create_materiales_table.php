<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\materiales;
use App\Http\Requests;

class CreateMaterialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('grupos_id')->unsigned();
            $table->foreign('grupos_id')->references('id')->on('grupos');
            $table->string('material',250);
            $table->string('clave',10);
            $table->timestamps();
        });

        materiales::create([
                'material'=>'plastico',    
                'clave'=>'0001',
                'grupos_id'=>1,
                ]);

        materiales::create([
                'material'=>'vidrio',    
                'clave'=>'0001',
                'grupos_id'=>2,
                ]);

        materiales::create([
                'material'=>'madera',    
                'clave'=>'0001',
                'grupos_id'=>2,
                ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('materiales');
    }
}
