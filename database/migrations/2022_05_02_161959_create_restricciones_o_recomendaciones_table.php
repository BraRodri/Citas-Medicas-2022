<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestriccionesORecomendacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restricciones_o_recomendaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('historia_medica_id');

            $table->text('restriccionesOrecomendaciones')->nullable();
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
        Schema::dropIfExists('restricciones_o_recomendaciones');
    }
}
