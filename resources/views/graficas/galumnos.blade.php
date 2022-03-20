@extends('layouts.app')
@section('title')
    Graficas Alumnos
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Graficas de Alumnos</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                                
                            <div id="container"></div>

                            <script src="https://code.highcharts.com/highcharts.js"></script>
                            <script>                        
                                var aux=<?php echo json_encode($aux)?>;
                                Highcharts.chart('container',{
                                    title:{
                                        text:"Graficas de Alumnos"
                                    },
                                    xAxis:{
                                        categories:['Enero','Febrero','Marzo','Abril','Mayo','Junio',
                                        'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre']
                                    },
                            
                                    yAxis:{
                                        title:{
                                            text:"Numeros de Alumnos"
                                        }
                                    },
                                    
                                    series:[{
                                        name:"Nuevos Alumnos",
                                        data:aux
                                    }],
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection

