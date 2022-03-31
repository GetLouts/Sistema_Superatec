@extends('layouts.app')
@section('title')
    Alumnos
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Alumnos</h3>
        </div>
        <div class="section-body">
            <div class="row">
                
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-xl-12">
                                <form action="{{route('alumnos.index')}}" method="get">
                                        <div class="form-row">
                                            <div>
                                                <a class="btn btn-success"  href="{{ route('alumnos.create') }}">Nuevo Alumno</a>
                                            </div>
                                            <div class="col-xs-4">
                                                <input type="text" class="form-control" name="texto" value="{{$texto}}">
                                            </div>
                                            <div class="col-auto">
                                                <input type="submit" class="btn btn-primary" value="Buscar">
                                            </div>
                                        </div>
                                </form>
                            </div>
                           
                            <div class="table-responsive">
                                <table class="table table-striped mt-2">
                                    <thead style="background-color: #6777ef;">
                                        <th style="color: #fff;" class="text-center" class="col-lg-2">Nombres</th>
                                        <th style="color: #fff;" class="text-center" class="col-lg-2">Apellidos
                                        </th>
                                        <th style="color: #fff;" class="text-center" class="col-lg-2">Email</th>
                                        <th style="color: #fff;" class="text-center" class="col-lg-2">Cedula</th>
                                        <th style="color: #fff;" class="text-center" class="col-lg-2">Estado</th>
                                        <th style="color: #fff;" class="text-center" class="col-lg-2">Acciones</th>

                                    </thead>
                                    <tbody>
                                        @if(count($alumnos)<=0)
                                            <tr>
                                                <td class="badge-danger"></td>
                                                <td class="badge-danger"></td>
                                                <td class="badge-danger"></td>
                                                <td class="badge-danger" class="text-center">No hay registro</td>
                                                <td class="badge-danger"></td>
                                                <td class="badge-danger"></td>
                                                
                                               
                                            </tr>
                                        @endif
                                        @foreach ($alumnos as $alumno)
                                            <tr>
                                                @if ($alumno->estado_id == 1)
                                                    <td class="text-center">{{ $alumno->nombres }}</td>
                                                    <td class="text-center">{{ $alumno->apellidos }}</td>
                                                    <td class="text-center">{{ $alumno->correo }}</td>
                                                    <td class="text-center">{{ $alumno->cedula }}</td>

                                                    <td class="text-center">
                                                        @if ($alumno->estado_id == 1)
                                                            <span class="badge badge-success">Activo</span>
                                                        @else
                                                            <span class="badge badge-danger">Inactivo</span>
                                                        @endif
                                                    </td>

                                                    <td class="text-center">
                                                        <a class="btn btn-primary"
                                                            href="{{ route('alumnos.show', $alumno->id) }}""><i class="
                                                            fa fa-eye"></i></a>
                                                    
                                                    
                                                        @can('editar-alumnos')
                                                            <a class="btn btn-info"
                                                                href="{{ route('alumnos.edit', $alumno->id) }}"><i
                                                                    class="fa fa-pen"></i></a>
                                                        @endcan
                                                    
                                                   
                                                        @can('borrar-alumnos')
                                                            {!! Form::open(['method' => 'DELETE', 'route' => ['alumnos.destroy', $alumno->id], 'style' => 'display:inline']) !!}
                                                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger']) !!}
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
<!--
<script>
    (function (){ 
        'use strict'

        var forms = document.querySelectorAll('.formEliminar')
        array.prototype.slice.call(forms)
            .forEach(function(form){
                form.addEventListener('submit', function (event){
                    event.proventDefault()
                    event.stopPropagation()
                    Swal.fire({
                        title: 'Confirma la eliminacion del registro?',
                        icon: 'info',
                        showCancelButton: true,
                        confirmButtonColor: '#20c997',
                        cancelButtonColor: '#6c757d',
                        confirmButtonText: 'Confirmar',
                    }).then((result)=>{
                        if(result.isConfirmed) {
                            this.submit();
                            Swal.fire('!Eliminado!', 'El registro ha sido eliminado exitosamente', 'success');
                        }
                    })
                }, false)
            })
    })()
</script>
-->