<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inf_general', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('historia_medica_id');
            $table->string('nameCompany')->nullable();
            $table->string('placeBirth')->nullable();
            $table->string('statusCivil')->nullable();
            $table->integer('sons')->nullable();
            $table->string('profession')->nullable();
            $table->string('ocupation')->nullable();
            $table->date('dateAdmission')->nullable();
            $table->integer('seniorityCompany')->nullable();
            $table->date('dateExam')->nullable();
            $table->string('eps')->nullable();
            $table->string('afp')->nullable();
            $table->string('rh')->nullable();
            $table->string('scholarship')->nullable();
            $table->string('areaWork')->nullable();
            $table->integer('stratum')->nullable();
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
        Schema::dropIfExists('inf_general');
    }
}
