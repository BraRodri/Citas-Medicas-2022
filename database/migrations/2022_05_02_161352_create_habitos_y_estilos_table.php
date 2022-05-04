<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitosYEstilosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitos_y_estilos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('historia_medica_id');

            $table->boolean('checkHabitoTabaquismo')->default(0);
            $table->string('tipoHabitoTabaquismo')->nullable();
            $table->string('frecuenciaHabitoTabaquismo')->nullable();
            $table->string('antiguedadHabitoTabaquismo')->nullable();

            $table->boolean('checkHabitoLicor')->default(0);
            $table->string('tipoHabitoLicor')->nullable();
            $table->string('frecuenciaHabitoLicor')->nullable();
            $table->string('antiguedadHabitoLicor')->nullable();

            $table->boolean('checkHabitoSustanciassicoactivas')->default(0);
            $table->string('tipoHabitoSustanciassicoactivas')->nullable();
            $table->string('frecuenciaHabitoSustanciassicoactivas')->nullable();
            $table->string('antiguedadHabitoSustanciassicoactivas')->nullable();

            $table->boolean('checkHabitoDeportesoactividadfisica')->default(0);
            $table->string('tipoHabitoDeportesoactividadfisica')->nullable();
            $table->string('frecuenciaHabitoDeportesoactividadfisica')->nullable();
            $table->string('antiguedadHabitoDeportesoactividadfisica')->nullable();

            $table->boolean('checkHabitoActividadesextralaborales')->default(0);
            $table->string('tipoHabitoActividadesextralaborales')->nullable();
            $table->string('frecuenciaHabitoActividadesextralaborales')->nullable();
            $table->string('antiguedadHabitoActividadesextralaborales')->nullable();

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
        Schema::dropIfExists('habitos_y_estilos');
    }
}
