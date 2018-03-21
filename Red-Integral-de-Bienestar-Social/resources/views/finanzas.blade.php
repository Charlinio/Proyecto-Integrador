@extends('/includes/principal')
@section('titulo')
Finanzas
@endsection
@section('contenido')
<div class="row titulo">
  <h5><i class="fas fa-dollar-sign"></i> Finanzas</h5>
</div>
<div class="col-md-9" id="ControlesFinanzas">
  <div class="col-md-2 cajacontroles">
    <button id="btnNuevoConcepto" type="button" name="button" class="controles" data-toggle="modal" data-target="#registrarFinanza" data-whatever="@mdo">
      <i class="fas fa-dollar-sign"></i>
    </button>
    <p>Ingreso / Egreso</p>
  </div>
  <div class="col-md-2 cajacontroles">
    <button type="button" name="button" class="controles"><i class="fas fa-chart-bar"></i></button>
    <p>Grafica</p>
  </div>
</div>
<div class="col-md-9" id="ControlesCuotas" hidden>
  <div class="col-md-2 cajacontroles">
    <button id="btnAgregarCuota" type="button" name="button" class="controles" data-toggle="modal" data-target="#registrarCuota" data-whatever="@mdo">
      <i class="fas fa-money-bill-alt"></i>
    </button>
    <p>Agregar Cuota</p>
  </div>
</div>

<div class="col-md-3 cajacontroles">
  <div class="col-md-6">
    <button type="button" name="button" class="controles" id="btnFinanzas"><i class="fas fa-chart-line"></i></button>
    <p>Estado Financiero</p>
  </div>
  <div class="col-md-6">
    <button type="button" name="button" class="controles" id="btnCuotas"><i class="fas fa-table"></i></button>
    <p>Cuotas</p>
  </div>
</div>
<div class="col-md-12">
  <table class="table" id="EstadoFinanciero">
    <thead>
      <tr>
        <td>FECHA</td>
        <td>CONCEPTO</td>
        <td>INGRESO</td>
        <td>EGRESO</td>
        <td>SALDO</td>
      </tr>
    </thead>
    <tbody>
      @forelse($estado as $e)
      <tr>
        <td>{{ $e->fecha }}</td>
        <td>{{ $e->concepto}}</td>
        <td>{{ $e->ingreso }}</td>
        <td>{{ $e->egreso }}</td>
        <td>{{ $e->saldo }}</td>
      </tr>
      @empty
      <p>Sin registros</p>
      @endforelse
    </tbody>
  </table>
  <br>
  <div class="" id="CuotasF" hidden>
    <table class="table">
      <thead>
        <tr>
          <td>Organización</td>
          <td>Año</td>
          <td>Enero</td>
          <td>Febrero</td>
          <td>Marzo</td>
          <td>Abril</td>
          <td>Mayo</td>
          <td>Junio</td>
          <td>Julio</td>
          <td>Agosto</td>
          <td>Septiembre</td>
          <td>Octubre</td>
          <td>Noviembre</td>
          <td>Diciembre</td>
          <td>Adeudo</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Organización</td>
          <td>Año</td>
          <td>Enero</td>
          <td>Febrero</td>
          <td>Marzo</td>
          <td>Abril</td>
          <td>Mayo</td>
          <td>Junio</td>
          <td>Julio</td>
          <td>Agosto</td>
          <td>Septiembre</td>
          <td>Octubre</td>
          <td>Noviembre</td>
          <td>Diciembre</td>
          <td>Adeudo</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<!--Modal para registrar Ingresos / Egresos -->
<div class="modal fade" id="registrarFinanza" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="registrarFinanzaLabel">Ingresos / Egresos</h4>
      </div>
      <div class="modal-body">
        {{ Form::open(array('url' => '/admin/finanzas')) }}
          <div class="form-group row">
            <label for="fecha" class="col-md-3 labeles"><span class="obligatorio">*</span> Fecha: </label>
            <div class="col-md-9">
              <input type="date" name="fecha" value="" class="form-control" id="fecha_sistema">
            </div>
          </div>
          <div class="form-group row">
            <label for="concepto" class="col-md-3 labeles"><span class="obligatorio">*</span> Concepto: </label>
            <div class="col-md-9">
              <input type="text" name="concepto" value="" class="form-control">
            </div>
          </div>
          <br>
          <div class="form-check row">
            <label for="ingreso" class="col-md-3 labeles" style="text-align:right;"><span class="obligatorio">*</span> Ingreso: </label>
            <div class="col-md-1">
              <input type="radio" name="dinero" value="ingresos" class="form-check-input" style="width:25px;height:25px;" checked>
            </div>
            <label for="egreso" class="col-md-3 labeles" style="text-align:right;"><span class="obligatorio">*</span> Egreso: </label>
            <div class="col-md-1">
              <input type="radio" name="dinero" value="egresos" class="form-check-input" style="width:25px;height:25px;">
            </div>
          </div>
          <br>
          <div class="form-group row">
              <label for="cantidad" class="col-md-3 labeles"><span class="obligatorio">*</span> Cantidad: </label>
            <div class="col-md-9">
              <input type="number" name="cantidad" value="" class="form-control">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          {{ Form::submit('Guardar', array('class' => 'btn btn-primary')) }}
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>
        {{ Form::close() }}
    </div>
  </div>
</div>
<!--Modal para registrar Cuotas -->
<div class="modal fade" id="registrarCuota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="registrarCuotaLabel">Ingresos / Egresos</h4>
      </div>
      <div class="modal-body">
        {{ Form::open(array('url' => '/admin/finanzas')) }}
        <div class="form-group row">
          <label for="asociacionE" class="col-md-3 labeles">Asociación:</label>
            <div class="col-md-9">
              <select class="form-control" name="asociacionE" id="asociacionE">
                @forelse($asociaciones as $asociacion)
                  <option value="{{ $asociacion->id_asociacion }}">{{ $asociacion->nombre }}</option>
                @empty
                  <option value=""></option>
                @endforelse
              </select>
            </div>
        </div>
        </div>
        <div class="modal-footer">
          {{ Form::submit('Guardar', array('class' => 'btn btn-primary')) }}
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>
        {{ Form::close() }}
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script>
  //document.getElementById("fecha_sistema").value = today;
  $(document).ready(function(){
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    if(dd<10){
      dd='0'+dd;
    }
    if(mm<10){
      mm='0'+mm;
    }
    var today = yyyy+'-'+mm+'-'+dd;

    $("#btnNuevoConcepto").on('click', function(){
      $('#fecha_sistema').val(today);
    });
    $('#btnFinanzas').on('click', function(){
      $('#EstadoFinanciero').show();
      $('#CuotasF').hide();
      $('#ControlesCuotas').hide();
      $('#ControlesFinanzas').show();
    });
    $('#btnCuotas').on('click', function(){
      $('#EstadoFinanciero').hide();
      $('#CuotasF').show();
      $('#ControlesCuotas').show();
      $('#ControlesFinanzas').hide();
    });
  });
</script>

@endsection
