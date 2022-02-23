<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cita', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('horary_medico_id');
            $table->unsignedBigInteger('paciente_id');
            $table->string('modality');
            $table->boolean('payed');
            $table->string('typePayment');
            $table->timestamps();
            $table->foreign('horary_medico_id')->references('id')->on('horary_medicos')->onDelete('cascade');
            $table->foreign('paciente_id')->references('id')->on('paciente')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cita');
    }
}
