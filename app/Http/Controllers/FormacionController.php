<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormacionController extends Controller
{
  //mostrar detalles de la formacion
  function mostrarDetalles($formacion)
  {
    //obtener los datos de la formacion desde la base de datos 
    $formacionSelecionada = DB::table('formaciones')->where('abreviatura', $formacion)->first();
    //obtenemos todas las asignaturas de esta formacion mediante un inner join
    $asignaturas =  DB::table('asignaturas_formacion')
      ->join('asignaturas', 'asignaturas_formacion.id_asignatura', '=', 'asignaturas.id')
      ->where('asignaturas_formacion.id_formacion', $formacionSelecionada->id)
      ->select('asignaturas.*')
      ->get();
    //obtener las salidas profesionales asociadas
    $salidasProfesionales = DB::table('salidas_profesionales')
      ->where('id_formacion', $formacionSelecionada->id)
      ->get();
    return Inertia::render('DetallesFormacion', [
      'formacion' => $formacionSelecionada,
      'asignaturas' => $asignaturas,
      'salidasProfesionales' => $salidasProfesionales
    ]);
  }

  //funcion para asignar asignaturas para un nuevo usuario 
  private function asignarUsuarioAsignaturas()
  {
    $asignaturas = DB::table('asignaturas')->get();
    $idUsuarioActual = auth()->id();
    //si el usuario no existe en la tabla resultados que lo añada y que añada las asignaturas
    foreach ($asignaturas as $asignatura) {
      $existe = DB::table('resultados')
        ->where('id_usuario', $idUsuarioActual)
        ->where('id_asignatura', $asignatura->id)
        ->exists();

      if (!$existe) {
        DB::table('resultados')->insert([
          'id_usuario' => $idUsuarioActual,
          'id_asignatura' => $asignatura->id,
          'created_at' => now(),
          'updated_at' => now(),
        ]);
      }
    }
  }

  //funcion para mostrar el dashboard
  function mostrarDashboard(Request $request)
  {
    $this->asignarUsuarioAsignaturas();
    //obteneos los datos de la formacion 
    $formaciones = DB::table('formaciones')->get();

    $idUsuarioActual = auth()->id();

    //obtenemos asignaturas para construir la tabla progreso
    $asignaturasProgreso = DB::table('resultados')
      ->join('asignaturas', 'asignaturas.id', '=', 'resultados.id_asignatura')
      ->join('estado_progreso', 'estado_progreso.id', '=', 'asignaturas.id_estado')
      ->select(
        'asignaturas.id as id_asignatura',
        'asignaturas.nombre as nombre_asignatura',
        'asignaturas.descripcion as descripcion_asignatura',
        'resultados.puntuacion as nota_asignatura',
        'resultados.id_usuario as id_usuario',
        'estado_progreso.id as id_estado',
        'estado_progreso.nombre as nombre_estado',
        'estado_progreso.updated_at as actualizado'
      )
      ->where('resultados.id_usuario', $idUsuarioActual)
      ->orderBy('asignaturas.id')
      ->get();

    //que me devuelva todos los estados
    $estados = DB::table('estado_progreso')
      ->get();

    $abreviatura = $request->query('nuevaFormacionSeleccionada');
    if ($abreviatura) {
      $formacionSelecionada = DB::table('formaciones')->where('abreviatura', $abreviatura)->first();
      $asignaturasProgreso =  DB::table('asignaturas_formacion')
        ->join('asignaturas', 'asignaturas_formacion.id_asignatura', '=', 'asignaturas.id')
        ->join('estado_progreso', 'estado_progreso.id', '=', 'asignaturas.id_estado')
        ->select(
          'asignaturas.id as id_asignatura',
          'asignaturas.nombre as nombre_asignatura',
          'asignaturas.descripcion as descripcion_asignatura',
          'estado_progreso.id as id_estado',
          'estado_progreso.nombre as nombre_estado',
        )
        ->where('asignaturas_formacion.id_formacion', $formacionSelecionada->id)
        ->get();
    }

    // obtenemos asignaturas para construir el chart
    $asignaturaEstado = DB::table('asignaturas')
      ->join('estado_progreso', 'estado_progreso.id', '=', 'asignaturas.id_estado')
      ->join('resultados', 'resultados.id_asignatura', '=', 'asignaturas.id')
      ->select(
        'asignaturas.nombre as nombre_asignatura',
        'resultados.puntuacion as puntuacion',
        'estado_progreso.nombre as Estado'
      )
      ->where('resultados.id_usuario', $idUsuarioActual)
      ->get();

    return Inertia::render('Dashboard', [
      'formaciones' => $formaciones,
      'asignaturasProgreso' => $asignaturasProgreso,
      'estados' => $estados,
      'asignaturaEstado' => $asignaturaEstado,
    ]);
  }


  //funcion para mostrar formaciones
  function mostrarFormaciones()
  {
    $formaciones = DB::table('formaciones')
      ->get();
    return Inertia::render('Formaciones', [
      'formaciones' => $formaciones
    ]);
  }

  //funcion para mostrar recursos
  function mostrarRecursos()
  {
    $asignaturas = DB::table('asignaturas')
      ->get();
    return Inertia::render('Recursos', [
      'asignaturas' => $asignaturas
    ]);
  }

  //datos de la API
  function mostrarTrabajos()
  {

    return Inertia::render('Trabajos');
  }
}
