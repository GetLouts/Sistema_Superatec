@extends('layouts.app')
@section('title')
    Alumnos Inactivos
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Alumnos Inactivos</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                                                        
                            <div class="table-responsive">
                            <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef;">
                                    <th style="color: #fff;">ID</th>
                                    <th style="color: #fff;">Nombres</th>
                                    <th style="color: #fff;">Apellidos</th>
                                    <th style="color: #fff;">Email</th>
                                    <th style="color: #fff;">Cedula</th>
                                    <th style="color: #fff;">Estado</th>
                                    <th style="color: #fff;">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($alumnos as $alumno)
                                    <tr>
                                        @if($alumno->estado_id==2)
                                        <td>{{$alumno->id}}</td>
                                        <td>{{$alumno->nombres}}</td>
                                        <td>{{$alumno->apellidos}}</td>
                                        <td>{{$alumno->correo}}</td>
                                        <td>{{$alumno->cedula}}</td>
                                        
                                        <td> 
                                            @if ($alumno->estado_id==2)
                                            <span class="badge badge-danger">Inactivo</span>
                                             @endif
                                          </td>
                                          
                                        <td>
                                            <a class="btn btn-primary" href="{{ route('alumnosinactivos.show', $alumno->id)}}""><i class="fa fa-eye"></i></a>
                                            @can('editar-alumnos')
                                            <a class="btn btn-info" href="{{ route('alumnosinactivos.edit', $alumno->id)}}"><i class="fa fa-pen"></i></a>
                                            @endcan
                                            
                                            
                                            @can('borrar-alumnos')
                                            {!! Form::open(['method'=> 'DELETE', 'route'=> ['alumnosinactivos.destroy', $alumno->id],'style'=>'display:inline']) !!}
                                                {!! Form::button('<i class="fa fa-trash"></i>',  ['type' => 'submit', 'class'=> 'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                            @endcan
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                            <div class="pagination justify-content-end">
                                {!! $alumnos->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

