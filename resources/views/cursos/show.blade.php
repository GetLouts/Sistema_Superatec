@extends('layouts.app')
@section('title')
    Información del Curso
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Información del Curso</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            {!! Form::model($cursos, ['method' => 'PATCH','route' => ['cursos.show', $cursos->id]]) !!}
                            <div class="row">
                                <td>
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label for="name">Nombre del Curso</label>
                                            <br> {{ $cursos->cursos }} </br> 
                                        </div>
                                    </div>
                                
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label for="name">Cantidad de Alumnos</label>
                                           <br> {{ $cursos->cantidad_alumnos }} </br>
                                        </div>
                                    </div>        
                                </td>
                                <td>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Clases del Curso</label>
                                      <br>  {{ $cursos->clases }} </br>
                                    </div>
                                </div>                               
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label for="name">Descripción del Curso</label>
                                          <br>  {{ $cursos->descripcion }} </br>
                                        </div>
                                    </div>
                                </td>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <a class="btn btn-primary" href="{{route('cursos.index') }}">Volver</a>
                                </div>
                            </div>
                            {!! Form::close() !!}
                            
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

