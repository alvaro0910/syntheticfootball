@extends('layouts.app')

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
              <label for="descripcion" class="control-label">Descripcion</label>
              {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('Crear nueva Cancha', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
@stop
