<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamenFisicoGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examen_fisico_general', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('historia_medica_id');

            $table->boolean('CraneoExamenFisicoGeneral')->default(1);
            $table->boolean('ParescranealesExamenFisicoGeneral')->default(1);
            $table->boolean('ParpadosExamenFisicoGeneral')->default(1);
            $table->boolean('ConjuntivasExamenFisicoGeneral')->default(1);
            $table->boolean('PupilasExamenFisicoGeneral')->default(1);
            $table->boolean('FondodeojoExamenFisicoGeneral')->default(1);
            $table->boolean('PabellonExamenFisicoGeneral')->default(1);
            $table->boolean('ConductosExamenFisicoGeneral')->default(1);
            $table->boolean('TimpanosExamenFisicoGeneral')->default(1);
            $table->boolean('TabiqueExamenFisicoGeneral')->default(1);
            $table->boolean('CornetasMucosasExamenFisicoGeneral')->default(1);
            $table->boolean('LabiosExamenFisicoGeneral')->default(1);
            $table->boolean('LenguaExamenFisicoGeneral')->default(1);
            $table->boolean('DientesExamenFisicoGeneral')->default(1);
            $table->boolean('PaladarExamenFisicoGeneral')->default(1);
            $table->boolean('AmigdalasExamenFisicoGeneral')->default(1);
            $table->boolean('CuelloExamenFisicoGeneral')->default(1);
            $table->boolean('ToraxExamenFisicoGeneral')->default(1);
            $table->boolean('EspaldaExamenFisicoGeneral')->default(1);
            $table->boolean('PielExamenFisicoGeneral')->default(1);


            $table->boolean('CardiacoExamenFisicoGeneral')->default(1);
            $table->boolean('CirculatorioExamenFisicoGeneral')->default(1);
            $table->boolean('PulmonarExamenFisicoGeneral')->default(1);
            $table->boolean('SenosExamenFisicoGeneral')->default(1);
            $table->boolean('AbdomenaspectoExamenFisicoGeneral')->default(1);
            $table->boolean('ViscerasExamenFisicoGeneral')->default(1);
            $table->boolean('GenitalesexternosExamenFisicoGeneral')->default(1);
            $table->boolean('HerniasExamenFisicoGeneral')->default(1);
            $table->boolean('AdenopatiasExamenFisicoGeneral')->default(1);
            $table->boolean('MiembrossuperioresExamenFisicoGeneral')->default(1);
            $table->boolean('MiembrosinferioresExamenFisicoGeneral')->default(1);
            $table->boolean('VascularperifericoExamenFisicoGeneral')->default(1);
            $table->boolean('NeurologicoExamenFisicoGeneral')->default(1);
            $table->boolean('ReflejostendinososExamenFisicoGeneral')->default(1);
            $table->boolean('MarchaExamenFisicoGeneral')->default(1);
            $table->boolean('EquilibrioExamenFisicoGeneral')->default(1);
            $table->boolean('EstadomentalExamenFisicoGeneral')->default(1);
            $table->boolean('CicatricesExamenFisicoGeneral')->default(1);
            $table->boolean('GrupoExamenFisicoGeneral')->default(1);


            $table->text('AmpliacionExamenFisicoGeneral')->nullable();

            $table->foreign('historia_medica_id')->references('id')->on('historia_medica')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examen_fisico_general');
    }
}
