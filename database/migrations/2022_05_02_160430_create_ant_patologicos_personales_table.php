<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntPatologicosPersonalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ant_patologicos_personales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('historia_medica_id');
            $table->boolean('cardiacsP')->default(0);
            $table->boolean('cardiacsF')->default(0);
            $table->boolean('hiperP')->default(0);
            $table->boolean('hiperF')->default(0);
            $table->boolean('cancerP')->default(0);
            $table->boolean('cancerF')->default(0);
            $table->boolean('diabetesP')->default(0);
            $table->boolean('diabetesF')->default(0);
            $table->boolean('dislipidemiasP')->default(0);
            $table->boolean('dislipidemiasF')->default(0);
            $table->boolean('otrosMetabolicosP')->default(0);
            $table->boolean('otrosMetabolicosF')->default(0);
            $table->boolean('epilepsiaP')->default(0);
            $table->boolean('epilepsiaF')->default(0);
            $table->boolean('siquiatricosP')->default(0);
            $table->boolean('siquiatricosF')->default(0);
            $table->boolean('congenitosP')->default(0);
            $table->boolean('congenitosF')->default(0);
            $table->boolean('rinitisP')->default(0);
            $table->boolean('rinitisF')->default(0);
            $table->boolean('alergiasP')->default(0);
            $table->boolean('alergiasF')->default(0);
            $table->boolean('asmaP')->default(0);
            $table->boolean('asmaF')->default(0);

            $table->boolean('reumatologicosP')->default(0);
            $table->boolean('reumatologicosF')->default(0);
            $table->boolean('varicesP')->default(0);
            $table->boolean('varicesF')->default(0);
            $table->boolean('otrosP')->default(0);
            $table->boolean('otrosF')->default(0);
            $table->boolean('fobiasP')->default(0);
            $table->boolean('fobiasF')->default(0);
            $table->boolean('dermatologicosP')->default(0);
            $table->boolean('dermatologicosF')->default(0);
            $table->boolean('tuberculosisP')->default(0);
            $table->boolean('tuberculosisF')->default(0);
            $table->boolean('osteomuscularesP')->default(0);
            $table->boolean('osteomuscularesF')->default(0);
            $table->boolean('quirurgicosP')->default(0);
            $table->boolean('quirurgicosF')->default(0);
            $table->boolean('traumaticosP')->default(0);
            $table->boolean('traumaticosF')->default(0);
            $table->boolean('obesidadP')->default(0);
            $table->boolean('obesidadF')->default(0);
            $table->boolean('hipoacusiaP')->default(0);
            $table->boolean('hipoacusiaF')->default(0);
            $table->boolean('intoxicacionesP')->default(0);
            $table->boolean('intoxicacionesF')->default(0);
            $table->text('observationsAntPer');
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
        Schema::dropIfExists('ant_patologicos_personales');
    }
}
