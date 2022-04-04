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

                            {!! Form::model($cursos, ['method' => 'PATCH', 'route' => ['cursos.show', $cursos->id]]) !!}
                            <div class="row">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th> Codigo del Curso:</th>
                                            <td> {{ $cursos->codigo }} </td>
                                        </tr>
                                        <tr>
                                            <th for="name">Nombre del Curso:</th>
                                            <td> {{ $cursos->cursos }} </td>
                                        </tr>
                                        <tr>
                                            <th for="name">Cantidad de Alumnos:</th>
                                            <td> {{ $cursos->cantidad_alumnos }} </td>
                                        </tr>
                                        <tr>
                                            <th for="name">Clases del Curso:</th>
                                            <td> {{ $cursos->clases }} </td>
                                        </tr>
                                        <tr>
                                            <th for="name">Fecha de Inicio:</th>
                                            <td> {{ $cursos->fecha_inicio }} </td>
                                        </tr>
                                        <tr>
                                            <th for="name">Modalidad:</th>
                                            <td>
                                            <div class="test"> {{ $cursos->modalidad->modalidad }}</div>
                                        </tr>
                                        <tr>
                                            <th for="name">Descripción del Curso:</th>
                                            <td> {{ $cursos->descripcion }} </td>
                                        </tr>
                                        <tr>
                                            <th for="name">Estado:</th>
                                            <td> {{ $cursos->estados->estado }} </td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <br>
                                    <a class="btn btn-primary" href="{{ route('cursos.index') }}">Volver</a>
                                </div>
                            </div>
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
