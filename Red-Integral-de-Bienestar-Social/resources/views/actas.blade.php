@extends('includes.principal')
@section('titulo')
Actas
@endsection
@section('contenido')
<div class="row titulo">
  <h5><i class="fas fa-book"></i> Actas</h5>
</div>
<div class="col-md-2 controlacta">
  <button type="button" name="button" class="nuevaacta" data-toggle="modal" data-target="#realizarConvocatoria" data-whatever="@mdo"><i class="fas fa-file fa-5x"></i></button>
  <p>Crear Nueva Convocatoria</p>
  <button type="button" name="button" class="nuevaacta" data-toggle="modal" data-target="#registrarActa" data-whatever="@mdo"><i class="fas fa-file-alt fa-5x"></i></button>
  <p>Crear Nueva Acta</p>
</div>
<div class="col-md-10">
  <div class="col-md-3 cajacarpeta">
    <button type="button" name="button" class="carpetas"><i class="fas fa-folder fa-5x"></i></button>
    <p>2014</p>
  </div>
  <div class="col-md-3 cajacarpeta">
    <button type="button" name="button" class="carpetas"><i class="fas fa-folder fa-5x"></i></button>
    <p>2015</p>
  </div>
  <div class="col-md-3 cajacarpeta">
    <button type="button" name="button" class="carpetas"><i class="fas fa-folder fa-5x"></i></button>
    <p>2016</p>
  </div>
  <div class="col-md-3 cajacarpeta">
    <button type="button" name="button" class="carpetas"><i class="fas fa-folder fa-5x"></i></button>
    <p>2017</p>
  </div>
  <div class="col-md-3 cajacarpeta">
    <button type="button" name="button" class="carpetas"><i class="fas fa-folder fa-5x"></i></button>
    <p>2018</p>
  </div>
</div>

<!--Modal de Actas -->
<div class="modal fade" id="registrarActa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="registrarActaLabel">Nueva Acta</h4>
      </div>
      <div class="modal-body">

        {{ Form::open(array('url' => '/admin/eventos', 'files' => true)) }}
        <div class="input-group col-md-12">
          <label for="referencia">Referencia: </label>
          {{ Form::select('referencia', array('', ''), null, array('class' => 'form-control')) }}
        </div>
        <br>
        <br>
        <div class="input-group col-md-12">
          {{ Form::submit('Guardar', array('class' => 'btn btn-primary col-md-12')) }}
        </div>
        <br>
        {{ Form::close() }}
      </div>
    </div>
  </div>
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

@section('scripts')

@endsection
