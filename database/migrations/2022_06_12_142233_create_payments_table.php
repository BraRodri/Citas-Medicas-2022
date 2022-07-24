<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('cita_id');
            $table->string('estado');
            $table->string('transaccion_id');
            $table->string('referencia_venta');
            $table->string('referencia_transaccion');
            $table->text('descripcion')->nullable();
            $table->string('metodo_pago')->nullable();
            $table->string('entidad')->nullable();
            $table->integer('numero_coutas')->nullable();
            $table->string('pse_bank')->nullable();
            $table->string('cus_pse')->nullable();
            $table->float('valor');
            $table->float('valor_iva')->nullable();
            $table->string('moneda');
            $table->string('fecha_pago');
            $table->string('email_notificacion');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
