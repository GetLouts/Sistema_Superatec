<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Alumno;
use App\Models\Metodo;
use App\Models\Curso;
use App\Models\PeriodosHasCursos;
use App\Models\MetodosHasAlumnos;
use App\Models\AlumnosHasPeriodos;
use Illuminate\Http\Request;
use App\Enums\HttpStatus;

class AlumnosHasPeriodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('metodos.create');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $alumno = Alumno::find($id);
        $metodos = Metodo::all();
        $cursos = PeriodosHasCursos::where('periodo_id', 1)->get();
        $alumnoshasperiodos = AlumnosHasPeriodos::all();
        $metodohasalumnos = MetodosHasAlumnos::all();
        return view('metodos.create', compact('alumnoshasperiodos', 'metodohasalumnos', 'cursos', 'alumno', 'metodos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $alumnoshasperiodos = new AlumnosHasPeriodos();

        $alumnoshasperiodos->alumno_id = $id;
        $alumnoshasperiodos->curso_id = $request->curso;
        $alumnoshasperiodos->periodo_id = 1;
        $alumnoshasperiodos->creado_por = auth()->user()->id;

        $alumnoshasperiodos->save();

        $metodohasalumnos = new MetodosHasAlumnos();

        $metodohasalumnos->pago = $request->pago;
        $metodohasalumnos->fecha_pago = $request->fecha_pago;
        $metodohasalumnos->numero_referencia = $request->numero_referencia;
        $metodohasalumnos->metodo_id = $request->metodo_pago;
        $metodohasalumnos->alumno_id = $id;
        $metodohasalumnos->periodos_has_cursos_id = $request->curso;
        $metodohasalumnos->creado_por = auth()->user()->id;

        $metodohasalumnos->save();

        return redirect()->route('alumnos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumnos = Alumno::find($id);
        $cursos = Curso::all();
        $alumnoshasperiodos = AlumnosHasPeriodos::all();
        $metodohasalumnos = MetodosHasAlumnos::all();
        return view('alumnos.show', compact('alumnos', 'id', 'cursos', 'alumnoshasperiodos', 'metodohasalumnos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumnos = Alumno::find($id);
        $cursos = Curso::all();
        $alumnoshasperiodos = AlumnosHasPeriodos::all();
        $metodohasalumnos = MetodosHasAlumnos::all();
        return view('alumnos.editar', compact('alumnos', 'id', 'cursos', 'alumnoshasperiodos', 'metodohasalumnos'));
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
        //
    }
}
