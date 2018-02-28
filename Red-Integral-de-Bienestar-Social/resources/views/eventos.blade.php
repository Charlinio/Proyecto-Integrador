@extends('/includes/principal')
@section('titulo')
Eventos
@endsection
@section('contenido')
<div class="col-md-12 titulo">
  <h5><i class="fas fa-calendar-alt"></i> Eventos</h5>
</div>
<div class="col-md-2 controlacta">
  <button type="button" name="button" class="nuevaacta" style="color: #B24F4F;"><i class="fas fa-calendar-alt fa-5x"></i></button>
  <p>Publicar nuevo evento</p>
  <button type="button" name="button" class="nuevaacta" style="color: #B24F4F;"><i class="fas fa-shield-alt fa-5x"></i></button>
  <p>Permisos</p>
</div>
<div class="col-md-10">
  <div class="col-md-3 cajaeventos">
    <button type="button" name="button" class="eventos">
      <div class="verevento"><p>Abrir</p></div>
      <img src="../img/evento1.jpg" alt="">
    </button>
    <p>Titulo del Evento</p>
    <button type="button" name="button" class="botones">Modificar</button>
    <button type="button" name="button" class="botoneliminar"><i class="fas fa-times"></i></button>
  </div>
  <div class="col-md-3 cajaeventos">
    <button type="button" name="button" class="eventos">
      <div class="verevento"><p>Abrir</p></div>
      <img src="../img/evento2.jpg" alt="">
    </button>
    <p>Titulo del Evento</p>
    <button type="button" name="button" class="botones">Modificar</button>
    <button type="button" name="button" class="botoneliminar"><i class="fas fa-times"></i></button>
  </div>
  <div class="col-md-3 cajaeventos">
    <button type="button" name="button" class="eventos">
      <div class="verevento"><p>Abrir</p></div>
      <img src="../img/evento3.jpg" alt="">
    </button>
    <p>Titulo del Evento</p>
    <button type="button" name="button" class="botones">Modificar</button>
    <button type="button" name="button" class="botoneliminar"><i class="fas fa-times"></i></button>
  </div>
  <div class="col-md-3 cajaeventos">
    <button type="button" name="button" class="eventos">
      <div class="verevento"><p>Abrir</p></div>
      <img src="../img/evento4.jpg" alt="">
    </button>
    <p>Titulo del Evento</p>
    <button type="button" name="button" class="botones">Modificar</button>
    <button type="button" name="button" class="botoneliminar"><i class="fas fa-times"></i></button>
  </div>
  <div class="col-md-3 cajaeventos">
    <button type="button" name="button" class="eventos">
      <div class="verevento"><p>Abrir</p></div>
      <img src="../img/evento5.jpg" alt="">
    </button>
    <p>Titulo del Evento</p>
    <button type="button" name="button" class="botones">Modificar</button>
    <button type="button" name="button" class="botoneliminar"><i class="fas fa-times"></i></button>
  </div>
  <div class="col-md-3 cajaeventos">
    <button type="button" name="button" class="eventos">
      <div class="verevento"><p>Abrir</p></div>
      <img src="../img/evento6.jpg" alt="">
    </button>
    <p>Titulo del Evento</p>
    <button type="button" name="button" class="botones">Modificar</button>
    <button type="button" name="button" class="botoneliminar"><i class="fas fa-times"></i></button>
  </div>

</div>
@endsection
