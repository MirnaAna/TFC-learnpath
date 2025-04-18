<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoProgreso extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado_progreso')->insert(
            [
                'nombre' => 'Aprender',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('estado_progreso')->insert(
            [
                'nombre' => 'Aprendido',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('estado_progreso')->insert(
            [
                'nombre' => 'Mejorar',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    
    }
}
