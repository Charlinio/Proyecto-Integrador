@extends('/includes/principal')
@section('titulo')
Publicar
@endsection
@section('contenido')
<div class="row titulo">
  <h5><i class="fas fa-share-square"></i> Publicar</h5>
</div>
<div class="col-md-12">
  <div class="col-md-6 col-md-offset-3">
    @forelse($nombreAsociacion as $n)
      <h5 hidden>{{ $n->nombre }}</h5>
    @empty
      <h5>no</h5>
    @endforelse
    <img src="../img/logosolo.png" style="width:50px;height:50px;float:left;margin-right:5px;margin-left:50px;"alt="">
    <p style="text-align:left;line-height:4;">Red Integral de Bienestar Social</p>
    {{ Form::open(array('url' => '/admin/publicar')) }}
    <textarea name="txtpublicar" rows="6" cols="60" placeholder="Publicar" style="padding:5px;"></textarea>
    <br><br>
    <div class="col-md-offset-8">
      <button type="button" name="btnadjuntar">Adjuntar</button>
      <button type="submit" name="btnpublicar">Publicar</button>
    </div>
    {{ Form::close() }}
  </div>
</div>
<div class="col-md-12">
  @forelse($publicaciones as $publicacion)
  <div class="col-md-6 col-md-offset-3 publicacion">
    <img src="../img/logosolo.png" alt="">
    <p class="publico">{{ $n->nombre }} ({{Auth::user()->name}}) publicó:</p>
    <p style="text-align: left;">{{ $publicacion->publicacion }}</p>
  </div>
  @empty
  @endforelse
  <div class="col-md-6 col-md-offset-3 publicacion">
    <img src="../img/logosolo.png" alt="">
    <p class="publico">RIBS publicó:</p>
    <p style="text-align: left;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
      fugiat nulla pariatur. Excepteur sint occaecat cupida.</p>
  </div>
  <div class="col-md-6 col-md-offset-3 publicacion">
    <img src="../img/logos/cefocane.png" alt="">
    <p class="publico">Cefocane publicó:</p>
    <p style="text-align: left;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
      fugiat nulla pariatur. Excepteur sint occaecat cupida.</p>
  </div>
  <div class="col-md-6 col-md-offset-3 publicacion">
    <img src="../img/logos/blaspascal.png" alt="">
    <p class="publico">Instituto Blas Pascal publicó:</p>
    <p style="text-align: left;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
      fugiat nulla pariatur. Excepteur sint occaecat cupida.</p>
  </div>
  <div class="col-md-6 col-md-offset-3 publicacion">
    <img src="../img/logos/cruzroja.png" alt="">
    <p class="publico">Cruz Roja Mexicana publicó:</p>
    <p style="text-align: left;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
      fugiat nulla pariatur. Excepteur sint occaecat cupida.</p>
  </div>
  <div class="col-md-6 col-md-offset-3 publicacion">
    <img src="../img/logos/oneami.png" alt="">
    <p class="publico">Oneami publicó:</p>
    <p style="text-align: left;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
      fugiat nulla pariatur. Excepteur sint occaecat cupida.</p>
  </div>
</div>
@endsection
