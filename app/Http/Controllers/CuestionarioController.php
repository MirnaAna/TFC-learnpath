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

    //funcion para almacenar los resultados del cuestionario
    function enviarCuestionario(Request $request)
    {
        $respuestas = $request->input('respuestas');
        $idAsignatura = $request->input('id_asignatura');
        $idUsuarioActual = auth()->id();

        $totalPreguntas = count($respuestas);
        $respuestasCorrectas = 0;

        //obtenemos el numero de respuestas correctas
        foreach ($respuestas as $idPregunta => $idRespuesta) {
            $respuesta = DB::table('respuestas')->where('id', $idRespuesta)->first();
            if ($respuesta && $respuesta->es_correcto) {
                $respuestasCorrectas++;
            }
        }

        // la puntuacion a cada pregunta depende del numero de preguntas
        switch ($totalPreguntas) {
            case 2:
                $puntuacion = $respuestasCorrectas * 5;
                break;
            case 3:
                $puntuacion = $respuestasCorrectas * 3.333;
                break;
            case 4:
                $puntuacion = $respuestasCorrectas * 2.5;
                break;
            default:
                $puntuacion = 0;
                break;
        }

        // insertamos la puntuacion obtenida junto con el total de preguntas y las respuestas correctas
        DB::table('resultados')
            ->where('id_usuario', $idUsuarioActual)
            ->where('id_asignatura', $idAsignatura)
            ->update([
                'puntuacion' => $puntuacion,
                'total_preguntas' => $totalPreguntas,
                'respuestas_correctas' => $respuestasCorrectas,
                'updated_at' => now(),
            ]);

        return redirect()->route('dashboard')->with('success', '¡Cuestionario Enviado Correctamente!');
    }
}
