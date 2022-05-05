<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpresionDiagnosticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impresion_diagnostica', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('historia_medica_id');

            $table->text('descripcionEXAMENDESALUDOCUPACIONAL')->nullable();

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
        Schema::dropIfExists('impresion_diagnostica');
    }
}
