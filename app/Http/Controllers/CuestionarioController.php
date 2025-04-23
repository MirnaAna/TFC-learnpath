<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CuestionarioController extends Controller
{
    function mostrarCuestionario($idAsignatura)
    {
        $preguntasConsulta = DB::table('preguntas')
            ->join('respuestas', 'preguntas.id', '=', 'respuestas.id_pregunta')
            ->select(
                'respuestas.texto as texto_respuesta',
                'respuestas.es_correcto',
                'respuestas.id as id_respuesta',
                'preguntas.texto as texto_pregunta',
                'preguntas.id as id_pregunta'
            )
            ->where('id_asignatura', $idAsignatura)
            ->orderBy('preguntas.id')
            ->get();

        $preguntas = [];

        foreach ($preguntasConsulta as $pregunta) {
            $id = $pregunta->id_pregunta;
            if (!isset($preguntas[$id])) {
                $preguntas[$id] = [
                    'id' => $id,
                    'texto' => $pregunta->texto_pregunta,
                    'respuestas' => []
                ];
            }
            $preguntas[$id]['respuestas'][] = [
                'id' => $pregunta->id_respuesta,
                'texto' => $pregunta->texto_respuesta,
                'es_correcto' => $pregunta->es_correcto,
            ];
        }

        //para mandarlo como array normal
        $preguntas = array_values($preguntas);


        $asignatura = DB::table('asignaturas')
            ->where('id', $idAsignatura)
            ->first();

        return Inertia::render('Cuestionario', [
            'preguntas' => $preguntas,
            'asignatura' => $asignatura
        ]);
    }

    //funcion para almacenar las respuestas en el cuestionario
    function enviarCuestionario(Request $request)
    {

        $idUsuario = auth()->id();
        $idAsignatura = $request->input('asignatura.id');
        $puntuacion = $request->input('puntuacion');
        $totalPreguntas = $request->input('total_preguntas');
        $respuestasCorrectas = $request->input('respuestas_correctas');

        // DB::table('resultados')->insert([
        //     'id_usuario' => $idUsuario,
        //     'asignatura.id' => $idAsignatura,
        //     'puntuacion' => $puntuacion,
        //     'total_preguntas' => $totalPreguntas,
        //     'respuestas_correctas' => $respuestasCorrectas,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

    }
}
