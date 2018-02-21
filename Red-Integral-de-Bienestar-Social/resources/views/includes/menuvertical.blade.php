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
      <i class="fas fa-home fa-2x"></i>
      <br>Inicio<br>
      <i class="fas fa-ellipsis-h fa-lg"></i>
    </a>
  </div>
  <div class="row">
    <a href="{{ url('/admin/publicar') }}" class="{{ Request::is('admin/publicar') ? 'activo' : '' }}">&nbsp
      <i class="fas fa-share-square fa-2x"></i>
      <br>Publicar<br>
      <i class="fas fa-ellipsis-h fa-lg"></i>
    </a>
  </div>
  <div class="row">
    <a href="{{ url('/admin/actas') }}" class="{{ Request::is('admin/actas') ? 'activo' : '' }}">
      <i class="fas fa-book fa-2x"></i>
      <br>Actas<br>
      <i class="fas fa-ellipsis-h fa-lg"></i>
    </a>
  </div>
  <div class="row">
    <a href="{{ url('/admin/eventos') }}" class="{{ Request::is('admin/eventos') ? 'activo' : '' }}">
      <i class="fas fa-calendar-alt fa-2x"></i>
      <br>Eventos<br>
      <i class="fas fa-ellipsis-h fa-lg"></i>
    </a>
  </div>
  <div class="row">
    <a href="{{ url('/admin/finanzas') }}" class="{{ Request::is('admin/finanzas') ? 'activo' : '' }}">
      <i class="fas fa-dollar-sign fa-2x"></i>
      <br>Finanzas<br>
      <i class="fas fa-ellipsis-h fa-lg"></i>
    </a>
  </div>
  <div class="row">
    <a href="{{ url('/admin/usuarios') }}" class="{{ Request::is('admin/usuarios') ? 'activo' : '' }}">
      <i class="fas fa-user-plus fa-2x"></i>
      <br>Usuarios<br>
      <i class="fas fa-ellipsis-h fa-lg"></i>
    </a>
  </div>
</div>
