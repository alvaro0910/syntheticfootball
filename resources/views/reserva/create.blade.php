@extends('layouts.app')

@section('title', 'Crear')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Agregar Nueva Reserva</div>
            <div class="panel-body">
            <p class="lead">Ingrese la Informacion de la Nueva Reserva.</p>
            <hr>
            {!! Form::open(['route' => 'reservas.store']) !!}

            <div class="form-group">
            <label for="cancha" class="control-label">Seleccione la cancha</label>
              <select class="form-control" name="id_Cancha">
                @foreach ($list as $e)
                  <option value="{{ $e->id }}">{{ $e->nombre }}</option>
                @endforeach)
              </select>
            </div>

            <div class="form-group">
              <label for="dia" class="control-label">Fecha</label>
              <input type="date" name="dia" class="form-control">
            </div>

            <div class="form-group">
              <label for="hora" class="control-label">Hora Inicial</label>
              <input type="time" name="hora_Inicial" value="HH:MM:SS" class="form-control" max="22:00:00" min="06:00:00" step="60">
            </div>

            <div class="form-group">
              <label for="hora" class="control-label">Hora Final</label>
              <input type="time" name="hora_Final" value="HH:MM:SS" class="form-control" max="22:00:00" min="06:00:00" step="60">
            </div>

            <div class="form-group">
              <label for="observacion" class="control-label">Observaciones</label>
              {!! Form::textarea('observacion', null, ['class' => 'form-control']) !!}
            </div>

            <table class="table">
              <tr>
                <td>
                  <div class="form-group">
                    {!! Form::submit('Crear Nueva Reserva', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                  </div>
                </td>
                <td>
                  <div class="form-group">
                    <a title="Regresar" href="{{ route('reservas.index') }}" >Regresar <img src="{{ asset('imgs/regresar.png') }}" alt="ver" style="width:25px;"/></a>
                  </div>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script>
  @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
      case 'info':
        toastr.info("{{ Session::get('message') }}");
        break;
      case 'warning':
        toastr.warning("{{ Session::get('message') }}");
        break;
      case 'success':
        toastr.success("{{ Session::get('message') }}");
        break;
      case 'error':
        toastr.error("{{ Session::get('message') }}");
        break;
    }
  @endif
  </script>
@stop
