@extends('/includes/principal')
@section('titulo')
Finanzas
@endsection
@section('contenido')
<div class="col-md-12 titulo">
  <h5><i class="fas fa-dollar-sign"></i> Finanzas</h5>
</div>
<div class="col-md-2 controlacta">
  <button type="button" name="button" class="nuevaacta" style="color: #3E8058;"><i class="fas fa-chart-line fa-5x"></i></button>
  <p>Estado Financiero</p>
  <button type="button" name="button" class="nuevaacta" style="color: #3E8058;"><i class="fas fa-table fa-5x"></i></button>
  <p>Cuotas</p>
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
@endsection

@section('scripts')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script defer src="../js/fontawesome-all.min.js"></script>
@endsection
