<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoraryMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horary_medicos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('medico_id');
            $table->dateTime('date_disponibility');
            $table->timestamps();
            $table->foreign('medico_id')->references('id')->on('medico')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horary_medicos');
    }
}
