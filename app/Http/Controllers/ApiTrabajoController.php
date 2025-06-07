<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http; //PARA HACER PETICIONES HTTP
use Illuminate\Support\Facades\Cache; // Importamos Cache para guardar temporalmente datos y evitar llamadas repetidas

class ApiTrabajoController extends Controller
{
    public function buscarTrabajos()
    {
        // Usamos caché para evitar hacer muchas peticiones. Guardamos por 60 minutos
        $trabajos = Cache::remember('trabajos_informatica', 60, function () {
            $response = Http::get('https://remoteok.com/api');
            // dd($response);
            if ($response->successful()) {
                $trabajos = $response->json();

                // dd($trabajos);
                $trabajosFiltrados = collect($trabajos)->filter(function ($trabajo) {
                    // Filtramos para quedarnos solo con rabajos de informática
                    if (isset($trabajo['tags'])) {
                        foreach ($trabajo['tags'] as $tag) {
                            if (
                                str_contains(strtolower($tag), 'developer') ||
                                str_contains(strtolower($tag), 'it') ||
                                str_contains(strtolower($tag), 'software') ||
                                str_contains(strtolower($tag), 'tech') ||
                                str_contains(strtolower($tag), 'programmer') ||
                                str_contains(strtolower($tag), 'informatica')
                            ) {
                                return true;
                            }
                        }
                    }
                    return false;
                });
                return $trabajosFiltrados->values();
                // Devolvemos la colección filtrada como un array con índices reiniciados
            }

            return [];
        });

        if (empty($trabajos)) {
            return response()->json(['error' => 'No se encontraron trabajos'], 500);
        }
        // return $trabajos;

        return response()->json($trabajos, 200);
        // return response()->json($trabajos);
    }
}
