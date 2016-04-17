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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('perfiles_id')->unsigned();
            $table->foreign('perfiles_id')->references('id')->on('perfiles');
            $table->integer('ubicaciones_id')->unsigned();
            $table->foreign('ubicaciones_id')->references('id')->on('ubicaciones');
            $table->string('usuario',100);
            $table->string('nombre',250);
            $table->string('password',250);           
            $table->tinyInteger('activo');
            $table->rememberToken();
            $table->timestamps();
        });

        User::create([
                'perfiles_id'=>'1',
                'ubicaciones_id'=>'1',
                'usuario'=>'admin',    
                'nombre'=>'operador de pruebas',
                'password'=>'admin',               
                'activo'=>'1',
                ]);

        User::create([
                'perfiles_id'=>'2',
                'ubicaciones_id'=>'1',
                'usuario'=>'usuario1',    
                'nombre'=>'operador general',
                'password'=>'usuario1',               
                'activo'=>'1',
                ]);

        User::create([
                'perfiles_id'=>'3',
                'ubicaciones_id'=>'2',
                'usuario'=>'usuario2',    
                'nombre'=>'operador general de pruebas',
                'password'=>'usuario2',               
                'activo'=>'1',
                ]);

      

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
