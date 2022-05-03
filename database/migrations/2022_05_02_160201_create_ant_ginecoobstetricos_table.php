<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntGinecoobstetricosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ant_ginecoobstetricos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('historia_medica_id');
            $table->boolean('checkantGineCoobstetricos')->nullable();
            $table->string('menarca');
            $table->string('fum');
            $table->string('gestaciones');
            $table->string('planificacion');
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
        Schema::dropIfExists('ant_ginecoobstetricos');
    }
}
