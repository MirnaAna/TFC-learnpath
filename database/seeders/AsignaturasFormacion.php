<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsignaturasFormacion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asignaturas_formacion')->insert(
            [
                'id_asignatura' => 1,
                'id_formacion' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('asignaturas_formacion')->insert(
            [
                'id_asignatura' => 2,
                'id_formacion' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('asignaturas_formacion')->insert(
            [
                'id_asignatura' => 3,
                'id_formacion' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('asignaturas_formacion')->insert(
            [
                'id_asignatura' => 4,
                'id_formacion' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('asignaturas_formacion')->insert(
            [
                'id_asignatura' => 5,
                'id_formacion' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('asignaturas_formacion')->insert(
            [
                'id_asignatura' => 7,
                'id_formacion' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('asignaturas_formacion')->insert(
            [
                'id_asignatura' => 8,
                'id_formacion' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('asignaturas_formacion')->insert(
            [
                'id_asignatura' => 1,
                'id_formacion' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('asignaturas_formacion')->insert(
            [
                'id_asignatura' => 2,
                'id_formacion' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('asignaturas_formacion')->insert(
            [
                'id_asignatura' => 3,
                'id_formacion' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('asignaturas_formacion')->insert(
            [
                'id_asignatura' => 4,
                'id_formacion' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('asignaturas_formacion')->insert(
            [
                'id_asignatura' => 5,
                'id_formacion' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('asignaturas_formacion')->insert(
            [
                'id_asignatura' => 6,
                'id_formacion' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('asignaturas_formacion')->insert(
            [
                'id_asignatura' => 9,
                'id_formacion' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

    
        DB::table('asignaturas_formacion')->insert(
            [
                'id_asignatura' => 1,
                'id_formacion' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('asignaturas_formacion')->insert(
            [
                'id_asignatura' => 2,
                'id_formacion' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('asignaturas_formacion')->insert(
            [
                'id_asignatura' => 3,
                'id_formacion' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('asignaturas_formacion')->insert(
            [
                'id_asignatura' => 12,
                'id_formacion' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('asignaturas_formacion')->insert(
            [
                'id_asignatura' => 13,
                'id_formacion' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('asignaturas_formacion')->insert(
            [
                'id_asignatura' => 11,
                'id_formacion' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('asignaturas_formacion')->insert(
            [
                'id_asignatura' => 10,
                'id_formacion' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    }
}
