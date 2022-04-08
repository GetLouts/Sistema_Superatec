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
                                    var cData = JSON.parse('<?php echo $data; ?>');
                                    console.log(cData);
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection

<script src="https://code.highcharts.com/highcharts.js"></script>
