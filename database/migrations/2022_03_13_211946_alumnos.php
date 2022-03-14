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
            $table->string('telefono');
            $table->string('telefono_local');
            $table->string('direccion');
            $table->string('correo');
            $table->string('nivel_de_estudio');
            $table->string('edad');
            $table->string('comunidad');
            $table->string('curso');
            $table->string('pago');
            $table->string('metodo_pago');
            $table->string('fecha_pago');
            $table->string('numero_referencia');
            $table->string('patrocinador');
            $table->string('fecha_registro');
            $table->string('estado');
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
        Schema::dropIfExists('alumnos');
    }
};
