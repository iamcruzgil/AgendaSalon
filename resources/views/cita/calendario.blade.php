@extends('layouts.app')
@section('conten')

<div class="container">
    <div id="cita"></div>
    calendario
</div>

<!-- Modal trigger button -->
<button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalId">
  Launch
</button>

<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div class="modal fade" id="cita" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
            <form action="">

                <div class="mb-3">
                <label for="title" class="form-label">Titulo</label>
                <input type="text"
                    class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Escribe aquí">
                <small id="helpId" class="form-text text-muted">Help text</small>
                </div>

                <div class="mb-3">
                  <label for="" class="form-label">Descripción</label>
                  <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                </div>

                <div class="mb-3">
                <label for="start" class="form-label">Start</label>
                <input type="text"
                    class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="Escribe aquí">
                <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
            
            <div class="mb-3">
              <label for="end" class="form-label">Emd</label>
              <input type="text"
                class="form-control" name="end" id="end" aria-describedby="helpId" placeholder="">
              <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            
            </form>



            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-success" id="btnGuardar">Guardar</button>
                <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button>
                <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                
            </div>
        </div>
    </div>
</div>


<!-- Optional: Place to the bottom of scripts -->
<script>
    const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)

</script>
@endsection