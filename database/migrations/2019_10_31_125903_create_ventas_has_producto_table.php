<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasHasProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas_has_producto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('venta_id')->unsigned()->nullable();
            $table->integer('producto_id')->unsigned()->nullable();
            $table->integer('estado_id')->unsigned()->nullable();
            $table->integer('cantidad')->unsigned();
            $table->integer('descuentos')->unsigned();
            $table->decimal('total', 8, 8);

            $table->timestamps();
            $table->foreign('venta_id')
                ->references('id')->on('venta')
                ->onUpdate('CASCADE')
                ->onDelete('NO ACTION');

            $table->foreign('producto_id')
                ->references('id')->on('producto')
                ->onUpdate('CASCADE')
                ->onDelete('NO ACTION');

            $table->foreign('estado_id')
                ->references('id')->on('estado')
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
        Schema::dropIfExists('ventas_has_producto');
    }
}
