@extends('layouts.app')
@section('title')
    Editar Usuarios
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Usuarios</h3>
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

                            {!! Form::model($alumnos, ['method' => 'PATCH','route' => ['alumnos.update', $alumnos->id]]) !!}
                            <div class="row">
                                <td>
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Nombres</label>
                                        {!! Form::text('nombres', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Apellidos</label>
                                        {!! Form::text('apellidos', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Cedula</label>
                                        {!! Form::number('cedula', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Telefono</label>
                                        {!! Form::number('telefono', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Telefono Local</label>
                                        {!! Form::number('telefono_local', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Dirección</label>
                                        {!! Form::text('direccion', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>
                            </td>
                            <td>    
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Correo</label>
                                        {!! Form::text('correo', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Nivel de Estudio</label>
                                        {!! Form::text('nivel_de_estudio', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Fecha de Nacimiento</label>
                                        {!! Form::date('fecha_nac', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Comunidad</label>
                                        {!! Form::text('comunidad', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <label for="name">Curso</label>
                                    <select name="curso" class="form-control">
                                        <option hidden selected>--> Selecione un Curso <--</option>
                                        @foreach ($cursos as $curso)
                                            <option value="{{ $curso->id }}">{{ $curso->cursos }}</option>                                                   
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Pago</label>
                                        {!! Form::text('pago', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <label for="name">Metodo de Pago</label>
                                    <select name="metodo_pago" class="form-control">
                                        <option hidden selected>--> Selecione un Metodo de Pago <--</option>
                                        @foreach ($metodos as $metodo)
                                            <option value="{{ $metodo->id }}">{{ $metodo->metodo_pago }}</option>      
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Fecha del Pago</label>
                                        {!! Form::date('fecha_pago', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Referencia</label>
                                        {!! Form::text('numero_referencia', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Patrocinador</label>
                                        {!! Form::text('patrocinador', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Fecha de Registro</label>
                                        {!! Form::date('fecha_registro', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <label for="name">Estado</label>
                                    <select name="estado" class="form-control">
   
                                        @foreach ($estados as $estado)
                                            <option value="{{ $estado->id }}">{{ $estado->estado }}</option>      
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <button type="submit" class="btn btn-success">Actualizar Alumno</button>
                                    <a class="btn btn-primary" href="{{route('alumnos.index') }}">Volver</a>
                                </div>
                            </div>
                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

