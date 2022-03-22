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
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alumnos_has_periodos_id');
            $table->integer('creado_por');
            $table->integer('actualizado_por');
            $table->unsignedBigInteger('evento_id');
            $table->timestamps('created_at');

            $table->foreign('alumnos_has_periodos_id')->references('id')->on('alumnos_has_periodos');
            $table->foreign('evento_id')->references('id')->on('eventos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asistencias');
    }
};
