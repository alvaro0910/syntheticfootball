@extends('layouts.app')

@section('title', 'Lista Canchas')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
      <div class="panel-heading">Lista de Canchas</div>
        <div class="panel-body">

          <table class="table">
            <thead class="thead-inverse">
            <tr>
              <th>Cancha ID</th>
              <th>Nombre</th>
              <th>Costo x Hora</th>
              <th>Ver</th>
              <th>Reservar</th>
            </tr>
            </thead>
            <tfoot>
              <tr>
                <td colspan="2" style="text-align:center"><a title="Regresar" href="{{ route('usu') }}" >Regresar <img src="{{ asset('imgs/regresar.png') }}" alt="ver" style="width:25px;"/></a></td>
              </tr>
            <tfoot>
            <tbody>
              @foreach ($list as $e)
              <tr>
                <td>{{ $e->id }}</td>
                <td><p>{{ $e->nombre }}</p></td>
                <td><p>{{ $e->precio }}</p></td>
                <td><a title="Ver" href="{{ route('canchasusu.show', $e->id) }}"><img src="{{ asset('imgs/ver.png') }}" alt="ver" style="width:25px;"/></a></td>
                <td><a title="Reservar" href="{{ route('reservasusu.create', $e->id) }}"><img src="{{ asset('imgs/reserva.png') }}" alt="editar" style="width:25px;"/></a></td>
              </tr>
              @endforeach
            </tbody>
          </table>

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
