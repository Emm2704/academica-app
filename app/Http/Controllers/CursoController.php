<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::all();
       return view('cursos.index',['cursos' => $cursos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = DB::table('cursos')
        ->orderBy('id')
        ->get();
        return view('cursos.new', ['cursos' => $cursos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curso = new Curso();
        $curso -> nombre = $request -> nombre;
        $curso -> descripcion = $request -> descripcion;
        $curso -> duracion = $request -> duracion;

        $curso->save();

        $cursos = DB::table('cursos')
        ->orderBy('id')
        ->get();
        return view('cursos.index', ['cursos' => $cursos]);
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
        $curso = Curso::find($id);
        $cursos = DB::table('cursos')
        ->orderBy('id')
        ->get();
        return view('cursos.edit', ['curso' => $curso, 'cursos' => $cursos]);
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
        $curso = Curso::find($id);
        $curso -> nombre = $request -> nombre;
        $curso -> descripcion = $request -> descripcion;
        $curso -> duracion = $request -> duracion;

        $curso->save();

        $cursos = DB::table('cursos')
        ->orderBy('id')
        ->get();
        return view('cursos.index', ['cursos' => $cursos]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curso = Curso::find($id);
        $curso -> delete();

        $cursos = DB::table('cursos')
        ->orderBy('id')
        ->get();
        return view('cursos.index', ['cursos' => $cursos]);
    }
}
