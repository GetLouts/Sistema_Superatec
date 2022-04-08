<?php

namespace App\Http\Controllers;
use App\Models\Alumno;
use App\Models\PeriodosHasCursos;

use Illuminate\Http\Request;

class GraficaController extends Controller
{
    public function charts()
    {

        $cursos = PeriodosHasCursos::all();
        $data = [];
        foreach ($cursos as $curso) {
            $data['label'][] = $curso->periodo_id;
            $data['data'][] = $curso->curso_id;
        }
        $data = json_encode($data);

        return view('graficas.gcursos', compact('data'));
    }

    public function charts2()
    {

        $alumnos = Alumno::all();
        $periodosXcurso = PeriodosHasCursos::all();
        $data = [];
        foreach ($alumnos as $alumno) {
            $data['data'][] = $alumno->periodo_id;
            $data['label'][] = $alumno->comunidad;
        }
        $data = json_encode($data);

        return view('graficas.gcomunidad', compact('data'));
    }
    
}
