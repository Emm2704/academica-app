<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscripcion;
use Illuminate\Support\Facades\DB;

class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inscripciones = DB::table('inscripciones')
    ->join('estudiantes', 'inscripciones.estudiante_id', '=', 'estudiantes.id')
    ->join('cursos', 'inscripciones.curso_id', '=', 'cursos.id')
    ->select('inscripciones.*', 'estudiantes.nombre as nombre_estudiante', 'cursos.nombre as nombre_curso')
    ->get();

return view('inscripciones.index', ['inscripciones' => $inscripciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estudiantes = DB::table('estudiantes')
        ->orderBy('nombre')
        ->get();

        $cursos = DB::table('cursos')
        ->orderBy('nombre')
        ->get();

        return view('inscripciones.new', ['estudiantes' => $estudiantes, 'cursos' => $cursos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inscripcion = new Inscripcion();
        $inscripcion->estudiante_id = $request->estudiante_id;
        $inscripcion->curso_id = $request->curso_id;
        $inscripcion->fecha_inscripcion = $request->fecha_inscripcion;
        $inscripcion->save();

        $inscripciones = DB::table('inscripciones')
        ->join('estudiantes', 'inscripciones.estudiante_id', '=', 'estudiantes.id')
        ->join('cursos', 'inscripciones.curso_id', '=', 'cursos.id')
        ->select('inscripciones.*', 'estudiantes.nombre as nombre_estudiante', 'cursos.nombre as nombre_curso')
        ->get();

        return view('inscripciones.index', ['inscripciones' => $inscripciones]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inscripcion = Inscripcion::find($id);
        $inscripcion->delete();

        $inscripciones = DB::table('inscripciones')
        ->join('estudiantes', 'inscripciones.estudiante_id', '=', 'estudiantes.id')
        ->join('cursos', 'inscripciones.curso_id', '=', 'cursos.id')
        ->select('inscripciones.*', 'estudiantes.nombre as nombre_estudiante', 'cursos.nombre as nombre_curso')
        ->get();

        return view('inscripciones.index', ['inscripciones' => $inscripciones]);
    }
}
