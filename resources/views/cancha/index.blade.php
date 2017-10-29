@extends('layouts.app')

@section('content')
<h1>Lista de Canchas</h1>
<p class="lead">Aqui esta la lista de sus Canchas.
    <a href="{!! url('canchas/create') !!}">Add a new one?</a></p>
<hr>
<table>
  <th>
    <td>Id</td>
    <td>Date</td>
    <td>Options</td>
  </th>
@foreach($list as $item)

<tr>
  <td> {{ $item-> id }} </td>
  <td> {{ $item-> updated_at }}</td>
  <td>
    <p>
        <a href="{{ route('canchas.show', $item->id) }}" class="btn btn-primary">Ver Cancha</a>
        <a href="{{ route('canchas.edit', $item->id) }}" class="btn btn-primary">Editar Cancha</a>
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['canchas.destroy', $item->id]
        ]) !!}
        {!! Form::submit('Borrar esta Cancha?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </p>
    <hr>
  </td>
</tr>


@endforeach
</table>
@stop
