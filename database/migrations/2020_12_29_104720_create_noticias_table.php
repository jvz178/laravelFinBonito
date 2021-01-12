<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->engine = 'InnoDB'; 
            $table->increments('id');
            $table->timestamps();
            $table->text('titulo');
            $table->string('imagen');
            $table->text('descripcion');
            $table->unsignedInteger('ciclo_id');
            $table->foreign('ciclo_id')->references('id')->on('ciclos');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noticias');
    }
}
