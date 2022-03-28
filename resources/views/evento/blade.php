@extends('layouts.app')
@section('title')
Cronograma
@endsection
@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Cronograma</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

                        <div id='calendar'></div>


                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

</section>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#evento">
    Launch
</button>

<!-- Modal -->
<div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form id="formulario" method="">

                    {!! csrf_field() !!}
                    {{-- @method('PUT') --}}


                    <div class="form-group">
                        <label for="title">Curso</label>
                        <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Nombre del Curso" required>
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>

                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <textarea class="form-control" name="descripcion" id="descripcion" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="start">Empieza</label>
                        <input type="date" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="" required>
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>

                    <div class="form-group">
                        <label for="end">Termina</label>
                        <input type="date" name="end" id="end" class="form-control" placeholder="" aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted">Help text</small>
                    </div>

                </form>



            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-success" id="btnGuardar">Guardar</button>
                <button type="button" class="btn btn-primary" id="btnModificar">Modificar</button>
                <button type="button" class="btn btn-warning" id="btnEliminar">Eliminar</button>
                <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/agenda.js') }}"></script>

@endsection