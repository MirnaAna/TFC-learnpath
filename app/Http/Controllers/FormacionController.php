<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Illuminate\Http\Request;

class FormacionController extends Controller
{
      //mostrar detalles de la formacion
      function mostrarDetalles($formacion)
      {
          //obtener los datos de la formacion desde la base de datos 
          $formacionSelecionada = DB::table('formaciones')->where('abreviatura', $formacion)->first();
          //obtenemos todas las asignaturas de esta formacion mediante un inner join
          $asignaturas =  DB::table('asignaturas_formacion')
          ->join('asignaturas', 'asignaturas_formacion.id_asignatura', '=','asignaturas.id')
          ->where('asignaturas_formacion.id_formacion',$formacionSelecionada->id)
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
      
      //funcion para mostrar el dashboard
      function mostrarDashboard(Request $request){

        //obteneos los datos de la formacion 
        $formaciones= DB::table('formaciones')->get();
       
        //obtenemos asignaturas para construir la tabla progreso
          $asignaturasProgreso= DB:: table('asignaturas')
          ->join('estado_progreso', 'estado_progreso.id', '=','asignaturas.id_estado')
          ->select( 'asignaturas.id as id_asignatura',
           'asignaturas.nombre as nombre_asignatura',
           'asignaturas.descripcion as descripcion_asignatura',
           'estado_progreso.id as id_estado',
           'estado_progreso.nombre as nombre_estado',
           'estado_progreso.updated_at as actualizado')
          ->get();
          //que me devuelva todos los estados
          $estados = DB::table('estado_progreso')
          ->get();

        $abreviatura= $request->query('nuevaFormacionSeleccionada');
        if($abreviatura){
          $formacionSelecionada = DB::table('formaciones')->where('abreviatura', $abreviatura)->first();
          $asignaturasProgreso =  DB::table('asignaturas_formacion')
            ->join('asignaturas', 'asignaturas_formacion.id_asignatura', '=','asignaturas.id')
            ->join('estado_progreso', 'estado_progreso.id', '=','asignaturas.id_estado')
            ->select( 'asignaturas.id as id_asignatura',
              'asignaturas.nombre as nombre_asignatura',
              'asignaturas.descripcion as descripcion_asignatura',
              'estado_progreso.id as id_estado',
              'estado_progreso.nombre as nombre_estado',
              'estado_progreso.updated_at as actualizado')
            ->where('asignaturas_formacion.id_formacion',$formacionSelecionada->id)
            ->get();
        }
        
        $asignaturaEstado=DB::table('asignaturas')
        ->join('estado_progreso', 'estado_progreso.id', '=', 'asignaturas.id_estado')
        ->select('asignaturas.id', 'asignaturas.nombre as nombre_asignatura', 'estado_progreso.nombre as nombre_estado')
        ->get();

        return Inertia::render('Dashboard', [
          'formaciones' => $formaciones,
          'asignaturasProgreso' => $asignaturasProgreso,
          'estados' => $estados,
          'asignaturaEstado' => $asignaturaEstado
        ]);
      }

      /**
       * funcion para cambiar el estado del progreso
       */
      function cambiarEstado(Request $request, $idAsignatura){
        //obtenemos el id de estado
        $idEstado= DB::table('estado_progreso')
        ->where('nombre', $request->estado)
        ->first()->id;

        //actualizamos en estado
        DB::table('asignaturas')
          ->where('id', $idAsignatura)
          ->update(['id_estado' =>$idEstado]);
        return redirect()->back()->with('mensaje', 'Estado Actualizado');
      }

      //funcion para mostrar formaciones
      function mostrarFormaciones()
      {
          $formaciones=DB::table('formaciones')
          ->get();
          return Inertia::render('Formaciones', [
              'formaciones' => $formaciones
          ]);
      }

      //funcion para mostrar recursos
      function mostrarRecursos()
      {
          $asignaturas=DB::table('asignaturas')
          ->get();
          return Inertia::render('Recursos', [
              'asignaturas' => $asignaturas
          ]);
      }
      function mostrarTrabajos()
      {
          
          return Inertia::render('Trabajos');
      }
  }

