<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnvioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pais',100);
            $table->string('ciudad',100);
            $table->string('codigo_postal',100);
            $table->string('direcion',100);
            $table->integer('venta_id')->unsigned();
            $table->timestamps();
            $table->foreign('venta_id')
                ->references('id')->on('venta')
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
        Schema::dropIfExists('envio');
    }
}
