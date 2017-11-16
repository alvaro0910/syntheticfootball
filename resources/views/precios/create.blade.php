@extends('layouts.app')

@section('title', 'Crear')

@section('content')
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
            <a title="Regresar" href="{{ route('canchas.index') }}" >Regresar <img src="{{ asset('imgs/regresar.png') }}" alt="ver" style="width:25px;"/></a>
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
