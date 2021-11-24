<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',100);
            $table->binary('descripcion');
            $table->string('foto',100);
            $table->string('talla');
            $table->integer('categoria_id')->unsigned();
            $table->integer('genero_id')->unsigned();
            $table->timestamps();
            $table->foreign('categoria_id')
                ->references('id')->on('categoria')
                ->onUpdate('CASCADE')
                ->onDelete('NO ACTION');
            $table->foreign('genero_id')
                ->references('id')->on('genero')
                ->onUpdate('CASCADE')
                ->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}
