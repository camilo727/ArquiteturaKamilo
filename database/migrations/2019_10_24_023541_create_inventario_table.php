<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad')->unsigned();
            $table->decimal('percio_compra', 8,2)->unsigned()->nullable();
            $table->decimal('precio_venta', 8,2)->unsigned()->nullable();
            $table->integer('producto_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('producto_id')
                ->references('id')->on('producto')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventario');
    }
}
