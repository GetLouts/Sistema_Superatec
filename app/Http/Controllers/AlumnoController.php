<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Curso;
use App\Models\Estado;
use App\Models\Metodo;
use App\Models\AlumnosHasPeriodos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class AlumnoController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-alumnos|crear-alumnos|editar-alumnos|borrar-alumnos')->only('index');
        $this->middleware('permission:crear-alumnos', ['only'=>['create','store']]);
        $this->middleware('permission:editar-alumnos', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-alumnos', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::paginate(10);
        return view('alumnos.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Curso::all();
        // $cursos = Periodo::where('id', $periodo activo)->get();
        $estados = Estado::all();
        $metodos = Metodo::all();
        $alumnoshasperiodos = AlumnosHasPeriodos::all();
       return view('alumnos.crear', compact('cursos', 'estados', 'metodos', 'alumnoshasperiodos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
        $alumnos = new Alumno();

            $alumnos->nombres = $request->nombres;
            $alumnos->apellidos = $request->apellidos;
            $alumnos->cedula = $request->cedula;
            $alumnos->telefono = $request->telefono;
            $alumnos->telefono_local = $request->telefono_local;
            $alumnos->direccion = $request->direccion;
            $alumnos->correo = $request->correo;
            $alumnos->nivel_de_estudio = $request->nivel_de_estudio;
            $alumnos->fecha_nac = $request->fecha_nac;
            $alumnos->comunidad = $request->comunidad;
            //$alumnos->curso = $request->curso;
            //$alumnos->pago = $request->pago;
            //$alumnos->metodo_pago = $request->metodo_pago;
            //$alumnos->fecha_pago = $request->fecha_pago;
            $alumnos->numero_referencia = $request->numero_referencia;
            $alumnos->patrocinador = $request->patrocinador;
            //$alumnos->fecha_registro = $request->fecha_registro;
            $alumnos->fecha_registro = $request->fecha_registro;
            $alumnos->estado_id = $request->estado_id;
            $alumnos->creado_por = auth()->user()->id;
            $alumnos->actualizado_por = auth()->user()->id;
           
            
            $alumnos->save();

            return redirect()->route('alumnos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $alumnos = Alumno::find($id);
        $cursos = Curso::all();
        $alumnoshasperiodos = AlumnosHasPeriodos::all();
        return view('alumnos.show', compact('alumnos', 'id', 'cursos', 'alumnoshasperiodos'));
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
        $estados = Estado::all();
        $metodos = Metodo::all();
        return view('alumnos.editar', compact('alumnos', 'alumnos', 'cursos', 'estados', 'metodos'));
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
            'nombres' => 'required',
            'apellidos' => 'required',
            'cedula' => 'required',
            'telefono' => 'required',
            'telefono_local' => 'required',
            'direccion' => 'required',
            'correo' => 'required',
            'nivel_de_estudio' => 'required',
            'fecha_nac' => 'required',
            'comunidad' => 'required',
            'pago' => 'required',
            'numero_referencia' => 'required',
            'patrocinador' => 'required',
            'fecha_registro' => 'required',
            'estado_id' => 'required',
           
            
            
        ]);

        $input = $request->all();
        $alumno = Alumno::find($id);
        $alumno->update($input);

        return redirect()->route('alumnos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alumno::find($id)->delete();
        return redirect()->route('alumnos.index');
    }
}
