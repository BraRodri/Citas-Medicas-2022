<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionDeColumnasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion_de_columna', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('historia_medica_id');

            $table->boolean('InspeccionEvaluacionDeColumna')->default(1);
            $table->boolean('PalpacionEvaluacionDeColumna')->default(1);
            $table->boolean('SensibilidadEvaluacionDeColumna')->default(1);
            $table->boolean('MotricidadEvaluacionDeColumna')->default(1);
            $table->boolean('EquilibrioestaticoEvaluacionDeColumna')->default(1);

            $table->boolean('AlineacionescapularEvaluacionDeColumna')->default(1);
            $table->boolean('AlineacionpelvicaEvaluacionDeColumna')->default(1);
            $table->boolean('CifosisEvaluacionDeColumna')->default(1);
            $table->boolean('LordosisEvaluacionDeColumna')->default(1);
            $table->boolean('EscoliosisEvaluacionDeColumna')->default(1);

            $table->boolean('FlexionanteriorEvaluacionDeColumna')->default(1);
            $table->boolean('ExtensionposteriorEvaluacionDeColumna')->default(1);
            $table->boolean('FlexionlateralEvaluacionDeColumna')->default(1);
            $table->boolean('RotacionEvaluacionDeColumna')->default(1);
            $table->boolean('MedicionextremidadesEvaluacionDeColumna')->default(1);

            $table->boolean('TestdeWellsEvaluacionDeColumna')->default(1);
            $table->boolean('PruebadeLassegueEvaluacionDeColumna')->default(1);
            $table->boolean('SignodeltimbreEvaluacionDeColumna')->default(1);
            $table->boolean('MarchaentalonesEvaluacionDeColumna')->default(1);
            $table->boolean('MarchaenpuntasEvaluacionDeColumna')->default(1);

            $table->text('AmpliacionEvaluacionDeColumna')->nullable();
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
        Schema::dropIfExists('evaluacion_de_columna');
    }
}
