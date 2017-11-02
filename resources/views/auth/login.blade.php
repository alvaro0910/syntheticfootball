@extends('layouts.app')

@section('title', 'Login')

@section('content')
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{ asset('imgs/img4.jpg') }}" alt="Phasellus">
      <div class="carousel-caption">
        <h3>Phasellus</h3>
        <p>Phasellus tincidunt commodo mauris non eleifend.</p>
      </div>
    </div>

    <div class="item">
      <img src="{{ asset('imgs/img5.jpg') }}" alt="Hendrerit">
      <div class="carousel-caption">
        <h3>Hendrerit</h3>
        <p>Maecenas feugiat arcu ligula, vitae tempus elit iaculis ut.</p>
      </div>
    </div>

    <div class="item">
      <img src="{{ asset('imgs/img6.jpg') }}" alt="Fermentum" />
      <div class="carousel-caption">
        <h3>Fermentum</h3>
        <p>Nam ut tellus a nulla ultricies molestie.</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
<br><br>

<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <span class="glyphicon glyphicon-lock"></span> Login
        </div>
      <div class="panel-body">
      <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="col-sm-3 control-label">Email</label>
        <div class="col-sm-9">
          <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>

          @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
        </div>
      </div>

      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="col-sm-3 control-label">Password</label>
        <div class="col-sm-9">
          <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

          @if ($errors->has('password'))
              <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <div class="checkbox">
            <label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Recordarme</label>
          </div>
        </div>
      </div>

      <div class="form-group last">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-success btn-sm">Ingresar</button>
        </div>
     </div>
     </form>
     </div>

     <div class="panel-footer">
       <a href="{{ route('register') }}">  Registrarse Aqui</a>
       <a class="btn btn-link" href="{{ route('password.request') }}">Recordar Contraseña</a>
     </div>

    </div>
  </div>
</div>
</div>
@endsection
