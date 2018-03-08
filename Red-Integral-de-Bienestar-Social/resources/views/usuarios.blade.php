@extends('/includes/principal')
@section('titulo')
Usuarios
@endsection
@section('contenido')
<div class="col-md-12 titulo">
  <h5><i class="fas fa-user-plus"></i> Usuarios</h5>
</div>
<div class="col-md-2 controlacta">
  <button type="button" name="button" class="nuevaacta" style="color: #3E8058;" data-toggle="modal" data-target="#registrarUsuario" data-whatever="@mdo"><i class="fas fa-user-plus fa-5x"></i></button>
  <p>Registrar nuevo usuario</p>
  <button type="button" name="button" class="nuevaacta" style="color: #3E8058;"><i class="fas fa-shield-alt fa-5x"></i></button>
  <p>Permisos</p>
</div>
<div class="col-md-10">
  @if($errors->any())
    <div class="alert alert-warning alert-dismissable">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  @if(session()->has('mensaje'))
    <div class="alert alert-success">
      {{ session()->get('mensaje') }}
    </div>
  @endif
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


<!--Modal para registrar Usuario -->
<div class="modal fade" id="registrarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="registrarUsuarioLabel">Registrar Usuario</h4>
      </div>
      <div class="modal-body">
        {{ Form::open(array('url' => '/admin/usuarios', 'files' => true)) }}
        <div class="input-group col-md-12">
          <label for="nombre">Nombre: </label>
          {{ Form::text('nombre', '', array('class' => 'form-control', 'placeholder' => 'Nombre')) }}
        </div>
        <br>
        <div class="input-group col-md-12">
          <label for="correo">Correo Electrónico: </label>
          {{ Form::email('correo', '', array('class' => 'form-control', 'placeholder' => 'Correo')) }}
        </div>
        <br>
        <div class="input-group row">
          <div class="col-md-6">
            <label for="p1">Contraseña: </label>
            {{ Form::password('p1', array('class' => 'form-control', 'placeholder' => 'Contraseña')) }}
          </div>
          <div class="col-md-6">
            <label for="p2">Confirmar Contraseña: </label>
            {{ Form::password('p2', array('class' => 'form-control', 'placeholder' => 'Confirmar Contraseña')) }}
          </div>
        </div>
        <br>
        <div class="input-group col-md-12">
          <label for="nivel">Nivel: </label>
          {{ Form::select('nivel', array('Normal', 'Administrador'), null, array('class' => 'form-control')) }}
        </div>
        <br>
        <div class="input-group col-md-12">
          <label for="imagen">Imagen: </label>
          {{ Form::file('imagen', array('class' => 'form-control')) }}
        </div>
        <br>
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
