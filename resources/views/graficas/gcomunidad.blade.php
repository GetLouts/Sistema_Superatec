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
                            <div> <canvas id="myChart" width="400" height="400"></canvas> </div>
                            <div id="container"></div>
                            <tbody id="tbody"></tbody>
                            <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
                            <script src="{{ asset('js/gcomunidad.js') }}"></script>
                        
                                
                               
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection

