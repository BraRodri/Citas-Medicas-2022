<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamenFisicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examen_fisico', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('historia_medica_id');

            $table->string('Sp02')->nullable();
            $table->string('TemperaturaExamenFisico')->nullable();
            $table->string('PulsoExamenFisico')->nullable();
            $table->string('RitmoExamenFisico')->nullable();
            $table->string('PresionArterialExamenFisico')->nullable();
            $table->string('DominanciaExamenFisico')->nullable();
            $table->string('FRespiratoriaExamenFisico')->nullable();

            $table->string('PesoExamenFisico')->nullable();
            $table->string('TallaExamenFisico')->nullable();
            $table->string('IMCExamenFisico')->nullable();
            $table->string('DescripcionExamenFisico')->nullable();
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
        Schema::dropIfExists('examen_fisico');
    }
}
