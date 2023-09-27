<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->datetime('fecha_compra');
            $table->integer('numero');
            $table->float('monto');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_sorteo');

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_sorteo')->references('id')->on('sorteos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
