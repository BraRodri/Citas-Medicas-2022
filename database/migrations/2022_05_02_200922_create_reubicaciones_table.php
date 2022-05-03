<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReubicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reubicaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('historia_medica_id');
            $table->boolean('checkReubicaciones')->default(0);
            $table->string('areaReubicado');
            $table->string('diagnosticoReubicaciones');
            $table->date('fechaReubicado');
            $table->string('tiempoReubicado');
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
        Schema::dropIfExists('reubicaciones');
    }
}
