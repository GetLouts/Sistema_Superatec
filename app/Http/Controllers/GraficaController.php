<?php

namespace App\Http\Controllers;

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
        $data['data'] = json_encode($data);

        return view('graficas.gcursos', compact('data'));
    }
}
