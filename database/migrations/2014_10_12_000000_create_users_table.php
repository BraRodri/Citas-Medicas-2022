<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_documento');
            $table->string('numero_documento');
            $table->string('nombres');
            $table->date('fecha_nacimiento');
            $table->string('genero');
            $table->string('telefono');
            $table->text('direccion');
            $table->string('pais');
            $table->string('departamento');
            $table->string('ciudad');
            $table->text('avatar')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('active')->default(0);
            $table->integer('video_confirm')->default(0);
            $table->integer('confirm_edad')->default(0)->nullable();
            $table->text('firma')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
