<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfiguracionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuraciones', function (Blueprint $table) {

            $table->id();
            $table->string('descripcion');
            $table->datetime('fecha_inicio');
            $table->datetime('fecha_final');
            $table->time('hora_inicio');
            $table->time('hora_final');
            $table->integer('premio_primer_numero');
            $table->integer('premio_segundo_numero');
            $table->integer('premio_tercer_numero');
            $table->boolean('status');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configuraciones');
    }
}
