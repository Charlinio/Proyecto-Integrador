@extends('/includes/principal')
@section('titulo')
Inicio
@endsection
@section('contenido')
  <div class="">
   <li class="listaconvocatoria">
     <a href="#" type="button" data-toggle="modal" data-target="#realizarConvocatoria" data-whatever="@mdo" class="convocatoriona">
       <i class="fas fa-file"></i> Nueva Convocatoria
     </a>
   </li>
  </div>
  <div class="recientes">
    <h4>Actividad Reciente</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
      ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
      nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
      esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
      in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
      ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
      nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
      esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
      in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
  <div class="col-md-5 cuotas">
    <h4>Estado Financiero</h4>
    <img src="../img/cuotas.jpg" alt="" style="width:100%;">
  </div>
  <div class="col-md-5 col-md-offset-1 estadofin">
    <h4>Cuotas</h4>
    <table class="table table-striped">
      <tr><td>lorem</td><td>lorem</td><td>lorem</td><td>lorem</td></tr>
      <tr><td>lorem</td><td>lorem</td><td>lorem</td><td>lorem</td></tr>
      <tr><td>lorem</td><td>lorem</td><td>lorem</td><td>lorem</td></tr>
      <tr><td>lorem</td><td>lorem</td><td>lorem</td><td>lorem</td></tr>
      <tr><td>lorem</td><td>lorem</td><td>lorem</td><td>lorem</td></tr>
      <tr><td>lorem</td><td>lorem</td><td>lorem</td><td>lorem</td></tr>
      <tr><td>lorem</td><td>lorem</td><td>lorem</td><td>lorem</td></tr>
      <tr><td>lorem</td><td>lorem</td><td>lorem</td><td>lorem</td></tr>
      <tr><td>lorem</td><td>lorem</td><td>lorem</td><td>lorem</td></tr>
      <tr><td>lorem</td><td>lorem</td><td>lorem</td><td>lorem</td></tr>
    </table>
  </div>

  <!-- Modal para CONVOCATORIA-->
  <div class="modal fade" id="realizarConvocatoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="exampleModalLabel">Convocatoria</h4>
        </div>
        <div class="modal-body">
          <form class="row">
            <div class="row nuevaconvocatoria">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="recipient-name" class="control-label">Fecha de creación</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="control-label">Referencia</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="message-text" class="control-label">Tipo de Sesión</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="recipient-name" class="control-label">Lugar</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="control-label">Hora</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
              </div>
            </div>
          <br>
          <div class="col-md-12 nuevaconvocatoria">
            <label for="recipient-name" class="control-label">Orden del día</label>
            <div class="form-horizontal row">
              <label for="recipient-name" class="control-label col-md-1">I.</label>
              <div class="col-md-11">
                <input type="text" class="form-control" id="recipient-name" value="Lista de asistencia y verificación de quórum.">
              </div>
            </div>
            <br>
            <div class="form-horizontal row">
              <label for="recipient-name" class="control-label col-md-1">II.</label>
              <div class="col-md-11">
                <input type="text" class="form-control" id="recipient-name" value="Revisión y aprobación del Orden del día.">
              </div>
            </div>
            <br>
            <div class="form-horizontal row">
              <label for="recipient-name" class="control-label col-md-1">III.</label>
              <div class="col-md-11">
                <input type="text" class="form-control" id="recipient-name" value="Revisión y aprobación del Acta anterior.">
              </div>
            </div>
            <br>
            <div class="form-horizontal row">
              <label for="recipient-name" class="control-label col-md-1">IV.</label>
              <div class="col-md-11">
                <input type="text" class="form-control" id="recipient-name" value="Informe Financiero RIBS.">
              </div>
            </div>
            <br>
            <button type="button" class="btn btn-primary">+</button>
            <button type="button" class="btn btn-primary">-</button>
          </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </div>

@endsection
