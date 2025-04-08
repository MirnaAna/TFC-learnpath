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
          return Inertia::render('DetallesFormacion', [
              'formacion' => $formacionSelecionada,
            'asignaturas' => $asignaturas 
          ]);
      }
}
