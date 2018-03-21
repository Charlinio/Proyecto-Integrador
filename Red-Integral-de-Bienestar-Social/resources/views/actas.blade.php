@extends('includes.principal')
@section('titulo')
Actas
@endsection
@section('contenido')
<div class="col-md-12 titulo">
  <h5><i class="fas fa-book"></i> Actas</h5>
</div>
<div class="col-md-2 controlacta">
  <button type="button" name="button" class="nuevaacta" data-toggle="modal" data-target="#registrarActa" data-whatever="@mdo"><i class="fas fa-file-alt fa-5x"></i></button>
  <p>Crear Nueva Acta</p>
  <button type="button" name="button" class="nuevaacta"><i class="fas fa-shield-alt fa-5x"></i></button>
  <p>Permisos</p>
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
@endsection

@section('scripts')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script defer src="../js/fontawesome-all.min.js"></script>
@endsection
