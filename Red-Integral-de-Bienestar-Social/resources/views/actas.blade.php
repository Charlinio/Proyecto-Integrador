@extends('/includes/principal')

@section('contenido')
<div class="col-md-2 controlacta">
  <button type="button" name="button" class="nuevaacta"><i class="fas fa-file-alt fa-5x"></i></button>
  <p>Crear Nueva Acta</p>
  <button type="button" name="button" class="nuevaacta"><i class="fas fa-shield-alt fa-5x"></i></button>
  <p>Permisos</p>
</div>
<div class="col-md-10">
  <div class="row">
    <h3>Actas</h3>
  </div>
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
@endsection
