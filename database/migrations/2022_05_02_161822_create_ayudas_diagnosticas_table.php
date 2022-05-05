<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAyudasDiagnosticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayudas_diagnosticas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('historia_medica_id');

            $table->date('dateAgudezatamizExamen')->nullable();
            $table->string('OJODERECHOExamen')->nullable();
            $table->string('OJOIZQUIERDOExamen')->nullable();
            $table->string('ResultadoAgudezaExamen')->nullable();

            $table->date('dateAudiometriaTamizExamen')->nullable();
            $table->string('AudiometriaTamizExamen')->nullable();
            $table->string('ResultadoAudiometriaTamizExamen')->nullable();

            $table->date('dateAudiometriaclinicaExamen')->nullable();
            $table->string('SALExamen')->nullable();
            $table->string('ELIExamen')->nullable();
            $table->string('LARSENExamen')->nullable();
            $table->string('ResultadoAudiometriaclinicaExamen')->nullable();

            $table->date('dateEspirometriaExamen')->nullable();
            $table->string('EspirometriaFVCExamen')->nullable();
            $table->string('EspirometriaFEV1Examen')->nullable();
            $table->string('EspirometriaFEV1')->nullable();
            $table->string('ResultadoEspirometriaExamen')->nullable();

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
        Schema::dropIfExists('ayudas_diagnosticas');
    }
}
