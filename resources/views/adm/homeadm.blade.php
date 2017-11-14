@extends('../layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Bienvenido</div>
          <div class="panel-body">
            @if (session('status'))
              <div class="alert alert-success">
                {{ session('status') }}
              </div>
            @endif
          <table class="table">
            <thead class="thead-inverse">
            <tr>
              <th>Lista de Canchas</th>
              <th>Lista de Reservas</th>
              <th>Lista Precios</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td><a title="Ver" href="/canchas">Ir a la Lista <img src="{{ asset('imgs/lista.png') }}" alt="ver" style="width:25px;"/></a></td>
              <td><a title="Ver" href="/reservas">Ir a la Lista <img src="{{ asset('imgs/lista.png') }}" alt="ver" style="width:25px;"/></a></td>
              <td><a title="Ver" href="/precios">Ir a la Lista <img src="{{ asset('imgs/lista.png') }}" alt="ver" style="width:25px;"/></a></td>
            </tr>
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
  </div>  
@endsection
