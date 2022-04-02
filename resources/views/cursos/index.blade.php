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
                           <!-- <a class="btn btn-success" href="{{ route ('periodo_curso.create')}}">Añadir Cursos a Periodo</a> -->
                            @endcan
                            <div class="table-responsive">
                            <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef;">
                                    
                                    <th style="color: #fff;" class="text-center" class="col-sm-1">Cursos</th>
                                    <th style="color: #fff;" class="text-center" class="col-sm-1">Alumnos</th>
                                    <th style="color: #fff;" class="text-center" class="col-sm-1">Clases</th>
                                    <th style="color: #fff;" class="text-center" class="col-sm-1">Descripción</th>
                                    <th style="color: #fff;" class="text-center" class="col-sm-1">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($cursos as $curso)
                                    @can('ver-usuario')
                                    <tr>
                                        
                                        <td class="text-center">{{$curso->cursos}}</td>
                                        <td class="text-center"> 
                                            @if ($curso->cantidad_alumnos>=1)
                                            <span class="badge badge-success">{{$curso->cantidad_alumnos}}</span>
                                            @else
                                            <span class="badge badge-danger">Agotado</span>
                                            @endif
                                          </td>
                                       
                                        <td class="text-center">{{$curso->clases}}</td>
                                        <td class="text-center">{{$curso->descripcion}}</td>
                                        <td class="text-center">
                                            <a class="btn btn-primary" href="{{ route('alumnos.show', $curso->id)}}""><i class="fa fa-eye"></i></a>
                                            @endcan
                                            @can('editar-usuario')
                                            <a class="btn btn-info" href="{{ route('cursos.edit', $curso->id)}}"><i class="fa fa-pen"></i></a>
                                            @endcan
                                            
                                                <!-- <a class="btn btn-warning" href="{{ route('periodo_curso.create', $curso->id)}}"><i class="fa fa-plus"></i></a> -->
                                                <button class="btn btn-warning agregarAPeriodo" type="button" data-id="{{ $curso->id }}"><i class="fa fa-plus"></i></button>

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
@section('scripts')
<script>
    $('.agregarAPeriodo').on('click', function () {
        let curso_id = $(this).data('id');
        // Ya teniendo el id del curso que se selecciono es cuestion de activar el metodo metiante ajax
        console.log(curso_id);
    });
</script>
@endsection

