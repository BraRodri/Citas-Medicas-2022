<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestriccionesORecomendacionesDeAntsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restricciones_de_ants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('historia_medica_id');
            $table->string('tipoRestriccion');
            $table->string('diagnosticoRestriccion');
            $table->string('tiempoRestriccion');
            $table->string('entidadQueOrdeno');
            $table->timestamps();
            $table->foreign('historia_medica_id')->references('id')->on('historia_medica')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restricciones_de_ants');
    }
}
