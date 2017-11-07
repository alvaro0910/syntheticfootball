@extends('layouts.app')

@section('title', 'Crear')

@section('content')
  <br><br>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Agregar nueva cancha</div>
            <div class="panel-body">
            <p class="lead">Ingrese la informacion de la nueva cancha.</p>
            <hr>
            {!! Form::open(['route' => 'canchas.store']) !!}

            <div class="form-group">
              <label for="nombre" class="control-label">Nombre</label>
              {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
              <label for="ancho" class="control-label">Ancho</label>
              {!! Form::text('ancho', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
              <label for="largo" class="control-label">Largo</label>
              {!! Form::text('largo', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
              <label for="descripcion" class="control-label">Descripcion</label>
              {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
              {!! Form::submit('Crear nueva Cancha', ['class' => 'btn btn-primary']) !!}
              {!! Form::close() !!}
            </div>
            <a title="Regresar" href="{{ route('canchas.index') }}" ><img src="{{ asset('imgs/regresar.png') }}" alt="ver" style="width:25px;"/>Regresar</a>
          </div>
        </div>
      </div>
    </div>
  </div>

@stop
