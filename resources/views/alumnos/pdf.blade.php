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
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">

                            {!! Form::model($alumnos, ['method' => 'PATCH', 'route' => ['alumnos.show', $alumnos->id]]) !!}
                            <div class="row">

                                <table>

                                    <tbody>

                                        <tr>
                                            <th> Nombres : </th>
                                            <td>{{ $alumnos->nombres }}</td>
                                        </tr>

                                        <tr>
                                            <th> Apellidos : </th>
                                            <td>{{ $alumnos->apellidos }}</td>
                                        </tr>

                                        <tr>
                                            <th> Cedula : </th>
                                            <td>{{ $alumnos->cedula }}</td>
                                        </tr>
                                        <tr>
                                            <th> Telefono : </th>
                                            <td>{{ $alumnos->telefono }}</td>
                                        </tr>
                                        <tr>
                                            <th> Telefono Local : </th>
                                            <td>{{ $alumnos->telefono_local }}</td>
                                        </tr>
                                        <tr>
                                            <th> Dirección : </th>
                                            <td>{{ $alumnos->direccion }}</td>
                                        </tr>
                                        <tr>
                                            <th> Correo : </th>
                                            <td>{{ $alumnos->correo }}</td>
                                        </tr>
                                        <tr>
                                            <th> Nivel de Estudio : </th>
                                            <td>{{ $alumnos->nivel_de_estudio }}</td>
                                        </tr>
                                        <tr>
                                            <th> Fecha de Nacimiento : </th>
                                            <td>{{ $alumnos->fecha_nac }}</td>
                                        </tr>
                                        <tr>
                                            <th> Comunidad : </th>
                                            <td>{{ $alumnos->comunidad }}</td>
                                        </tr>
                                        <tr>
                                            <th> Curso : </th>
                                            @foreach ($alumnoshasperiodos as $alumnoshasperiodo)
                                                <td>
                                                    <div class="test"> {{ $alumnoshasperiodo->alumno_id }}</div>
                                                </td>
                                            @endforeach

                                        </tr>
                                        <tr>
                                            <th> Pago : </th>
                                            @foreach ($metodohasalumnos as $metodohasalumno)
                                                <td>{{ $metodohasalumno->pago }}</td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <th> Metodo de Pago : </th>
                                            @foreach ($metodohasalumnos as $metodohasalumno)
                                                <td>
                                                    <div>{{ $metodohasalumno->alumno_id }}</div>
                                                </td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <th> Fecha del Pago : </th>
                                            @foreach ($metodohasalumnos as $metodohasalumno)
                                                <td>{{ $metodohasalumno->fecha_pago }}</td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <th> Referencia : </th>
                                            <td>{{ $alumnos->numero_referencia }}</td>
                                        </tr>
                                        <tr>
                                            <th> Patrocinador : </th>
                                            <td>{{ $alumnos->patrocinador }}</td>
                                        </tr>
                                        <tr>
                                            <th> Fecha de Registro : </th>
                                            <td>{{ $alumnos->fecha_registro }}</td>
                                        </tr>
                                        <tr>
                                            <th> Estado : </th>
                                            <td>{{ $alumnos->estados->estado }}</td>
                                        </tr>

                                    </tbody>

                                </table>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection