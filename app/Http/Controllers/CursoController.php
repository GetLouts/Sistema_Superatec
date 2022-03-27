<?php

namespace App\Http\Controllers;

USE App\Models\Curso;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::paginate(5);
        return view('cursos.index', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Curso::get();
        $user = User::Pluck('name');
        return view('cursos.crear', compact('cursos', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cursos = new Curso();
        $cursos->cursos = $request->cursos;
        $cursos->descripcion = $request->descripcion;
        $cursos->cantidad_alumnos = $request->cantidad_alumnos;
        $cursos->clases = $request->clases;
        $cursos->estado_id = $request->estado_id|1;
        $cursos->creado_por = auth()->user()->id;
        //$cursos->estado_id = $request->estado_id;
        

        $cursos->save();
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
        $cursos = Curso::find($id);
        return view('cursos.editar', compact('cursos'));
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
        $this->validate($request, [
            'cursos' => 'required', 
        ]);
        
        $cursos = Curso::find($id);
        $cursos->cursos = $request->input('cursos');
        $cursos->actualizado_por = auth()->user()->id;
        $cursos->save();

        return redirect()->route('cursos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('cursos')->where('id', $id)->delete();
        return redirect()->route('cursos.index');
    }
}
