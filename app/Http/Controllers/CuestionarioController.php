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
        $puntuacion = $respuestasCorrectas * 3.333;

        $idAsignaturaExistente = DB::table('resultados')
            ->select('id_asignatura')
            ->where('id_asignatura', $idAsignatura)->first();

        $resultadosTotal = DB::table('resultados')
            ->select('id_asignatura')
            ->where('id_asignatura', $idAsignatura)->get();

        //obtenemos el existente usuario
        // $idUsuarioExistente = DB::table('resultados')
        //     ->where('id_usuario', $idUsuarioActual)
        //     ->select('id_usuario')->first();

        // $usuarioExiste = $idUsuarioExistente !== null && $idUsuarioExistente->id_usuario == $idUsuarioActual;
        $resultadoExiste = $resultadosTotal->count() > 0;
        if ($resultadoExiste) {
            // dd($resultadoExiste);
            //actualizamos el resultado de la existente asignatura
            DB::table('resultados')
                ->where('id_usuario', $idUsuarioActual)
                ->where('id_asignatura', $idAsignaturaExistente)
                ->update([
                    'puntuacion' => $puntuacion,
                    'total_preguntas' => $totalPreguntas,
                    'respuestas_correctas' => $respuestasCorrectas,
                    'updated_at' => now(),
                ]);
        } else { //insertamos resultado para una nueva asignatura
            DB::table('resultados')->insert([
                'id_usuario' => $idUsuarioActual,
                'id_asignatura' => $idAsignatura,
                'puntuacion' => $puntuacion,
                'total_preguntas' => $totalPreguntas,
                'respuestas_correctas' => $respuestasCorrectas,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // insertamos la nota en la asignatura
        DB::table('asignaturas')
            ->where('id_usuario', $idUsuarioActual)
            ->where('id', $idAsignatura)
            ->update([
                'nota' => $puntuacion,
                'id_usuario' => $idUsuarioActual,
                'updated_at' => now(),
            ]);

        return redirect()->route('dashboard')->with('success', '¡Cuestionario Enviado Correctamente!');
    }
}
