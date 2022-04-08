@extends('layouts.app')
@section('title')
    Graficas Comunidades
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Graficas de las Comunidades</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="panel">
                                <div id="container"></div>
                                <script>
                                    var datas = <?php echo json_encode($datas); ?>;
                                    Highcharts.chart('container', {
                                        chart: {
                                            type: 'line'
                                        },
                                        title: {
                                            text: 'Comunidades'
                                        },
                                        xAxis: {
                                            categories: [
                                                'Enero',
                                                'Febrero',
                                                'Marzo',
                                                'Abril',
                                                'Mayo',
                                                'Junio',
                                                'Julio',
                                                'Agosto',
                                                'Septiembre',
                                                'Octubre',
                                                'Noviembre',
                                                'Deciembre'
                                            ],
                                            crosshair: true
                                        },
                                        yAxis: {
                                            min: 0,
                                            title: {
                                                text: 'Rainfall (mm)'
                                            }
                                        },
                                        tooltip: {
                                            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                                            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                                                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                                            footerFormat: '</table>',
                                            shared: true,
                                            useHTML: true
                                        },
                                        plotOptions: {
                                            column: {
                                                pointPadding: 0.2,
                                                borderWidth: 0
                                            }
                                        },
                                        series: [{
                                            name: 'Nuevas Comunidades',
                                            data: datas
                                        }]
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection

<script src="https://code.highcharts.com/highcharts.js"></script>
