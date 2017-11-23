@extends('layouts.app')

@section('title', 'Lista Precios')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Lista de Precios</div>
            <div class="panel-body">
              <table class="table">
              <thead class="thead-inverse">
              <tr>
                <th>Cancha</th>
                <th>Costo</th>
                <th>Ver</th>
                <th>Editar</th>
              </tr>
              </thead>
              <tfoot>
                <tr>
                  <td colspan="2" style="text-align:center"><a title="Agregar" href="{!! url('precios/create') !!}">Agregar Precio <img src="{{ asset('imgs/agregar.png') }}" alt="editar" style="width:25px;"/></a></td>
                  <td colspan="2" style="text-align:center"><a title="Regresar" href="{{ route('admin') }}" >Regresar <img src="{{ asset('imgs/regresar.png') }}" alt="ver" style="width:25px;"/></a></td>
                </tr>
              <tfoot>
              <tbody>
                @foreach ($list as $e)
                  </tr>
                  <tr>
                  <td>{{ $e->nombre }}</td>
                  <td>{{ $e->precio }}</td>
                  <td><a title="Ver" href="{{ route('precios.show', $e->id) }}"><img src="{{ asset('imgs/ver.png') }}" alt="ver" style="width:25px;"/></a></td>
                  <td><a title="Editar" href="{{ route('precios.edit', $e->id) }}"><img src="{{ asset('imgs/editar.png') }}" alt="editar" style="width:25px;"/></a></td>

                  <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['precios.destroy', $e->id]]) !!}
                    {!! Form::submit('Eliminar Precio?', ['class' => 'btn btn-danger', 'onclick' => "return confirm('¿Seguro que Desea Eliminarlo?')"])!!}
                    {!! Form::close() !!}
                  </td>
                  </tr>
                  <!--<p>{ $e->user->nombre }}</p>-->
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
