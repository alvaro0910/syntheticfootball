@extends('layouts.app')

@section('content')

<h1>Editar cancha</h1>
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
    {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Actualizar Cancha', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}
@stop
