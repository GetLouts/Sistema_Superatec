@extends('layouts.app')
@section('title')
    Cursos
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Cursos</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @can('crear-usuario')
                            <a class="btn btn-success" href="{{ route ('cursos.create')}}">Nuevo Curso</a>
                            @endcan
                            <div class="table-responsive">
                            <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef;">
                                    
                                    <th style="color: #fff;">Cursos</th>
                                    <th style="color: #fff;">Alumnos</th>
                                    <th style="color: #fff;">Clases</th>
                                    <th style="color: #fff;">Descripción</th>
                                    <th style="color: #fff;">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($cursos as $curso)
                                    @can('ver-usuario')
                                    <tr>
                                        
                                        <td>{{$curso->cursos}}</td>
                                        <td> 
                                            @if ($curso->cantidad_alumnos>=1)
                                            <span class="badge badge-success">{{$curso->cantidad_alumnos}}</span>
                                            @else
                                            <span class="badge badge-danger">Sin Espacio</span>
                                            @endif
                                          </td>
                                       
                                        <td>{{$curso->clases}}</td>
                                        <td>{{$curso->descripcion}}</td>
                                        <td>
                                            <a class="btn btn-primary" href="{{ route('cursos.show', $curso->id)}}""><i class="fa fa-eye"></i></a>
                                            @endcan
                                            @can('editar-usuario')
                                            <a class="btn btn-info" href="{{ route('cursos.edit', $curso->id)}}"><i class="fa fa-pen"></i></a>
                                            @endcan
                                            
                                            
                                            @can('borrar-usuario')
                                            {!! Form::open(['method'=> 'DELETE', 'route'=> ['cursos.destroy', $curso->id],'style'=>'display:inline']) !!}
                                                {!! Form::button('<i class="fa fa-trash"></i>',  ['type' => 'submit', 'class'=> 'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                            @endcan
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                            <div class="pagination justify-content-end">
                                {!! $cursos->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

