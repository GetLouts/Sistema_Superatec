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
            $table->string('curso');
            $table->string('pago');
            $table->string('metodo_pago');
            $table->date('fecha_pago');
            $table->string('numero_referencia');
            $table->string('patrocinador');
            $table->unsignedBigInteger('estado_id');
            $table->integer('creado_por');
            $table->integer('actualizado_por');
            $table->timestamps('fecha_registro');
            $table->timestamps('updated_at');

            $table->foreign('estado_id')->references('id')->on('estados');
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
