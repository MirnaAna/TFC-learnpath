<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Respuestas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Pregunta 1 (¿Qué etiqueta se usa para crear un enlace en HTML?)
        DB::table('respuestas')->insert(
            [
                'texto' => '<a>',
                'es_correcto' => 1,
                'id_pregunta' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('respuestas')->insert(
            [
                'texto' => '<link>',
                'es_correcto' => 0,
                'id_pregunta' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('respuestas')->insert(
            [
                'texto' => '<div>',
                'es_correcto' => 0,
                'id_pregunta' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('respuestas')->insert(
            [
                'texto' => '<span>',
                'es_correcto' => 0,
                'id_pregunta' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        // Pregunta 2 (¿Qué propiedad de CSS cambia el color del texto?)
        DB::table('respuestas')->insert(
            [
                'texto' => 'color',
                'es_correcto' => 1,
                'id_pregunta' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('respuestas')->insert(
            [
                'texto' => 'background',
                'es_correcto' => 0,
                'id_pregunta' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('respuestas')->insert(
            [
                'texto' => 'font-size',
                'es_correcto' => 0,
                'id_pregunta' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('respuestas')->insert(
            [
                'texto' => 'padding',
                'es_correcto' => 0,
                'id_pregunta' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        DB::table('respuestas')->insert([
            'texto' => 'Asignatura de administración de redes y sistemas.',
            'es_correcto' => 1,
            'id_pregunta' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Lenguaje de programación.',
            'es_correcto' => 0,
            'id_pregunta' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Sistema de bases de datos.',
            'es_correcto' => 0,
            'id_pregunta' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Pregunta 4
        DB::table('respuestas')->insert([
            'texto' => 'Extensible Markup Language',
            'es_correcto' => 1,
            'id_pregunta' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Extra Modern Language',
            'es_correcto' => 0,
            'id_pregunta' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Extension Media Language',
            'es_correcto' => 0,
            'id_pregunta' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Pregunta 5
        DB::table('respuestas')->insert([
            'texto' => 'SELECT',
            'es_correcto' => 1,
            'id_pregunta' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'INSERT',
            'es_correcto' => 0,
            'id_pregunta' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'DELETE',
            'es_correcto' => 0,
            'id_pregunta' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Pregunta 6
        DB::table('respuestas')->insert([
            'texto' => 'Un identificador único para cada fila',
            'es_correcto' => 1,
            'id_pregunta' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Una contraseña de acceso',
            'es_correcto' => 0,
            'id_pregunta' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Un tipo de base de datos',
            'es_correcto' => 0,
            'id_pregunta' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Pregunta 7
        DB::table('respuestas')->insert([
            'texto' => 'Relacional',
            'es_correcto' => 1,
            'id_pregunta' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'NoSQL',
            'es_correcto' => 0,
            'id_pregunta' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Jerárquica',
            'es_correcto' => 0,
            'id_pregunta' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Pregunta 8
        DB::table('respuestas')->insert([
            'texto' => 'El software que administra los recursos del hardware',
            'es_correcto' => 1,
            'id_pregunta' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Un procesador',
            'es_correcto' => 0,
            'id_pregunta' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Un tipo de memoria',
            'es_correcto' => 0,
            'id_pregunta' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Pregunta 9
        DB::table('respuestas')->insert([
            'texto' => 'Disco duro',
            'es_correcto' => 1,
            'id_pregunta' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Memoria RAM',
            'es_correcto' => 0,
            'id_pregunta' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Procesador',
            'es_correcto' => 0,
            'id_pregunta' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Pregunta 10
        DB::table('respuestas')->insert([
            'texto' => 'Memoria de acceso aleatorio y volátil',
            'es_correcto' => 1,
            'id_pregunta' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Memoria de almacenamiento permanente',
            'es_correcto' => 0,
            'id_pregunta' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Unidad de procesamiento gráfico',
            'es_correcto' => 0,
            'id_pregunta' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Pregunta 11
        DB::table('respuestas')->insert([
            'texto' => 'Una espacio para almacenar un valor',
            'es_correcto' => 1,
            'id_pregunta' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Una función',
            'es_correcto' => 0,
            'id_pregunta' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Un bucle',
            'es_correcto' => 0,
            'id_pregunta' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Pregunta 12
        DB::table('respuestas')->insert([
            'texto' => 'Un bucle',
            'es_correcto' => 1,
            'id_pregunta' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Un condicional',
            'es_correcto' => 0,
            'id_pregunta' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Una variable',
            'es_correcto' => 0,
            'id_pregunta' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Pregunta 13
        DB::table('respuestas')->insert([
            'texto' => 'Una estructura de decisión',
            'es_correcto' => 1,
            'id_pregunta' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Un bucle infinito',
            'es_correcto' => 0,
            'id_pregunta' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Una librería externa',
            'es_correcto' => 0,
            'id_pregunta' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Pregunta 14
        DB::table('respuestas')->insert([
            'texto' => 'Entorno de Desarrollo Integrado',
            'es_correcto' => 1,
            'id_pregunta' => 14,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Editor de Imágenes Dinámico',
            'es_correcto' => 0,
            'id_pregunta' => 14,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Interface Device Extension',
            'es_correcto' => 0,
            'id_pregunta' => 14,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // Pregunta 15
        DB::table('respuestas')->insert([
            'texto' => 'Permite escribir y depurar código de manera más eficiente',
            'es_correcto' => 1,
            'id_pregunta' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Solo permite ejecutar programas en un entorno gráfico',
            'es_correcto' => 0,
            'id_pregunta' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Solo ayuda a la ejecución de programas en servidores',
            'es_correcto' => 0,
            'id_pregunta' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Pregunta 16
        DB::table('respuestas')->insert([
            'texto' => 'Es una aplicación que permite crear una red local',
            'es_correcto' => 1,
            'id_pregunta' => 16,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Es una herramienta para almacenar archivos en la nube',
            'es_correcto' => 0,
            'id_pregunta' => 16,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Es un software para realizar análisis de datos',
            'es_correcto' => 0,
            'id_pregunta' => 16,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Pregunta 17
        DB::table('respuestas')->insert([
            'texto' => '192.168.0.1',
            'es_correcto' => 1,
            'id_pregunta' => 17,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => '10.0.0.1',
            'es_correcto' => 0,
            'id_pregunta' => 17,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => '255.255.255.0',
            'es_correcto' => 0,
            'id_pregunta' => 17,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Pregunta 18
        DB::table('respuestas')->insert([
            'texto' => 'Se usa para que los dispositivos se comuniquen en una red local',
            'es_correcto' => 1,
            'id_pregunta' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Es un protocolo que garantiza la privacidad en Internet',
            'es_correcto' => 0,
            'id_pregunta' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Permite crear páginas web dinámicas',
            'es_correcto' => 0,
            'id_pregunta' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Pregunta 19
        DB::table('respuestas')->insert([
            'texto' => 'TCP/IP',
            'es_correcto' => 1,
            'id_pregunta' => 19,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'FTP',
            'es_correcto' => 0,
            'id_pregunta' => 19,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'HTTP',
            'es_correcto' => 0,
            'id_pregunta' => 19,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Pregunta 20
        DB::table('respuestas')->insert([
            'texto' => 'Servidor de archivos',
            'es_correcto' => 1,
            'id_pregunta' => 20,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Enrutador de tráfico',
            'es_correcto' => 0,
            'id_pregunta' => 20,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Módem de acceso a Internet',
            'es_correcto' => 0,
            'id_pregunta' => 20,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Pregunta 21
        DB::table('respuestas')->insert([
            'texto' => 'Los datos se dividen en paquetes y se envían por diferentes rutas',
            'es_correcto' => 1,
            'id_pregunta' => 21,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Los datos se transmiten en una sola línea de comunicación',
            'es_correcto' => 0,
            'id_pregunta' => 21,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'La transmisión de datos se realiza por secuencias de bits en paralelo',
            'es_correcto' => 0,
            'id_pregunta' => 21,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Pregunta 22
        DB::table('respuestas')->insert([
            'texto' => 'Es un sistema operativo que coordina todas las operaciones en una red de computadoras',
            'es_correcto' => 1,
            'id_pregunta' => 22,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Es un software que mejora la conectividad de dispositivos USB',
            'es_correcto' => 0,
            'id_pregunta' => 22,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Es una plataforma que solo permite ejecutar aplicaciones de video en streaming',
            'es_correcto' => 0,
            'id_pregunta' => 22,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Pregunta 23
        DB::table('respuestas')->insert([
            'texto' => 'Comunicaciones entre distintos tipos de dispositivos',
            'es_correcto' => 1,
            'id_pregunta' => 23,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Redes privadas para usuarios específicos',
            'es_correcto' => 0,
            'id_pregunta' => 23,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Enlaces entre nodos de una misma red interna',
            'es_correcto' => 0,
            'id_pregunta' => 23,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Pregunta 24
        DB::table('respuestas')->insert([
            'texto' => 'Es un protocolo que permite el intercambio de información a través de Internet',
            'es_correcto' => 1,
            'id_pregunta' => 24,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Es un lenguaje de programación usado en aplicaciones móviles',
            'es_correcto' => 0,
            'id_pregunta' => 24,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Es un tipo de red segura para enviar correos electrónicos',
            'es_correcto' => 0,
            'id_pregunta' => 24,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Pregunta 25
        DB::table('respuestas')->insert([
            'texto' => 'Protocolo de comunicaciones estándar',
            'es_correcto' => 1,
            'id_pregunta' => 25,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Interfaz de usuario para sistemas operativos',
            'es_correcto' => 0,
            'id_pregunta' => 25,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Formato de archivos multimedia',
            'es_correcto' => 0,
            'id_pregunta' => 25,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Pregunta 26
        DB::table('respuestas')->insert([
            'texto' => 'Es un sistema que ofrece seguridad en las comunicaciones y archivos',
            'es_correcto' => 1,
            'id_pregunta' => 26,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Es una red privada utilizada para acceder a Internet desde un solo punto',
            'es_correcto' => 0,
            'id_pregunta' => 26,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Es un software para crear aplicaciones móviles de forma automática',
            'es_correcto' => 0,
            'id_pregunta' => 26,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Pregunta 27
        DB::table('respuestas')->insert([
            'texto' => 'Es el software que actúa como un intermediario entre el usuario y el sistema operativo',
            'es_correcto' => 1,
            'id_pregunta' => 27,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Es un lenguaje de programación basado en objetos',
            'es_correcto' => 0,
            'id_pregunta' => 27,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Es el sistema que organiza los archivos en una computadora',
            'es_correcto' => 0,
            'id_pregunta' => 27,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Pregunta 28
        DB::table('respuestas')->insert([
            'texto' => 'Permite la interacción entre el usuario y el sistema de manera gráfica',
            'es_correcto' => 1,
            'id_pregunta' => 28,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales',
            'es_correcto' => 0,
            'id_pregunta' => 28,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Permite la interacción entre el usuario y el sistema de manera gráfica',
            'es_correcto' => 1,
            'id_pregunta' => 28,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //29
        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales',
            'es_correcto' => 0,
            'id_pregunta' => 28,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Permite la interacción entre el usuario y el sistema de manera gráfica',
            'es_correcto' => 1,
            'id_pregunta' => 28,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales',
            'es_correcto' => 0,
            'id_pregunta' => 28,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //30
        DB::table('respuestas')->insert([
            'texto' => 'Permite la interacción entre el usuario y el sistema de manera gráfica',
            'es_correcto' => 1,
            'id_pregunta' => 28,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales',
            'es_correcto' => 0,
            'id_pregunta' => 28,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales',
            'es_correcto' => 0,
            'id_pregunta' => 28,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //pregunta 31
        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales',
            'es_correcto' => 1,
            'id_pregunta' => 28,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales',
            'es_correcto' => 0,
            'id_pregunta' => 28,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales',
            'es_correcto' => 0,
            'id_pregunta' => 28,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales',
            'es_correcto' => 1,
            'id_pregunta' => 29,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales',
            'es_correcto' => 0,
            'id_pregunta' => 29,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales',
            'es_correcto' => 0,
            'id_pregunta' => 29,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales',
            'es_correcto' => 1,
            'id_pregunta' => 30,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales',
            'es_correcto' => 0,
            'id_pregunta' => 30,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales',
            'es_correcto' => 0,
            'id_pregunta' => 30,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales',
            'es_correcto' => 1,
            'id_pregunta' => 31,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales',
            'es_correcto' => 0,
            'id_pregunta' => 31,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales',
            'es_correcto' => 0,
            'id_pregunta' => 31,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales?',
            'es_correcto' => 1,
            'id_pregunta' => 32,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales',
            'es_correcto' => 0,
            'id_pregunta' => 32,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales?',
            'es_correcto' => 1,
            'id_pregunta' => 33,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales',
            'es_correcto' => 0,
            'id_pregunta' => 33,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales?',
            'es_correcto' => 1,
            'id_pregunta' => 34,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales',
            'es_correcto' => 0,
            'id_pregunta' => 34,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales?',
            'es_correcto' => 1,
            'id_pregunta' => 35,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales',
            'es_correcto' => 0,
            'id_pregunta' => 35,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales?',
            'es_correcto' => 1,
            'id_pregunta' => 36,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales',
            'es_correcto' => 0,
            'id_pregunta' => 36,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales?',
            'es_correcto' => 1,
            'id_pregunta' => 37,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales',
            'es_correcto' => 0,
            'id_pregunta' => 37,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales?',
            'es_correcto' => 1,
            'id_pregunta' => 38,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales',
            'es_correcto' => 0,
            'id_pregunta' => 38,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales?',
            'es_correcto' => 1,
            'id_pregunta' => 39,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'texto' => 'Facilita la creación de bases de datos no relacionales',
            'es_correcto' => 0,
            'id_pregunta' => 39,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
