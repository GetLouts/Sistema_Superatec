<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE App\Models\Curso;
use App\Models\Estado;
use App\Models\PeriodosHasCursos;
use App\Models\Periodo;
use Illuminate\Support\Facades\DB;

class PeriodosHasCursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Curso::get();
        $periodos = Periodo::all();
        $periodoshascursos = PeriodosHasCursos::all();

        return view('cursos.periodohascurso', compact('cursos', 'periodoshascursos', 'periodos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $periodoshascursos = new PeriodosHasCursos();
        $periodoshascursos->periodo_id = $request->periodo;
        $periodoshascursos->curso_id = $request->curso;
        $periodoshascursos->creado_por = auth()->user()->id;
        //dd($periodoshascursos);
        $periodoshascursos->save();
        
        return redirect()->route('cursos.index');
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
        //
    }
}
