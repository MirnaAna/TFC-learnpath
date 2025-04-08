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
        Schema::create('asignaturas_formacion', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_formacion')
                  ->constrained('formaciones')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreignId('id_asignatura')
                  ->constrained('asignaturas')
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
        Schema::dropIfExists('asignaturas_formacion');
    }
};
