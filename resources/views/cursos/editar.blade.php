@extends('layouts.app')
@section('title')
    Editar Cursos
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Curso</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                    <strong>Revise los campos></strong>
                                    @foreach ($errors->all() as $error)
                                        <span class="badge badge-danger">{{ $error }}</span>
                                    @endforeach
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            {!! Form::model($cursos, ['method' => 'PATCH','route' => ['cursos.update', $cursos->id]]) !!}
                            <div class="row">
                                <td>
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label for="name">Codigo del Curso</label>
                                            {!! Form::text('codigo', null, array('class'=>'form-control')) !!}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label for="name">Nombre del Curso</label>
                                            {!! Form::text('cursos', null, array('class'=>'form-control')) !!}
                                        </div>
                                    </div>
                                </td>
                                <td>
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
                                            <label for="name">Clases del Curso</label>
                                            {!! Form::number('clases', null, array('class'=>'form-control')) !!}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label for="name">Fecha de Inicio</label>
                                            {!! Form::date('fecha_inicio', null, array('class'=>'form-control')) !!}
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <label for="name">Modalidad</label>
                                            <select name="modalidad_id" class="form-control">
                                                    @foreach ($modalidades as $modalida)
                                                        <option value="{{ $modalida->id }}"> {{ $modalida->modalidad }}</option>    
                                                    @endforeach
                                            </select>
                                    </div>     
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <label for="name">Descripci??n del Curso</label>
                                        <div class="form-group">
                                            {!! Form::textarea('descripcion', null, array('class'=>'form-group')) !!}
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <label for="name">Estado</label>
                                        <select name="estado_id" class="form-control">
                                            
                                            @foreach ($estados as $estado)
                                                <option value="{{ $estado->id }}">{{ $estado->estado }}</option>      
                                            @endforeach
                                        </select>
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
    </section>
@endsection

