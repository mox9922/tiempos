<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComisionesSorteosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comisiones_sorteos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_sorteo');
            $table->unsignedBigInteger('id_comision');
            $table->datetime('fecha');
            $table->float('monto');

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_sorteo')->references('id')->on('sorteos');
            $table->foreign('id_comision')->references('id')->on('comisiones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comisiones_sorteos');
    }
}
