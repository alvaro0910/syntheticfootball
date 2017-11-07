@extends('layouts.app')

@section('title', 'Editar')

@section('content')
<br><br><br>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Editar Reserva</div>
            <div class="panel-body">
            <p class="lead">Edite la Informacion de la Reserva.</p>
            <hr>
            {!! Form::model($data, [
                'method' => 'PUT',
                'route' => ['reservas.update', $data->id]
            ]) !!}

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
              {!! Form::date('dia', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
              <label for="hora" class="control-label">Hora Inicial</label>
              {!! Form::time('hora_Inicial', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
              <label for="hora" class="control-label">Hora Final</label>
              {!! Form::time('hora_Final', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
              <label for="observacion" class="control-label">Observaciones</label>
              {!! Form::textarea('observacion', null, ['class' => 'form-control']) !!}
            </div>

            <table class="table">
              <tr>
                <td>
                  <div class="form-group">
                    {!! Form::submit('Actualizar Reserva', ['class' => 'btn btn-primary']) !!}
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
@stop
