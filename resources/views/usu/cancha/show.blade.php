@extends('layouts.app')

@section('title', 'Ver')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
      <div class="panel-heading">Detalle Cancha Seleccionada</div>
        <div class="panel-body">
        <h1>{{ $data->name }}</h1>
        <table class="table table-striped table-hover">
          <tr>
            <td style="width: 200px;">Id</td>
            <td>{{ $data->id }}</td>
          </tr>
          <tr>
            <td>Propietario</td>
            <td>{{ $data->propietario }}</td>
          </tr>
          <tr>
            <td>Nombre</td>
            <td>{{ $data->nombre }}</td>
          </tr>
          <tr>
            <td>Ancho</td>
            <td>{{ $data->ancho }}</td>
          </tr>
          <tr>
            <td>Largo</td>
            <td>{{ $data->largo }}</td>
          </tr>
          <tr>
            <td>Descripcion</td>
            <td>{{ $data->descripcion }}</td>
          </tr>
        </table>
        <hr>
        <table class="table">
          <thead class="thead-inverse">
            <tr>
              <th>Reservar</th>
              <th>Volver</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a href="{{ route('reservasusu.create', $data->id) }}" class="btn btn-primary">Reservar Cancha</a></td>
              <td><a href="{{ route('canchasusu.index') }}" class="btn btn-info">Volver a todas las canchas</a></td>
            </tr>
          </tbody>
        </table>
@stop
