@extends('layouts.app')
@section('title')
    Graficas Cursos
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Graficas de los Cursos</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="container"></div>
                            <script src="https://code.highcharts.com/highcharts.js"></script>
                            <script src="https://code.highcharts.com/modules/exporting.js"></script>
                            <script src="https://code.highcharts.com/modules/export-data.js"></script>
                            <script src="https://code.highcharts.com/modules/accessibility.js"></script>
                            <script>
                                Highcharts.chart('container', {
                                    chart: {
                                        plotBackgroundColor: null,
                                        plotBorderWidth: null,
                                        plotShadow: false,
                                        type: 'pie'
                                    },
                                    title: {
                                        text: 'Browser market shares in January, 2018'
                                    },
                                    tooltip: {
                                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                                    },
                                    accessibility: {
                                        point: {
                                        valueSuffix: '%'
                                        }
                                    },
                                    plotOptions: {
                                        pie: {
                                        allowPointSelect: true,
                                        cursor: 'pointer',
                                        dataLabels: {
                                            enabled: true,
                                            format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                                        }
                                        }
                                    },
                                    series: [{
                                        name: 'Brands',
                                        colorByPoint: true,
                                        data: [{
                                        name: 'Chrome',
                                        y: 61.41,
                                        sliced: true,
                                        selected: true
                                        }, {
                                        name: 'Internet Explorer',
                                        y: 11.84
                                        }, {
                                        name: 'Firefox',
                                        y: 10.85
                                        }, {
                                        name: 'Edge',
                                        y: 4.67
                                        }, {
                                        name: 'Safari',
                                        y: 4.18
                                        }, {
                                        name: 'Sogou Explorer',
                                        y: 1.64
                                        }, {
                                        name: 'Opera',
                                        y: 1.6
                                        }, {
                                        name: 'QQ',
                                        y: 1.2
                                        }, {
                                        name: 'Other',
                                        y: 2.61
                                        }]
                                    }]
                                    });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection

