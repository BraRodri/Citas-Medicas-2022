<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamenesDeLaboratoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examenes_de_laboratorio', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('historia_medica_id');

            $table->date('dateHemogramaExamen')->nullable();
            $table->string('HemoglobinaHemogramaExamen')->nullable();
            $table->string('HematocritoHemogramaExamen')->nullable();

            $table->date('dateGlicemiaExamen')->nullable();
            $table->string('GlicemiaExamen')->nullable();

            $table->date('datePERFILLIPIDICOExamen')->nullable();
            $table->string('ColesterolTotalExamen')->nullable();
            $table->string('ColesterolHDLExamen')->nullable();
            $table->string('ColesterolLDLExamen')->nullable();
            $table->string('TrigliceridosExamen')->nullable();

            $table->date('dateCitoQuimicoExamen')->nullable();
            $table->string('CitoQuimicoAspectoExamen')->nullable();
            $table->string('CitoQuimicoQuimicaExamen')->nullable();
            $table->string('CitoQuimicoMicroscopioExamen')->nullable();

            $table->date('dateOtrosExamen')->nullable();
            $table->string('otrosExamen')->nullable();

            $table->date('dateMANIPULADORESExamen')->nullable();
            $table->string('KOHMANIPULADORESExamen')->nullable();
            $table->string('FROTISMANIPULADORESExamen')->nullable();
            $table->string('COPROLOGICOMANIPULADORESExamen')->nullable();

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
        Schema::dropIfExists('examenes_de_laboratorio');
    }
}
