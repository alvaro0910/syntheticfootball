@extends('layouts.app')

@section('title', 'Crear')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Agregar Nuevo Precio</div>
            <div class="panel-body">
            <p class="lead">Ingrese la Informacion.</p>
            <hr>
            {!! Form::open(['route' => 'precios.store']) !!}

            <div class="form-group">
            <label for="cancha" class="control-label">Seleccione la cancha</label>
              <select class="form-control" name="id_Cancha">
                @foreach ($list as $e)
                  <option value="{{ $e->id }}">{{ $e->nombre }}</option>
                @endforeach)
              </select>
            </div>

            <div class="form-group">
              <label for="precio" class="control-label">Precio</label>
              <input type="number" name="precio" class="form-control" required>
            </div>

            <table class="table">
              <tr>
                <td>
                  <div class="form-group">
                    {!! Form::submit('Crear Nuevo Precio', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                  </div>
                </td>
                <td>
                  <div class="form-group">
                    <a title="Regresar" href="{{ route('precios.index') }}" >Regresar <img src="{{ asset('imgs/regresar.png') }}" alt="ver" style="width:25px;"/></a>
                  </div>
                </td>
              </tr>
            </table>
          </div>
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
