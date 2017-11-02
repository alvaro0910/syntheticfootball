@extends('layouts.app')

@section('content')
<br><br><br>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Editar cancha</div>
            <div class="panel-body">
            <p class="lead">Edite la informacion de la nueva cancha.</p>
            <hr>
            {!! Form::model($data, [
                'method' => 'PUT',
                'route' => ['canchas.update', $data->id]
            ]) !!}

            <div class="form-group">
              <label for="descripcion" class="control-label">Descripcion</label>
              {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::submit('Actualizar Cancha', ['class' => 'btn btn-primary']) !!}
              {!! Form::close() !!}
            </div>
            <div class="form-group">
              <a title="Regresar" href="{{ route('canchas.index') }}" ><img src="{{ asset('imgs/regresar.png') }}" alt="ver" style="width:25px;"/>Regresar</a>
            </div>
@stop
