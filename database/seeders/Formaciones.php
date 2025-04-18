<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Formaciones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formaciones')->insert(
            [
                'nombre' => 'Desarrollo de Aplicaciones Web',
                'texto_introduccion' => 'Formación enfocada al desarrollo y despliegue de aplicaciones web profesionales.',
                'texto_descripcion' => 'Formación enfocada al desarrollo y despliegue de aplicaciones web profesionales, tanto en el entorno cliente como servidor.',
                'abreviatura' => 'DAW',
                'id_asignatura' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('formaciones')->insert(
            [
                'nombre' => 'Desarrollo de Aplicaciones Multiplataforma',
                'texto_introduccion' => 'Formación orientada a la creación de aplicaciones multiplataforma.',
                'texto_descripcion' => 'Formación orientada a la creación de aplicaciones multiplataforma para móviles, escritorio y web.',
                'abreviatura' => 'DAM',
                'id_asignatura' => 1, 
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        DB::table('formaciones')->insert(
            [
                'nombre' => 'Administración de Sistemas Informáticos en Red',
                'texto_introduccion' => 'Formación destinada a la administración de redes.',
                'texto_descripcion' => 'Formación destinada a la administración de redes, servidores y servicios informáticos en infraestructuras empresariales.',
                'abreviatura' => 'ASIR',
                'id_asignatura' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    }
}
