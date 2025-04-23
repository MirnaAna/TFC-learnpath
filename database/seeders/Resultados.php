<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Resultados extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resultados')->insert([
            'puntuacion' => 8,
            'total_preguntas' => 10,
            'respuestas_correctas' => 7,
            'id_asignatura' => 1,
            'id_usuario' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('resultados')->insert([
            'puntuacion' => 8,
            'total_preguntas' => 10,
            'respuestas_correctas' => 7,
            'id_asignatura' => 1,
            'id_usuario' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
