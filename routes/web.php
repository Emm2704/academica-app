<?php

use App\Http\Controllers\EstudianteController;
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

Route::get('/estudiantes', [EstudianteController::class, 'index']) -> name('estudiantes.index');

Route::get('/nuevoestudiante', function () {
    return view('estudiantes.new');
});

Route::get('/editarestudiante', function () {
    return view('estudiantes.edit');
});

// Cursos

Route::get('/cursos', function () {
    return view('cursos.index');
})->name('cursos.index');

Route::get('/nuevocurso', function () {
    return view('cursos.new');
});

Route::get('/editarcurso', function () {
    return view('cursos.edit');
});


// Inscripciones

Route::get('/inscripciones', function () {
    return view('inscripciones.index');
})->name('inscripciones.index');

Route::get('/nuevainscripcion', function () {
    return view('inscripciones.new');
});

Route::get('/editarinscripcion', function () {
    return view('inscripciones.edit');
});