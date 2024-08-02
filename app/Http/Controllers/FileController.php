<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function downloadCV()
    {
        $filePath = storage_path('app/public/cv/JOSEPHASKARY_BAUTISTAJIMENEZ_CV.pdf'); // Cambia esto a la ruta de tu archivo

        if (file_exists($filePath)) {
            return response()->download($filePath);
        } else {
            return redirect()->back()->with('error', 'File not found.');
        }
    }
}