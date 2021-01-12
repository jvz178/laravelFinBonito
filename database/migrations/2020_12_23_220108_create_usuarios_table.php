<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('tipo');
            $table->boolean('activado')->default(0);
            $table->unsignedInteger('ciclo_id');
            $table->foreign('ciclo_id')->references('id')->on('ciclos'); 
            $table->integer('num_oferta_inscrito');
            $table->rememberToken();
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
        Schema::dropIfExists('usuarios');
    }
}
