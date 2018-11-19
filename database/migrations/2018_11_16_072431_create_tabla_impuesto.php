<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablaImpuesto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impuesto', function (Blueprint $table) {
            $table->increments('id');        
            $table->float('ImpuestoIGV',9,3);  
            $table->float('ImpuestoRenta',9,3);               
            $table->string('Descripcion'); 
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
        Schema::dropIfExists('impuesto');
    }
}
