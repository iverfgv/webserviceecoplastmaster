<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\grupos;
use App\Http\Requests;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('grupo',50);
            $table->string('clave',10);
            $table->timestamps();
        });

        grupos::create([
                'grupo'=>'grupo A',    
                'clave'=>1,
                ]);

         grupos::create([
                'grupo'=>'grupo B',    
                'clave'=>2,
                ]);
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('grupos');
    }
}
