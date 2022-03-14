<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Periodo;
use Illuminate\Support\Facades\DB;

class PeriodoController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-periodo|crear-periodo|editar-periodo|borrar-periodo')->only('index');
        $this->middleware('permission:crear-periodo', ['only'=>['create','store']]);
        $this->middleware('permission:editar-periodo', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-periodo', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periodos = Periodo::paginate(10);
        return view('periodos.index', compact('periodos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $periodos = Periodo::pluck('nombre_perido','nombre_perido')->all();
        return view('periodos.crear', compact('periodos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $periodos = new Periodo();

            $periodos->nombre_perido = $request->nombre_perido;
            $periodos->estado = $request->estado;
            
            $periodos->save();

            return redirect()->route('periodos.index');
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
        $periodos = Periodo::find($id);

        return view('periodos.editar', compact('periodos'));
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
        $this->validate($request,[
            'nombre_perido' => 'required',
            'estado' => 'required',
        ]);
        $input = $request->all();
        $periodos = Periodo::find($id);
        $periodos->update($input);

        return redirect()->route('periodos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Periodo::find($id)->delete();
        return redirect()->route('periodos.index');
    }
}
