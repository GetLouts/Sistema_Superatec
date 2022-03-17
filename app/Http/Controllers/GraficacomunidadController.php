<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use Illuminate\Support\Facades\DB;

class GraficacomunidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('graficas.gcomunidad');
    }
    public function ordersChart(Request $request)
    {
        $entries = Alumno::select([
            DB::raw('MONTH(created_at) as month'),
            //DB::raw('YEAR(created_at) as year'),
            DB::raw('SUM(total) as total'),
            DB::raw('COUNT(*) as count'),
        ])
        ->whereYear('created_at', 2022)
        ->group([
            'month', 'year'
        ])
        -orderBy('month')
        ->get();

        $labels = [
            1 => 'Enero','Febrero','Marzo','Abril','Mayo','Junio',
            'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre',
        ];
        $dataset = [];

        foreach ($entries as $entry) {
            $dataset['total'][]=$entry->total;
            $dataset['count'][]=$entry->count;
        }
        return [
            'labels' => $labels,
            'dataset' => $dataset,
        ];
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
        //
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
