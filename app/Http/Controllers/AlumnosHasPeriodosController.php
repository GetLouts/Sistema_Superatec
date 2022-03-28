<?php

namespace App\Http\Controllers;
use Validator;
use App\Models\Alumno;
use App\Models\Curso;
use App\Models\Periodo;
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
        return view('alumnos.index');
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
        Validator::make($request->all(), [
            'alumno_id' => 'required',
            'curso_id' => 'required',
            'periodo_id' => 'required',
		])->validate();

		$alumnohasperiodo = new AlumnosHasPeriodos();
		$alumnohasperiodo->alumno_id = $request->alumno_id;
		$alumnohasperiodo->curso_id = $request->curso_id;
        $alumnohasperiodo->periodo_id = $request->periodo_id;

        try {
            $alumnohasperiodo->save();

            /* ========== Register action on bitacora ========== */
            $alumno = new \App\Models\Alumno();
            $curso = \App\Modulo::where('modulo', 'marcas_has_categorias')->first();
            $accion = \App\Accion::where('accion', 'Create')->first();
            $descripcion = "Created Mark by Category";
            $alumno->registro($modulo->id, $marcacategoria->id, $accion->id, \Request::ip(), $descripcion);
            /* ================================================= */

            $httpStatus = HttpStatus::CREATED;
            $this->respuesta["mensaje"] = HttpStatus::CREATED();
        } catch (\Exception $e) {
            $this->respuesta["mensaje"] = HttpStatus::ERROR();
            $httpStatus = HttpStatus::ERROR;
        }

        return response()->json($this->respuesta, $httpStatus);

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
