<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $estudiantes = Estudiante::all();
       return view('estudiantes.index',['estudiantes' => $estudiantes]);
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
        return view('estudiantes.new', ['estudiantes' => $estudiantes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estudiante = new Estudiante();
        $estudiante -> nombre = $request -> nombre;
        $estudiante -> apellido = $request -> apellido;
        $estudiante -> fechanacimiento = $request -> fecha;
        $estudiante -> email = $request -> email;

        $estudiante->save();

        $estudiantes = DB::table('estudiantes')
        ->orderBy('nombre')
        ->get();
        return view('estudiantes.index', ['estudiantes' => $estudiantes]);
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
        $estudiante = Estudiante::find($id);
        $estudiantes = DB::table('estudiantes')
        ->orderBy('nombre')
        ->get();
        return view('estudiantes.edit', ['estudiante' => $estudiante, 'estudiantes' => $estudiantes]);
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
        $estudiante = Estudiante::find($id);
        $estudiante -> nombre = $request -> nombre;
        $estudiante -> apellido = $request -> apellido;
        $estudiante -> fechanacimiento = $request -> fecha;
        $estudiante -> email = $request -> email;

        $estudiante->save();

        $estudiantes = DB::table('estudiantes')
        ->orderBy('nombre')
        ->get();
        return view('estudiantes.index', ['estudiantes' => $estudiantes]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiante = Estudiante::find($id);
        $estudiante -> delete();

        $estudiantes = DB::table('estudiantes')
        ->orderBy('nombre')
        ->get();
        return view('estudiantes.index', ['estudiantes' => $estudiantes]);
    }
}
