@extends('/includes/principal')
@section('titulo')
Publicar
@endsection
@section('contenido')
<div class="col-md-12 titulo">
  <h5><i class="fas fa-share-square"></i> Publicar</h5>
</div>
<div class="col-md-12">
  <div class="col-md-6 col-md-offset-3">
    <img src="../img/logosolo.png" style="width:50px;height:50px;float:left;margin-right:5px;margin-left:50px;"alt="">
    <p style="text-align:left;line-height:4;">Red Integral de Bienestar Social</p>
    <textarea name="name" rows="6" cols="60" placeholder="Publicar" style="padding:5px;"></textarea>
    <br><br>
    <div class="col-md-offset-8">
      <button type="button" name="button">Adjuntar</button>
      <button type="button" name="button">Publicar</button>
    </div>
  </div>
</div>
<div class="col-md-12">
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

@section('scripts')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script defer src="../js/fontawesome-all.min.js"></script>
@endsection
