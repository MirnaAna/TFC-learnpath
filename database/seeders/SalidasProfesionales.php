<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalidasProfesionales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //salidas para DAW
        DB::table('salidas_profesionales')->insert(
            [
                'nombre' => 'Desarrollador Frontend',
                'id_formacion' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('salidas_profesionales')->insert(
            [
                'nombre' => 'Desarrollador Backend',
                'id_formacion' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('salidas_profesionales')->insert(
            [
                'nombre' => 'Desarrollador Full Stack',
                'id_formacion' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('salidas_profesionales')->insert(
            [
                'nombre' => 'Administrador de aplicaciones Web',
                'id_formacion' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        DB::table('salidas_profesionales')->insert(
            [
                'nombre' => 'Diseñador de interfaces (UI/UX)',
                'id_formacion' => 1,
                'created_at' => now(),
                'updated_at' => now()        
            ]);
        DB::table('salidas_profesionales')->insert(
            [
                'nombre' => 'Administrador de sistemas',
                'id_formacion' => 1,
                'created_at' => now(),
                'updated_at' => now()         
            ]);
        DB::table('salidas_profesionales')->insert(
            [
                'nombre' => 'consultor de transsalidas_profesionales Digitales',
                'id_formacion' => 1,
                'created_at' => now(),
                'updated_at' => now()         
            ]);
        
        //Salidas de DAM
        DB::table('salidas_profesionales')->insert(
            [
                'nombre' => 'Desarrollador de Aplicaciones Móviles (Android, iOS)',
                'id_formacion' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('salidas_profesionales')->insert(
            [
                'nombre' => 'Desarrollador de Software de Escritorio',
                'id_formacion' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('salidas_profesionales')->insert(
            [
                'nombre' => 'Programador de Videojuegos',
                'id_formacion' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('salidas_profesionales')->insert(
            [
                'nombre' => 'Analista Programador',
                'id_formacion' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('salidas_profesionales')->insert(
            [
                'nombre' => 'Ingeniero de Software',
                'id_formacion' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('salidas_profesionales')->insert(
            [
                'nombre' => 'Tester de Aplicaciones (QA)',
                'id_formacion' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('salidas_profesionales')->insert(
            [
                'nombre' => 'Consultor de Aplicaciones Empresariales',
                'id_formacion' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('salidas_profesionales')->insert(
            [
                'nombre' => 'Desarrollador de Apps para Smart TV y dispositivos IoT',
                'id_formacion' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        
        //Salidas de ASIR
        DB::table('salidas_profesionales')->insert(
            [
                'nombre' => 'Administrador de Sistemas Linux/Windows',
                'id_formacion' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('salidas_profesionales')->insert(
            [
                'nombre' => 'Administrador de Redes Informáticas',
                'id_formacion' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('salidas_profesionales')->insert(
            [
                'nombre' => 'Técnico de Soporte Informático',
                'id_formacion' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('salidas_profesionales')->insert(
            [
                'nombre' => 'Especialista en Seguridad Informática (Ciberseguridad)',
                'id_formacion' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('salidas_profesionales')->insert(
            [
                'nombre' => 'Consultor de Sistemas Cloud (AWS, Azure)',
                'id_formacion' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('salidas_profesionales')->insert(
            [
                'nombre' => 'Responsable de Infraestructura IT',
                'id_formacion' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('salidas_profesionales')->insert(
            [
                'nombre' => 'Técnico de Virtualización de Servidores',
                'id_formacion' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('salidas_profesionales')->insert(
            [
                'nombre' => 'Administrador de Bases de Datos',
                'id_formacion' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    }
}
