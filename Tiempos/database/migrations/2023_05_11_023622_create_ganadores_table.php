<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGanadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ganadores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_sorteo');
            $table->integer('premio_primer_numero');
            $table->integer('premio_segundo_numero');
            $table->integer('premio_tercer_numero');
            $table->datetime('fecha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ganadores');
    }
}
