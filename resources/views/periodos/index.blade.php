@extends('layouts.app')
@section('title')
    Periodos
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Periodos</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @can('crear-periodo')
                            <a class="btn btn-success" href="{{ route ('periodos.create')}}">Nuevo Periodo</a>
                            @endcan
                            <div class="table-responsive">
                            <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef;">
                                    <th style="color: #fff;" class="text-center">ID</th>
                                    <th style="color: #fff;" class="text-center">Nombre</th>
                                    <th style="color: #fff;" class="text-center">Estado</th>
                                    <th style="color: #fff;" class="text-center">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($periodos as $periodo)
                                   @can('ver-periodo')
                                    <tr>
                                        <td class="text-center">{{$periodo->id}}</td>
                                        <td class="text-center">{{$periodo->nombre_periodo}}</td>
                                        <td class="text-center"> @if ($periodo->estado_id==1)
                                            <span class="badge badge-success">Activo</span>
                                            @else
                                            <span class="badge badge-danger">Inactivo</span>
                                            @endif</td>
                                        <td class="text-center">
                                    @endcan
                                            @can('editar-periodo')
                                            <a class="btn btn-info" href="{{ route('periodos.edit', $periodo->id)}}"><i class="fa fa-pen"></i></a>
                                            @endcan
                                            
                                            
                                            @can('borrar-periodo')
                                            {!! Form::open(['method'=> 'DELETE', 'route'=> ['periodos.destroy', $periodo->id],'style'=>'display:inline']) !!}
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
                                {!! $periodos->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

