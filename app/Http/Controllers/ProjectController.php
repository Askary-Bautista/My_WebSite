<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function showDataShow(Request $request)
    {
        $videos = json_decode(file_get_contents(storage_path('app/data/data.json')), true);

        // Definir las categorías
        $categories = [
            'videos_youtube_javaNetbeans' => 'Java NetBeans',
            'videos_youtube_psint' => 'PseInt',
            'videos_youtube_ejercicios_bd' => 'Ejercicios BD'
        ];

        // Obtener la categoría actual desde la solicitud, o usar una predeterminada
        $currentCategory = $request->input('category', 'videos_youtube_ejercicios_bd');

        // Validar la categoría actual para evitar errores
        if (!array_key_exists($currentCategory, $videos)) {
            $currentCategory = 'videos_youtube_javaNetbeans';
        }

        return view('others_views.website', compact('videos', 'categories', 'currentCategory'));
    }

    public function getVideosByCategory($category)
    {
        $videos = json_decode(file_get_contents(storage_path('app/data/data.json')), true);

        // Verifica si la categoría existe
        if (isset($videos[$category])) {
            return response()->json($videos[$category]);
        } else {
            return response()->json([], 404); // No se encontraron videos para la categoría
        }
    }
}