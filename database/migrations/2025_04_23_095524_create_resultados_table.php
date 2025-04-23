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
        Schema::create('resultados', function (Blueprint $table) {
            $table->id();
            $table->integer('puntuacion')->nullable();
            $table->integer('total_preguntas')->nullable();
            $table->integer('respuestas_correctas')->nullable();
            $table->foreignId('id_asignatura')
                  ->constrained('asignaturas')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreignId('id_usuario')
                  ->constrained('users')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('resultados');
    }
};
