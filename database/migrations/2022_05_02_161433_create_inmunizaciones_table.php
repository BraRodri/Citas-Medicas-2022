<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmunizacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmunizaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('historia_medica_id');
            $table->boolean('checkIndemnizacionTetanos')->nullable()->default(0);
            $table->boolean('checkIndemnizacionFiebreAmarilla')->nullable()->default(0);
            $table->boolean('checkIndemnizacionHepatitisB')->nullable()->default(0);
            $table->boolean('checkIndemnizacionINFLUENZA')->nullable()->default(0);
            $table->boolean('checkIndemnizacionOtras')->nullable()->default(0);
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
        Schema::dropIfExists('inmunizaciones');
    }
}
