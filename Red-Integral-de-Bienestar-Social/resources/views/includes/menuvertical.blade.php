<div class="col-md-2 vertical text-center">
  <div class="row">
    <div class="contenedorimagen">
      <img src="../img/perfil3.jpg" alt="">
    </div>
    <h5>¡ Bienvenida !</h5>
    <h5>Ing. Cristina Rodríguez</h5>
  </div>
  <div class="row">
    <i class="fas fa-home"></i>
    <a href="{{ url('/admin') }}" class="{{ Request::is('admin') ? 'activo' : '' }}">
      Inicio
    </a>
  </div>
  <div class="row">
    <i class="fas fa-share-square"></i>
    <a href="{{ url('/admin/publicar') }}" class="{{ Request::is('admin/publicar') ? 'activo' : '' }}">
      Publicar
    </a>
  </div>
  <div class="row">
    <i class="fas fa-book"></i>
    <a href="{{ url('/admin/actas') }}" class="{{ Request::is('admin/actas') ? 'activo' : '' }}">
      Actas
    </a>
  </div>
  <div class="row">
    <i class="fas fa-calendar-alt"></i>
    <a href="{{ url('/admin/eventos') }}" class="{{ Request::is('admin/eventos') ? 'activo' : '' }}">
      Eventos
    </a>
  </div>
  <div class="row">
    <i class="fas fa-dollar-sign"></i>
    <a href="{{ url('/admin/finanzas') }}" class="{{ Request::is('admin/finanzas') ? 'activo' : '' }}">
      Finanzas
    </a>
  </div>
  <div class="row">
    <i class="fas fa-user-plus"></i>
    <a href="{{ url('/admin/usuarios') }}" class="{{ Request::is('admin/usuarios') ? 'activo' : '' }}">
      Usuarios
    </a>
  </div>
</div>
