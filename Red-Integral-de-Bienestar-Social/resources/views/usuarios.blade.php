@extends('/includes/principal')
@section('titulo')
Usuarios
@endsection
@section('contenido')
<div class="col-md-12 titulo">
  <h5><i class="fas fa-user-plus"></i> Usuarios</h5>
</div>
<div class="col-md-2 controlacta">
  <button type="button" name="button" class="nuevaacta" style="color: #3E8058;"><i class="fas fa-user-plus fa-5x"></i></button>
  <p>Registrar nuevo usuario</p>
  <button type="button" name="button" class="nuevaacta" style="color: #3E8058;"><i class="fas fa-shield-alt fa-5x"></i></button>
  <p>Permisos</p>
</div>
<div class="col-md-10">
  <div class="col-md-3 cajausuarios">
    <button type="button" name="button" class="carpetas" style="color: #878787"><i class="fas fa-user fa-5x"></i></button>
    <p class="pt">Juan Pablo</p>
  </div>
  <div class="col-md-3 cajausuarios">
    <button type="button" name="button" class="carpetas" style="color: #878787"><i class="fas fa-user fa-5x"></i></button>
    <p class="pt">Pedro Ramon</p>
  </div>
  <div class="col-md-3 cajausuarios">
    <button type="button" name="button" class="carpetas" style="color: #878787"><i class="fas fa-user fa-5x"></i></button>
    <p class="pt">Gloria Martina</p>
  </div>
  <div class="col-md-3 cajausuarios">
    <button type="button" name="button" class="carpetas" style="color: #878787"><i class="fas fa-user fa-5x"></i></button>
    <p class="pt">Jose Diego</p>
  </div>
  <div class="col-md-3 cajausuarios">
    <button type="button" name="button" class="carpetas" style="color: #878787"><i class="fas fa-user fa-5x"></i></button>
    <p class="pt">Diana Laura</p>
  </div>
</div>
@endsection
