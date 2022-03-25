<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('cedula');
            $table->integer('telefono');
            $table->integer('telefono_local');
            $table->string('direccion');
            $table->string('correo');
            $table->string('nivel_de_estudio');
            $table->date('fecha_nac');
            $table->string('comunidad');
            $table->string('pago');
            $table->string('numero_referencia');
            $table->string('patrocinador');
            $table->unsignedBigInteger('estado_id');
            $table->unsignedBigInteger('creado_por');
            $table->unsignedBigInteger('actualizado_por')->nullable();
            $table->timestamps();

            $table->foreign('estado_id')->references('id')->on('estados');
            $table->foreign('creado_por')->references('id')->on('users');
            $table->foreign('actualizado_por')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
};
