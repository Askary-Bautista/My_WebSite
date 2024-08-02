<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function showDataProjects(Request $request)
    {
        // Leer el contenido del archivo JSON
        $projectsPersonal = json_decode(file_get_contents(storage_path('app/data/data.json')), true);

        // Pasar los datos de proyectos a la vista
        return view('others_views.projects', compact('projectsPersonal'));
    }
}
