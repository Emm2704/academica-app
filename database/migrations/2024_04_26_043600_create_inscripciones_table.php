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
    Schema::create('inscripciones', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('estudiante_id');
        $table->unsignedBigInteger('curso_id');
        $table->date('fecha_inscripcion');
        $table->timestamps();

        // Definir las claves foráneas
        $table->foreign('estudiante_id')->references('id')->on('estudiantes');
        $table->foreign('curso_id')->references('id')->on('cursos');
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscripciones');
    }
};
