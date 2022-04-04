<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Curso;
use App\Models\Estado;
use App\Models\Metodo;
use App\Models\AlumnosHasPeriodos;
use App\Models\MetodosHasAlumnos;
use App\Models\PeriodosHasCursos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class AlumnoInactivoController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-alumnos|crear-alumnos|editar-alumnos|borrar-alumnos')->only('index');
        $this->middleware('permission:crear-alumnos', ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-alumnos', ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-alumnos', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));
        $alumnos = DB::table('alumnos')
            ->select(
                'id',
                'nombres',
                'apellidos',
                'cedula',
                'telefono',
                'telefono_local',
                'direccion',
                'correo',
                'nivel_de_estudio',
                'fecha_nac',
                'comunidad',
                'patrocinador',
                'fecha_registro',
                'estado_id'
            )
            ->where('cedula', 'LIKE', '%' . $texto . '%')
            ->orWhere('nombres', 'LIKE', '%' . $texto . '%')
            ->orderBy('cedula', 'asc')
            ->paginate(10);

        return view('alumnos.index', compact('alumnos', 'texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        // $alumnos->metodo_pago = $request->metodo_pago;
        //$alumnos->fecha_pago = $request->fecha_pago;
        $alumnos->patrocinador = $request->patrocinador;
        //$alumnos->fecha_registro = $request->fecha_registro;
        $alumnos->estado_id = $request->estado_id;
        $alumnos->creado_por = auth()->user()->id;
        $alumnos->actualizado_por = auth()->user()->id;



        $alumnos->save();

        return redirect()->route('alumnosinactivos.index');
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
        $cursos = PeriodosHasCursos::where('periodo_id', 1)->get();
        $alumnoshasperiodos = AlumnosHasPeriodos::all();
        $metodohasalumnos = MetodosHasAlumnos::all();
        $metodos = Metodo::all();
        return view('alumnos.show', compact('alumnos', 'id', 'cursos', 'alumnoshasperiodos', 'metodohasalumnos', 'metodos'));
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
        return view('alumnosinactivos.editar', compact('alumnos', 'cursos', 'estados', 'metodos'));
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
            'patrocinador' => 'required',
            'fecha_registro' => 'required',
            'estado_id' => 'required',


        ]);

        $input = $request->all();
        $alumno = Alumno::find($id);
        $alumno->update($input);

        return redirect()->route('alumnosinactivos.index');
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
        return redirect()->route('alumnosinactivos.index');
    }
}
