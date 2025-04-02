<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;

class FormacionController extends Controller
{
      //mostrar detalles de la formacion
      function mostrarDetalles($formacion)
      {
          // $formacionSeleccionada = Item::findOrFail($formacion);
          // dd($formacion);
          return Inertia::render('DetallesFormacion', [
              'nombreFormacion' => $formacion
          ]);
      }
}
