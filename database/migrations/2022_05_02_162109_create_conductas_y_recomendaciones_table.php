<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConductasYRecomendacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conductas_y_recomendaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('historia_medica_id');

            $table->boolean('checkRiesgospropiosdeloficioarealizar')->nullable();
            $table->boolean('checkUsodelosprotectoresauditivos')->nullable();
            $table->boolean('checkUsodelaproteccionrespiratoria')->nullable();
            $table->boolean('checkEntrenamientodetrabajosenalturas')->nullable();

            $table->boolean('checkSuministrarcapacitaryentrenarenelusodelosEPI')->nullable();
            $table->boolean('checkUsoadecuadodelosEPIquelesuministrelaempresa')->nullable();
            $table->boolean('checkUsodeproteccionnivelcondicionestrabajadorytipodetrabajo')->nullable();
            $table->boolean('checkUtilizarproteccionauditivaenambientesruidosostantoporfueradeltrabajo')->nullable();

            $table->boolean('checkUtilizarunaadecuadahigieneposturalymecanicacorporal')->nullable();
            $table->boolean('checkEntrenamientoscontinuossobrelamecanicacorporal')->nullable();
            $table->boolean('checkLasmujeresnodebenmovilizarcargasdesdeelpiso')->nullable();
            $table->boolean('checkHacerseguimientocontinuodelasrecomendacionespara')->nullable();

            $table->boolean('checkConservacionAuditiva')->nullable();
            $table->boolean('checkPrevenciondelaaccidentalidadlaboral')->nullable();
            $table->boolean('checkPrevenciondepatologiasosteomusculares')->nullable();
            $table->boolean('checkPrevencionmanejodesustanciasquimicas')->nullable();

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
        Schema::dropIfExists('conductas_y_recomendaciones');
    }
}
