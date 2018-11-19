<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombres',200);
            $table->string('Apellidos',200);
            $table->text('Direccion');
            $table->text('Telefono');           
            $table->string('Avatar');
            $table->string('Email',100);
            $table->char('Estado',1)->default(1);
            $table->string('Contraseña',20)->default(123456);
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
        Schema::dropIfExists('usuario');
    }
}
