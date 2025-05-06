<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Preguntas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Desabilita chequear foreign key
        Schema::disableForeignKeyConstraints();
        // Trunca la tabla para resetear auto-increment ID
        DB::table('preguntas')->truncate();
        // Habilita chequear foreign key
        Schema::enableForeignKeyConstraints();
        //lenguaje de marcas
        DB::table('preguntas')->insert(
            [
                'texto' => '¿Qué etiqueta se usa para crear un enlace en HTML?',
                'id_asignatura' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('preguntas')->insert(
            [
                'texto' => '¿Qué propiedad de CSS cambia el color del texto?',
                'id_asignatura' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('preguntas')->insert(
            [
                'texto' => '¿Qué significa XML?',
                'id_asignatura' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        //base de datos
        DB::table('preguntas')->insert(
            [
                'texto' => '¿Qué comando SQL se usa para obtener datos de una tabla?',
                'id_asignatura' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('preguntas')->insert(
            [
                'texto' => '¿Qué es una clave primaria en una base de datos?',
                'id_asignatura' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('preguntas')->insert(
            [
                'texto' => '¿Qué tipo de base de datos es MySQL?',
                'id_asignatura' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        //sistemas informaticos
        DB::table('preguntas')->insert(
            [
                'texto' => '¿Qué es un sistema operativo?',
                'id_asignatura' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('preguntas')->insert(
            [
                'texto' => '¿Qué dispositivo sirve para almacenar datos de forma permanente?',
                'id_asignatura' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('preguntas')->insert(
            [
                'texto' => '¿Qué es la memoria RAM?',
                'id_asignatura' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        //programacion
        DB::table('preguntas')->insert(
            [
                'texto' => '¿Qué es una variable en programación?',
                'id_asignatura' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('preguntas')->insert(
            [
                'texto' => '¿Qué estructura permite repetir un bloque de código varias veces?',
                'id_asignatura' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('preguntas')->insert(
            [
                'texto' => '¿Qué es un condicional IF?',
                'id_asignatura' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        //entorno de desarrollo
        DB::table('preguntas')->insert(
            [
                'texto' => '¿Qué es un IDE en programación?',
                'id_asignatura' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('preguntas')->insert(
            [
                'texto' => '¿Qué ventaja tiene usar un entorno de desarrollo integrado (IDE)?',
                'id_asignatura' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        DB::table('preguntas')->insert(
            [
                'texto' => 'Administración de Sistemas Informáticos en Red',
                'id_asignatura' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        //acceso a datos
        DB::table('preguntas')->insert(
            [
                'texto' => '¿Qué es una API de base de datos?',
                'id_asignatura' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('preguntas')->insert(
            [
                'texto' => '¿Qué significa CRUD en programación de bases de datos?',
                'id_asignatura' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('preguntas')->insert(
            [
                'texto' => 'Administración de Sistemas Informáticos en Red',
                'id_asignatura' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        //cliente
        DB::table('preguntas')->insert(
            [
                'texto' => '¿Qué función cumple JavaScript en una página web?',
                'id_asignatura' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('preguntas')->insert(
            [
                'texto' => '¿Qué significa DOM en JavaScript?',
                'id_asignatura' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('preguntas')->insert(
            [
                'texto' => 'Administración de Sistemas Informáticos en Red',
                'id_asignatura' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        //servidor
        DB::table('preguntas')->insert(
            [
                'texto' => '¿Qué lenguaje es muy usado para el desarrollo del lado del servidor?',
                'id_asignatura' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('preguntas')->insert(
            [
                'texto' => '¿Qué es un servidor web?',
                'id_asignatura' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('preguntas')->insert(
            [
                'texto' => 'Administración de Sistemas Informáticos en Red',
                'id_asignatura' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        //Programación Multimedia y Dispositivos Móviles
        DB::table('preguntas')->insert(
            [
                'texto' => '¿Qué sistema operativo usa Android?',
                'id_asignatura' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('preguntas')->insert(
            [
                'texto' => '¿Qué lenguaje se usa para programar en Android?',
                'id_asignatura' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('preguntas')->insert(
            [
                'texto' => 'Administración de Sistemas Informáticos en Red',
                'id_asignatura' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        //administracion de redes
        DB::table('preguntas')->insert(
            [
                'texto' => '¿Qué dispositivo se usa para interconectar varias redes?',
                'id_asignatura' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('preguntas')->insert(
            [
                'texto' => '¿Qué es una dirección IP?',
                'id_asignatura' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('preguntas')->insert(
            [
                'texto' => 'Administración de Sistemas Informáticos en Red',
                'id_asignatura' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        //sistemas operativos
        DB::table('preguntas')->insert(
            [
                'texto' => '¿Qué sistema operativo es de código abierto y muy popular en servidores?',
                'id_asignatura' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('preguntas')->insert(
            [
                'texto' => '¿Qué es un proceso en un sistema operativo?',
                'id_asignatura' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('preguntas')->insert(
            [
                'texto' => 'Administración de Sistemas Informáticos en Red',
                'id_asignatura' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        //seguridad informatica
        DB::table('preguntas')->insert(
            [
                'texto' => '¿Qué es un antivirus?',
                'id_asignatura' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('preguntas')->insert(
            [
                'texto' => '¿Qué es el phishing en seguridad informática?',
                'id_asignatura' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('preguntas')->insert(
            [
                'texto' => 'Administración de Sistemas Informáticos en Red',
                'id_asignatura' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        //implementacion de aplicaciones
        DB::table('preguntas')->insert(
            [
                'texto' => '¿Qué es Apache en el contexto de servidores web?',
                'id_asignatura' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('preguntas')->insert(
            [
                'texto' => '¿Qué es un dominio web?',
                'id_asignatura' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('preguntas')->insert(
            [
                'texto' => 'Administración de Sistemas Informáticos en Red',
                'id_asignatura' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
