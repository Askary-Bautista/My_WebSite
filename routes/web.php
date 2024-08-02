<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PersonalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//ROUTE FOR BUTTON DOWNLOAD CV
Route::get('/download-cv', [FileController::class, 'downloadCV'])->name('download.cv');

//ROUTE FOR ABOUTME VIEW
Route::get('/aboutme', function () {
    return view('others_views.aboutme');
})->name('aboutme');

// ROUTE FOR PROJECTS VIEW
Route::get('/projects', [PersonalController::class, 'showDataProjects'])->name('projects');

// ROUTE FOR SHOWED DOCS PROJECTS (este puede no ser necesario si ya se maneja en la ruta de arriba)
Route::get('/projects/docs', [PersonalController::class, 'showDataProjects'])->name('projects.show');


//ROUTE FOR WEBSITE VIDEOS VIEW
Route::get('/website', function () {
    return view('others_views.website');
})->name('website');

//ROUTE FOR SHOW DATA FILE .JSON
Route::get('website/videos', [ProjectController::class, 'showDataShow'])->name('show.dataWeb');

// Rutas para obtener videos por categoría
Route::get('website/videos/{category}', [ProjectController::class, 'getVideosByCategory']);
