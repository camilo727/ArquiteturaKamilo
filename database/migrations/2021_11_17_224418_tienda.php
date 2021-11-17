<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tienda extends Migration
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rol');
            $table->timestamps();
        });
        Schema::create('cliente', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NombreCompleto');
            $table->string('Email');
            $table->string('Password');
            $table->unsignedBigInteger('rol_id');
            $table->foreign('rol_id')->references('id')->on('rol');
            $table->timestamps();
        });
        Schema::create('categoria', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('categoria');
            $table->timestamps();
        });
        Schema::create('genero', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('genero');
            $table->timestamps();
        });
        Schema::create('producto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('foto');
            $table->string('talla');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categoria');
            $table->unsignedBigInteger('genero_id');
            $table->foreign('genero_id')->references('id')->on('genero');
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
        Schema::dropIfExists('rol');
        Schema::dropIfExists('cliente');
        Schema::dropIfExists('categoria');
        Schema::dropIfExists('genero');
        Schema::dropIfExists('producto');
    }
}
