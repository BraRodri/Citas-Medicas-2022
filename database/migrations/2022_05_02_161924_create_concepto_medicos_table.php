<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConceptoMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concepto_medico', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('historia_medica_id');

            $table->boolean('checkAPTOPARACONTINUARLABORANDO')->default(1)->nullable();
            $table->boolean('checkAPTOPARALABORARCONPATOLOGIANORESTRICTIVA')->default(0)->nullable();
            $table->boolean('checkAPTOPARALABOARACONRECOMENDACIONESOCUPACIONAL')->default(0)->nullable();
            $table->boolean('checkAPLAZADO')->default(0)->nullable();

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
        Schema::dropIfExists('concepto_medico');
    }
}
