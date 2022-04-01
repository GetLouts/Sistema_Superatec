@extends('layouts.app')
@section('title')
    Información del Estudiante
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Información del Estudiante</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <hr>
                                @if($alumnos->imagen !==null)
                                <img src="{{ asset("/img/alumnos/$alumnos->imagen") }}" alt="" width="100%">
                                @else
                                <img src="{{asset('img/sinfoto.jpg')}}" alt="" width="100%">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">

                            {!! Form::model($alumnos, ['method' => 'PATCH','route' => ['alumnos.show', $alumnos->id]]) !!}
                            <div class="row">
                                <td>
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Nombres</label>
                                        <br> {{ $alumnos->nombres }} </br> 
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Apellidos</label>
                                        <br> {{ $alumnos->apellidos }} </br> 
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Cedula</label>
                                        <br> {{ $alumnos->cedula }} </br> 
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Telefono</label>
                                        <br> {{ $alumnos->telefono }} </br> 
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Telefono Local</label>
                                        <br> {{ $alumnos->telefono_local }} </br> 
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Dirección</label>
                                        <br> {{ $alumnos->direccion }} </br> 
                                    </div>
                                </div>
                            </td>
                            <td>    
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Correo</label>
                                        <br> {{ $alumnos->correo }} </br> 
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Nivel de Estudio</label>
                                        <br> {{ $alumnos->nivel_de_estudio }} </br> 
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Fecha de Nacimiento</label>
                                        <br> {{ $alumnos->fecha_nac }} </br> 
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Comunidad</label>
                                        <br> {{ $alumnos->comunidad }} </br> 
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Curso</label>
                                       
                                            @foreach ($cursos as $curso)
                                                <br> {{ $curso->curso_id }} </br> 
                                            @endforeach
                                        
                                    </div>
                                </div>
                      
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <label for="metodohasalumno">Pago</label>
                                    <div class="form-group">
                                        
                                       
                
                                    </div>
                                </div>
  
                            </td>
                            <td>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Metodo de Pago</label>
                                        <br> {{ $alumnos->metodo_id }} </br> 
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Fecha del Pago</label>
                                        <br> {{ $alumnos->fecha_pago }} </br> 
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Referencia</label>
                                        <br> {{ $alumnos->numero_referencia }} </br> 
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Patrocinador</label>
                                        <br> {{ $alumnos->patrocinador }} </br> 
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Fecha de Registro</label>
                                        <br> {{ $alumnos->fecha_registro}} </br> 
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Estado</label>
                                        <br> {{ $alumnos->estado_id}} </br> 
                                    </div>
                                </div>
                            </td>
                                <div class="col-xs-12 col-sm-12 col-md-12">
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

