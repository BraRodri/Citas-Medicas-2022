<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionOsteomuscularsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion_osteomuscular', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('historia_medica_id');

            $table->boolean('hombrosEvaluacionOsteomuscularDer')->default(1);
            $table->boolean('hombrosEvaluacionOsteomuscularIzq')->default(1);
            $table->boolean('BrazosEvaluacionOsteomuscularDer')->default(1);
            $table->boolean('BrazosEvaluacionOsteomuscularIzq')->default(1);
            $table->boolean('CodosEvaluacionOsteomuscularDer')->default(1);
            $table->boolean('CodosEvaluacionOsteomuscularIzq')->default(1);
            $table->boolean('AntebrazosEvaluacionOsteomuscularDer')->default(1);
            $table->boolean('AntebrazosEvaluacionOsteomuscularIzq')->default(1);
            $table->boolean('MunecasEvaluacionOsteomuscularDer')->default(1);
            $table->boolean('MunecasEvaluacionOsteomuscularIzq')->default(1);
            $table->boolean('ManosEvaluacionOsteomuscularDer')->default(1);
            $table->boolean('ManosEvaluacionOsteomuscularIzq')->default(1);

            $table->boolean('CaderasEvaluacionOsteomuscularDer')->default(1);
            $table->boolean('CaderasEvaluacionOsteomuscularIzq')->default(1);
            $table->boolean('MuslosEvaluacionOsteomuscularDer')->default(1);
            $table->boolean('MuslosEvaluacionOsteomuscularIzq')->default(1);
            $table->boolean('RodillasEvaluacionOsteomuscularDer')->default(1);
            $table->boolean('RodillasEvaluacionOsteomuscularIzq')->default(1);
            $table->boolean('PiernasEvaluacionOsteomuscularDer')->default(1);
            $table->boolean('PiernasEvaluacionOsteomuscularIzq')->default(1);
            $table->boolean('TobillosEvaluacionOsteomuscularDer')->default(1);
            $table->boolean('TobillosEvaluacionOsteomuscularIzq')->default(1);
            $table->boolean('PiesEvaluacionOsteomuscularDer')->default(1);
            $table->boolean('PiesEvaluacionOsteomuscularIzq')->default(1);

            $table->boolean('TINNELEvaluacionOsteomuscularDer')->default(1);
            $table->boolean('TINNELEvaluacionOsteomuscularIzq')->default(1);
            $table->boolean('PHANELEvaluacionOsteomuscularDer')->default(1);
            $table->boolean('PHANELEvaluacionOsteomuscularIzq')->default(1);
            $table->boolean('REFLEJOSEvaluacionOsteomuscularDer')->default(1);
            $table->boolean('REFLEJOSEvaluacionOsteomuscularIzq')->default(1);

            $table->boolean('FUERZAMUSCULAREvaluacionOsteomuscular')->default(1);
            $table->boolean('SENSIBILIDADEvaluacionOsteomuscular')->default(1);
            $table->boolean('MOTILIDADEvaluacionOsteomuscular')->default(1);

            $table->text('AmpliacionEvaluacionOsteomuscular');
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
        Schema::dropIfExists('evaluacion_osteomuscular');
    }
}
