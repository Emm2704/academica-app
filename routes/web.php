<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\InscripcionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




// Estudiantes
Route::resource('estudiantes', EstudianteController::class);




// Cursos
Route::resource('cursos', CursoController::class);


// Inscripciones

Route::resource('inscripciones', InscripcionController::class)->parameters([
    'inscripciones' => 'inscripcion',
]);


// Route::get('/inscripciones', [InscripcionController::class, 'index']) -> name('inscripciones.index');

// Route::post('/inscripciones', [InscripcionController::class, 'store']) -> name('inscripciones.store');

// Route::get('/inscripciones/create', [InscripcionController::class, 'create'])->name('inscripciones.create');

// Route::delete('/inscripciones{inscripcion}', [InscripcionController::class, 'destroy'])->name('inscripciones.destroy');

// Route::put('/inscripciones{inscripcion}', [InscripcionController::class, 'update']) -> name('inscripciones.update');

// Route::get('/inscripciones{inscripcion}/edit', [InscripcionController::class, 'edit']) -> name('inscripciones.edit');