@extends('includes.principal')
@section('titulo')
Actas
@endsection

<!-- Nombre e Imagen de la Asociacion que inició sesión -->
@section('asoname')
  @forelse($nombreAsociacion as $nam)
    {{ $nam->nombre }}
  @empty
    Sin Asociación
  @endforelse
@endsection
@section('imagenaso')
  @forelse($nombreAsociacion as $im)
    <img src="../img/logo_asociacion/{{ $im->logo }}" alt="">
  @empty
    Sin Logo
  @endforelse
@endsection

@section('contenido')
<div class="row titulo">
  <h5><i class="fas fa-book"></i> Actas</h5>
</div>
<div class="col-md-3 cajacontroles">
  <div class="col-md-6">
    <button type="button" name="button" class="controles" data-toggle="modal" data-target="#realizarConvocatoria" data-whatever="@mdo" id="btnrealizarconvocatoria">
      <i class="fas fa-file"></i>
    </button>
    <p>Nueva Convocatoria</p>
  </div>
  <div class="col-md-6">
    <button type="button" name="button" class="controles" data-toggle="modal" data-target="#registrarActa" data-whatever="@mdo">
      <i class="fas fa-file-alt"></i>
    </button>
    <p>Nueva Acta</p>
  </div>
</div>
<div class="col-md-9">
  @if($errors->any())
    <div class="alert alert-danger alert-dismissable">
      <ul>
        <li>Error al agregar Usuario</li>
      </ul>
    </div>
    <div class="alert alert-warning alert-dismissable">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  @if(session()->has('mensaje'))
    <div class="alert alert-info">
      {{ session()->get('mensaje') }}
    </div>
  @endif
  @if(session()->has('duplicado'))
    <div class="alert alert-danger">
      {{ session()->get('duplicado') }}
    </div>
  @endif
</div>
<div class="col-md-12">
  <div class="col-md-10">
    <p><b>Actas</b></p>
    <div class="col-md-2">
      <button type="button" name="button" class="eliminarconvocatoria"><i class="fas fa-times"></i></button>
      <button type="button" name="button" class="nuevaacta"><i class="fas fa-file-alt fa-5x"></i></button>
      <p>Enero</p>
      <div class="col-md-6">
        <button type="button" name="button" class="nuevaacta word"></button>
      </div>
      <div class="col-md-6">
        <button type="button" name="button" class="nuevaacta pdf"></button>
      </div>
    </div>
    <div class="col-md-12">
      <select class="" name="actaAnio" style="width:200px;height:30px;">
        <option value="1">2018</option>
      </select>
    </div>
  </div>
  <div class="col-md-2">
    <p><b>Convocatorias</b></p>
    <div class="col-md-12">
      @forelse($convocatoriaspendientes as $c)
      <div class="col-md-12">
        <button type="button" name="button" class="eliminarconvocatoria"><i class="fas fa-times"></i></button>
        <button type="button" name="button" class="nuevaacta btnVerConvocatoria" style="color:#6FBB7A;"
        data-toggle="modal"
        data-target="#editarConvocatoria"
        data-whatever="@mdo"
        data-ref="{{ $c->ref }}"
        data-fechac="{{ $c->fecha_creacion }}"
        data-sesion="{{ $c->sesion }}"
        data-ciudad="{{ $c->ciudad }}"
        data-lugar="{{ $c->lugar }}"
        data-hora="{{ $c->hora }}">
          <i class="fas fa-file fa-5x"></i>
        </button>
        <p class="MesConvocatoria" data-mes="{{ $c->ref }}">{{ $c->ref }}</p>
      </div>
      @empty
      @endforelse
    </div>
  </div>
</div>

<!--Modal de Actas -->
<div class="modal fade" id="registrarActa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="registrarActaLabel">Nueva Acta</h4>
      </div>
      <div class="modal-body">

        {{ Form::open(array('url' => '/admin/eventos', 'files' => true)) }}
        <div class="input-group col-md-12">
          <label for="referencia">Referencia: </label>
          {{ Form::select('referencia', array('', ''), null, array('class' => 'form-control')) }}
        </div>
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
<!-- Modal para Convocatoria-->
<div class="modal fade" id="realizarConvocatoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Convocatoria</h4>
      </div>
      <div class="modal-body">
        {{ Form::open(array('url' => '/admin/actas')) }}
          <div class="row nuevaconvocatoria">
            <div class="col-md-6">
              <div class="form-group">
                <label for="fecha_creacion" class="control-label">Fecha de creación</label>
                <input type="date" class="form-control" id="fecha_creacion" name="fecha_creacion" value="">
              </div>
              <div class="form-group">
                <label for="ref" class="control-label">Referencia</label>
                <input type="date" class="form-control" id="ref" name="ref" value="">
              </div>
              <div class="form-group">
                <label for="sesion" class="">Tipo de Sesión</label>
                <select class="form-control" name="sesion">
                  <option value="ORDINARIA">ORDINARIA</option>
                  <option value="EXTRAORDINARIA">EXTRAORDINARIA</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="ciudad" class="control-label">Ciudad</label>
                <input type="text" class="form-control" id="ciudad" name="ciudad" value="Nuevo Casas Grandes">
              </div>
              <div class="form-group">
                <label for="lugar" class="control-label">Lugar</label>
                <input type="text" class="form-control" id="lugar" name="lugar" value="Sala de Juntas FECHAC">
              </div>
              <div class="form-group">
                <label for="hora" class="control-label">Hora</label>
                <input type="time" class="form-control" id="hora" name="hora" value="04:04">
              </div>
            </div>
          </div>
        <br>
        <div class="form-group" id="cajaOrden">
          <label for="recipient-name" class="control-label">Orden del día</label>
          <div class="form-group row" id="orden1">
            <label for="recipient-name" class="control-label col-md-1">1.</label>
            <div class="col-md-11">
              <input type="text" class="form-control" value="Lista de asistencia y verificación de quórum." name="orden1">
            </div>
          </div>
          <div class="form-group row" id="orden2">
            <label for="recipient-name" class="control-label col-md-1">2.</label>
            <div class="col-md-11">
              <input type="text" class="form-control" value="Revisión y aprobación del Orden del día." name="orden2">
            </div>
          </div>
          <div class="form-group row" id="orden3">
            <label for="recipient-name" class="control-label col-md-1">3.</label>
            <div class="col-md-11">
              <input type="text" class="form-control" value="Revisión y aprobación del Acta anterior." name="orden3">
            </div>
          </div>
          <div class="form-group row" id="orden4">
            <label for="recipient-name" class="control-label col-md-1">4.</label>
            <div class="col-md-11">
              <input type="text" class="form-control" value="Informe Financiero RIBS." name="orden4">
            </div>
          </div>
        </div>
        <button type="button" class="btn btn-primary" id="btnmas">+</button>
        <button type="button" class="btn btn-primary" id="btnmenos">-</button>
        <input type="hidden" name="numerodeordenes" value="4" id="numerodeordenes">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
      {{ Form::close() }}
    </div>
  </div>
</div>
<!-- Modal para Editar Convocatoria-->
<div class="modal fade" id="editarConvocatoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Convocatoria</h4>
      </div>
      <div class="modal-body">
        {!! Form::open(array('route'=>['admin.actas.edit', ''], 'method'=>'GET')) !!}
          <div class="row nuevaconvocatoria">
            <div class="col-md-6">
              <div class="form-group">
                <label for="fecha_creacion" class="control-label">Fecha de creación</label>
                <input type="date" class="form-control" id="fecha_creacionE" name="fecha_creacionE" value="">
              </div>
              <div class="form-group">
                <label for="ref" class="control-label">Referencia</label>
                <input type="date" class="form-control" id="refE" name="refE" value="">
              </div>
              <div class="form-group">
                <label for="sesion" class="">Tipo de Sesión</label>
                <select class="form-control" name="sesionE" id="sesionE">
                  <option value="ORDINARIA">ORDINARIA</option>
                  <option value="EXTRAORDINARIA">EXTRAORDINARIA</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="ciudad" class="control-label">Ciudad</label>
                <input type="text" class="form-control" id="ciudadE" name="ciudadE" value="Nuevo Casas Grandes">
              </div>
              <div class="form-group">
                <label for="lugar" class="control-label">Lugar</label>
                <input type="text" class="form-control" id="lugarE" name="lugarE" value="Sala de Juntas FECHAC">
              </div>
              <div class="form-group">
                <label for="hora" class="control-label">Hora</label>
                <input type="time" class="form-control" id="horaE" name="horaE" value="04:04">
              </div>
            </div>
          </div>
        <br>
        <div class="form-group" id="cajaOrden">
          <label for="recipient-name" class="control-label">Orden del día</label>
          @foreach($ordendia as $o)
            @if($o->ref != request())
              <div class="form-group row" id="orden1E">
                <label for="recipient-name" class="control-label col-md-1">{{ $o->numeroOrden }}.</label>
                <div class="col-md-11">
                  <input type="text" class="form-control" value="{{ app('request')->input('refE') }}" name="orden1E">
                </div>
              </div>
            @endif
          @endforeach
        </div>
        <button type="button" class="btn btn-primary" id="btnmas">+</button>
        <button type="button" class="btn btn-primary" id="btnmenos">-</button>
        <input type="hidden" name="numerodeordenes" value="4" id="numerodeordenes">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection

@section('scripts')
  <script>
    $(document).ready(function(){
      var numOrden = 4;
      var ordenDia = "";
      $('#btnmas').on('click', function(){
        numOrden++;
        ordenDia += "<div class='form-group row' id='orden"+numOrden+"'>";
        ordenDia += "<label for='recipient-name' class='control-label col-md-1'>"+numOrden+". </label>";
        ordenDia += "<div class='col-md-11'>";
        ordenDia += "<input type='text' class='form-control' id='recipient-name' value='' name='orden"+numOrden+"'>";
        ordenDia += "</div>";
        ordenDia += "</div>";
        $('#cajaOrden').append(ordenDia);
        $('#numerodeordenes').val(numOrden);
        ordenDia = "";
      });

      $('#btnmenos').on('click', function(){
        $("#orden"+numOrden).remove();
        numOrden--;
        $('#numerodeordenes').val(numOrden);
        if (numOrden<0) {
          numOrden = 0;
        }
      });
      $('.MesConvocatoria').each(function(){
        var Convocatoria = $(this).data('mes');
        var mes = Convocatoria.substring(5,7);
        var dd = Convocatoria.substring(8,10);
        var yyyy = Convocatoria.substring(0,4);

        var mm = parseInt(mes);
        var months = [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
        "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ];
        $(this).text(dd + " de " + months[mm-1] + " de " + yyyy);
      });

      $('#btnrealizarconvocatoria').on('click', function(){
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1; //January is 0!
        var yyyy = today.getFullYear();
        var hora = today.getHours();
        var minutos = today.getMinutes();

        if(dd<10){
          dd='0'+dd;
        }
        if(mm<10){
          mm='0'+mm;
        }
        if(hora<10){
          hora='0'+hora;
        }
        if(minutos<10){
          minutos='0'+minutos;
        }
        var time = hora + ":" + minutos;
        var dia = yyyy+'-'+mm+'-'+dd;
        $('#fecha_creacion').val(dia);
        $('#ref').val(dia);
        $('#hora').val(time);

      });

      $('.btnVerConvocatoria').on('click', function(){
        var ref = $(this).data('ref');
        var fechac = $(this).data('fechac');
        var sesion = $(this).data('sesion');
        var ciudad = $(this).data('ciudad');
        var lugar = $(this).data('lugar');
        var hora = $(this).data('hora');

        $('#refE').val(ref);
        $('#fecha_creacionE').val(fechac);
        $('#sesionE').val(sesion);
        $('#ciudadE').val(ciudad);
        $('#lugarE').val(lugar);
        $('#horaE').val(hora);
      });
    });
  </script>
@endsection
