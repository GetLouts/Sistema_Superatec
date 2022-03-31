<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD:database/migrations/2022_03_22_070236_create_events_table.php
            $table->unsignedBigInteger('periodos_has_cursos_id');
            $table->string('title');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->unsignedBigInteger('creado_por');
            $table->unsignedBigInteger('actualizado_por')->nullable();
=======
            $table->string('title');
            $table->date('start');
            $table->date('end');
>>>>>>> prompts:database/migrations/2022_03_28_174442_create_events_table.php
            $table->timestamps();

            $table->foreign('periodos_has_cursos_id')->references('id')->on('periodos_has_cursos');
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
        Schema::dropIfExists('events');
    }
<<<<<<< HEAD:database/migrations/2022_03_22_070236_create_events_table.php
};
=======
}
>>>>>>> prompts:database/migrations/2022_03_28_174442_create_events_table.php
