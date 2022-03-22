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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('periodos_has_cursos');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->integer('creado_por');
            $table->integer('actualizado_por');
            $table->timestamps();

            $table->foreign('periodos_has_cursos')->references('id')->on('periodos_has_cursos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
};
