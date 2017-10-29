@extends('layouts.app')

@section('content')
<h1>{{ $data->name }}</h1>
<p class="lead">User</p>
<table class="table table-striped table-hover">
  <tr>
    <td style="width: 200px;">Id</td>
    <td>{{ $data->id }}</td>
  </tr>
  <tr>
    <td>Propietario</td>
    <td>{{ $data->id_Usuario }}</td>
  </tr>
  <tr>
    <td>Created At</td>
    <td>{{ $data->created_at }}</td>
  </tr>
  <tr>
    <td>Updated At</td>
    <td>{{ $data->updated_at }}</td>
  </tr>
  <tr>
    <td>Descripcion</td>
    <td>{{ $data->descripcion }}</td>
  </tr>
</table>
<hr>
<a href="{{ route('canchas.edit', $data->id) }}" class="btn btn-primary">Editar Cancha</a>
{!! Form::open([
    'method' => 'DELETE',
    'route' => ['canchas.destroy', $data->id]
]) !!}
{!! Form::submit('Borrar Cancha?', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
<a href="{{ route('canchas.index') }}" class="btn btn-info">Volver a todas las canchas</a>
@stop
