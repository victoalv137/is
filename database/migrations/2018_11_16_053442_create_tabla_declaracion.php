<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablaDeclaracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('declaracion', function (Blueprint $table) {
            $table->increments('id');        
            $table->string('descripcion',200);                
            $table->string('archivo'); 
            $table->string('titulo');
            $table->unsignedInteger('idempresa');
            $table->foreign('idempresa')->references('id')->on('empresa');           
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
        Schema::dropIfExists('declaracion');
    }
}
