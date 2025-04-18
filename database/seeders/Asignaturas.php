<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Asignaturas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asignaturas')->insert(
            [
                'nombre' => 'Lenguajes de Marcas(HTML, XML, CSS)',
                'descripcion' => 'Lenguaje de marcado para la creación de páginas web ',
                'icono' => 'FaCode',
                'documentacion'=>'https://www.w3schools.com/html/default.asp',
                'tutorial'=>'https://www.youtube.com/watch?v=eesyGnJwfAY&list=PLROIqh_5RZeB92ME1GFyeqDVOa-gL0Ybd',
                'id_estado'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('asignaturas')->insert(
            [
                'nombre' => 'Base de datos',
                'descripcion' => 'Asignatura enfocada en el diseño, modelado y gestión de bases de datos relacionales como MySQL, PostgreSQL y SQL Server.',
                'icono' => 'FaDatabase',
                'documentacion'=>'https://www.w3schools.com/sql/',
                'tutorial'=>'https://www.youtube.com/watch?v=OuJerKzV5T0&t=8s',
                'id_estado'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('asignaturas')->insert(
            [
                'nombre' => 'Sistemas Informaticos',
                'descripcion' => 'Conocimiento sobre hardware, software y redes básicas de computadoras.',
                'icono' => 'FaServer',
                'documentacion'=>'https://www.w3schools.com/sql/',
                'tutorial'=>'https://www.youtube.com/watch?v=o_78Ue_EUeI&list=PL2Z95CSZ1N4HLqf215jj9ZJgmWIXm7gOo',
                'id_estado'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('asignaturas')->insert(
            [
                'nombre' => 'Programacion',
                'descripcion' => 'Introducción a la lógica de programación y desarrollo de software.',
                'icono' => 'FaCogs',
                'documentacion'=>'https://www.w3schools.com/programming/index.php',
                'tutorial'=>'https://www.youtube.com/@aulaenlanube/playlists',
                'id_estado'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('asignaturas')->insert(
            [
                'nombre' => 'Entorno de Desarrollo',
                'descripcion' => 'Uso de IDEs y herramientas de programación para mejorar la productividad.',
                'icono' => 'FaDesktop',
                'documentacion'=>'https://code.visualstudio.com/docs',
                'tutorial'=>'https://www.youtube.com/watch?v=CxF3ykWP1H4',
                'id_estado'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('asignaturas')->insert(
            [
                'nombre' => 'Acceso a Datos',
                'descripcion' => 'Técnicas para acceder, almacenar y gestionar datos en aplicaciones.',
                'icono' => 'FaDatabase',
                'documentacion' => 'https://spring.io/projects/spring-data',
                'tutorial' => 'https://www.youtube.com/watch?v=LtgnZIgt3XU&list=PLaxZkGlLWHGWngLsc2l9TA4dyHQPOpgVR',
                'id_estado' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('asignaturas')->insert(
            [
                'nombre' => 'Desarrollo Web en Entorno Cliente (JavaScript)',
                'descripcion' => 'Programación del lado del cliente usando JavaScript.',
                'icono' => 'FaJs',
                'documentacion' => 'https://www.w3schools.com/js/default.asp',
                'tutorial' => 'https://www.youtube.com/@informaticonfig333/search?query=javascript',
                'id_estado' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('asignaturas')->insert(
            [
                'nombre' => 'Desarrollo Web en Entorno Servidor',
                'descripcion' => 'Desarrollo del lado del servidor usando PHP y Node.js, etc.',
                'icono' => 'FaServer',
                'documentacion'=>'https://www.w3schools.com/html/default.asp',
                'tutorial'=>'https://www.youtube.com/c/Programaci%C3%B3nATS',
                'id_estado'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('asignaturas')->insert(
            [
                'nombre' => 'Programación Multimedia y Dispositivos Móviles (Android, iOS)',
                'descripcion' => 'Desarrollo de aplicaciones móviles y multimedia.',
                'icono' => 'FaMobileAlt',
                'documentacion' => 'https://developer.android.com/guide',
                'tutorial' => 'https://www.youtube.com/watch?v=fis26HvvDII',
                'id_estado' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('asignaturas')->insert(
            [
                'nombre' => 'Administración de Redes',
                'descripcion' => 'Diseño, implementación y mantenimiento de redes de computadoras. Configuración de dispositivos de red como switches, routers y firewalls.',
                'icono' => 'FaNetworkWired',
                'documentacion' => 'https://www.manageengine.com/es/network-monitoring/network-management.html',
                'tutorial' => 'https://www.youtube.com/@naseros/search?query=redes',
                'id_estado' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('asignaturas')->insert(
            [
                'nombre' => 'Sistemas Operativos (Linux, Windows Server)',
                'descripcion' => 'Instalación, configuración y administración avanzada de sistemas operativos como Linux y Windows Server, incluyendo gestión de usuarios, permisos, servicios y seguridad básica.',
                'icono' => 'FaDesktop',
                'documentacion' => 'https://ubuntu.com/server/docs',
                'tutorial' => 'https://www.youtube.com/watch?v=4nIP4mSK1_A&list=PLhU2otMFcLuBLeHGkBsU-zDNtwCCxDxRr',
                'id_estado' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('asignaturas')->insert(
            [
                'nombre' => 'Seguridad Informática',
                'descripcion' => 'Análisis de riesgos, implementación de políticas de seguridad, protección frente a amenazas y vulnerabilidades, gestión de cortafuegos, antivirus y cifrado de información.',
                'icono' => 'FaShieldAlt',
                'documentacion' => 'https://www.ibm.com/es-es/topics/cybersecurity',
                'tutorial' => 'https://www.youtube.com/watch?v=N63NJo3VHHg&list=PLNmV1qHP7UdlAYYiksoYJdVp4YnEkH3sL',
                'id_estado' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('asignaturas')->insert(
            [
                'nombre' => 'Implantación de Aplicaciones Web',
                'descripcion' => 'Instalación, configuración y despliegue de aplicaciones web en servidores locales o cloud. Manejo de servidores web como Apache, Nginx y tecnologías backend.',
                'icono' => 'FaGlobe',
                'documentacion' => 'https://httpd.apache.org/docs/2.4/',
                'tutorial' => 'https://www.youtube.com/watch?v=js7rFvvouu0&list=PL3b_UCkZSAUxsCYLaIVB4kgglaLj0iVe4',
                'id_estado' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
