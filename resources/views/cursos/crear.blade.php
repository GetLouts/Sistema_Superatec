@extends('layouts.app')
@section('title')
    Crear Curso
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Crear Nuevo Curso</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @if ($errors->any())
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                <strong>Revise los campos</strong>
                                @foreach ($errors->all as $error)
                                    <span class="badge badge-danger">{{$error}}</span>
                                @endforeach
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif

                            {!! Form::open(array('route'=>'cursos.store', 'method'=>'POST')) !!}
                                <div class="row">
                                    <td>
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label for="name">Nombre del Curso</label>
                                            {!! Form::text('cursos', null, array('class'=>'form-control')) !!}
                                        </div>
                                    </div>
                                
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label for="name">Cantidad de Alumnos</label>
                                            {!! Form::number('cantidad_alumnos', null, array('class'=>'form-control')) !!}
                                        </div>
                                    </div>        
                                </td>  
                                <td> 
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Clases</label>
                                        {!! Form::number('clases', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>                           
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <label for="name">Descripción del Curso</label>
                                        <div class="form-group">
                                            
                                            {!! Form::textarea('descripcion', null, array('class'=>'form-group')) !!}
                                        </div>
                                    </div>
                                </td>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <button type="submit" class="btn btn-success">Guardar</button>
                                        <a class="btn btn-primary" href="{{route('cursos.index') }}">Volver</a>
                                    </div>

                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

