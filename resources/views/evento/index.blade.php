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
                            
                            <div class="container">
                                
                                <div id="agenda">
                                
                                </div>
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
                      

                    <form action="">

                    {!! csrf_field() !!}
                        
                        <div class="form-group">
                          <label for="id">ID</label>
                          <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
                          <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>

                    <div class="form-group">
                        <label for="title">Curso</label>
                        <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Nombre del Curso">
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>

                    <div class="form-group">
                      <label for="descripcion">Descripcion</label>
                      <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="start">Empieza</label>
                      <input type="date" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>

                    <div class="form-group">
                      <label for="end">Termina</label>
                      <input type="date" name="end" id="end" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">Help text</small>
                    </div>

                    </form>



                  </div>
                  <div class="modal-footer">

                    <button type="button" class="btn btn-success" id="btnGuardar">Guardar</button>
                    <button type="button" class="btn btn-primary"id="btnModificar">Modificar</button>
                    <button type="button" class="btn btn-warning"id="btnEliminar">Eliminar</button>
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>

                  </div>
              </div>
          </div>
      </div>
@endsection