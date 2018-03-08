<div class="col-md-2 vertical text-center">
  <div class="row">
    <div class="contenedorimagen">
      <img src="../img/perfil3.jpg" alt="">
    </div>
    <h5>¡ Bienvenida !</h5>
    <h5>Ing. Cristina Rodríguez</h5>
  </div>
  <div class="row">
    <a href="{{ url('/admin') }}" class="{{ Request::is('admin') ? 'activo' : '' }}">
      <i class="fas fa-home"></i>
      <br>
      Inicio
    </a>
  </div>
  <div class="row">
    <a href="{{ url('/admin/publicar') }}" class="{{ Request::is('admin/publicar') ? 'activo' : '' }}">
      <i class="fas fa-share-square"></i>
      <br>
      Publicar
    </a>
  </div>
  <div class="row">
    <a href="{{ url('/admin/actas') }}" class="{{ Request::is('admin/actas') ? 'activo' : '' }}">
      <i class="fas fa-book"></i>
      <br>
      Actas
    </a>
  </div>
  <div class="row">
    <a href="{{ url('/admin/eventos') }}" class="{{ Request::is('admin/eventos') ? 'activo' : '' }}">
      <i class="fas fa-calendar-alt"></i>
      <br>
      Eventos
    </a>
  </div>
  <div class="row">
    <a href="{{ url('/admin/finanzas') }}" class="{{ Request::is('admin/finanzas') ? 'activo' : '' }}">
      <i class="fas fa-dollar-sign"></i>
      <br>
      Finanzas
    </a>
  </div>
  <div class="row">
    <a href="{{ url('/admin/asociaciones') }}" class="{{ Request::is('admin/asociaciones') ? 'activo' : '' }}">
      <i class="fas fa-building"></i>
      <br>
      Asociaciones
    </a>
  </div>
  <div class="row">
    <a href="{{ url('/admin/usuarios') }}" class="{{ Request::is('admin/usuarios') ? 'activo' : '' }}">
      <i class="fas fa-user-plus"></i>
      <br>
      Usuarios
    </a>
  </div>
</div>
