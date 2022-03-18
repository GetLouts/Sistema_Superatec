@extends('layouts.app')
@section('title')
    Usuarios
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Usuarios</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @can('crear-usuario')
                            <a class="btn btn-success" href="{{ route ('cursos.create')}}">Nuevo Curso</a>
                            @endcan

                            <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef;">
                                    <th style="color: #fff;">ID</th>
                                    <th style="color: #fff;">Nombre</th>
                                    <th style="color: #fff;">Estado</th>
                                </thead>
                                <tbody>
                                    @foreach ($cursos as $curso)
                                    @can('ver-usuario')
                                    <tr>
                                        <td>{{$curso->id}}</td>
                                        <td>{{$curso->cursos}}</td>
                                        <td>
                                            @endcan
                                            @can('editar-usuario')
                                            <a class="btn btn-info" href="{{ route('cursos.edit', $curso->id)}}">Editar</a>
                                            @endcan
                                            
                                            
                                            @can('borrar-usuario')
                                            {!! Form::open(['method'=> 'DELETE', 'route'=> ['cursos.destroy', $curso->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('Borrar',['class'=> 'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                            @endcan
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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

