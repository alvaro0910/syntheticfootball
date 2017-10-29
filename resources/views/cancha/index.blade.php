@extends('layouts.app')

@section('content')
<h1>Lista de Canchas</h1>
<p class="lead">Aqui esta la lista de sus Canchas.
    <a href="{!! url('canchas/create') !!}">Agregar una nueva?</a></p>
<hr>
@foreach ($list as $e)
  <h3>{{ $e->id }}</h3>
  <p>{{ $e->id_Usuario }}</p>
  <p>{{ $e->user->name }}</p>
  <p>
    <a href="{{ route('canchas.show', $item->id) }}" class="btn btn-primary">Ver Cancha</a>
    <a href="{{ route('canchas.edit', $item->id) }}" class="btn btn-primary">Editar Cancha</a>
      {!! Form::open(['method' => 'DELETE','route' => ['canchas.destroy', $item->id]]) !!}
      {!! Form::submit('Borrar esta Cancha?', ['class' => 'btn btn-danger']) !!}
      {!! Form::close() !!}
  </p>
  <hr>
@endforeach
{!! $list}
@stop
