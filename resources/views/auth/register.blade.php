@extends('layouts.app')

@section('title', 'Registro')

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
      <img src="{{ asset('imgs/img15.jpg') }}" alt="Phasellus">
      <div class="carousel-caption">
        <h3>Phasellus</h3>
        <p>Phasellus tincidunt commodo mauris non eleifend.</p>
      </div>
    </div>

    <div class="item">
      <img src="{{ asset('imgs/img16.jpg') }}" alt="Hendrerit">
      <div class="carousel-caption">
        <h3>Hendrerit</h3>
        <p>Maecenas feugiat arcu ligula, vitae tempus elit iaculis ut.</p>
      </div>
    </div>

    <div class="item">
      <img src="{{ asset('imgs/img17.jpg') }}" alt="Fermentum" />
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
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Registro</div>
            <div class="panel-body">
              <form class="form-horizontal" method="POST" action="{{ route('register') }}" id="contact_form">
              {{ csrf_field() }}
              <fieldset>
              <!-- Form Name -->
              <legend></legend>

              <!-- Text input-->
              <div class="form-group{{ $errors->has('documento') ? ' has-error' : '' }}">
              <label for="documento" class="col-md-4 control-label">Numero Documento</label>
                <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
                    <input id="documento" name="documento" placeholder="123456789" class="form-control" type="text" value="{{ old('documento') }}" required autofocus>
                    @if ($errors->has('documento'))
                        <span class="help-block">
                            <strong>{{ $errors->first('documento') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
              <label for="nombre" class="col-md-4 control-label">Nombre</label>
                <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="nombre" name="nombre" placeholder="Pepito" class="form-control"  type="text" value="{{ old('nombre') }}" required autofocus>
                    @if ($errors->has('nombre'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nombre') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group{{ $errors->has('apellido') ? ' has-error' : '' }}">
              <label for="apellido" class="col-md-4 control-label" >Apellido</label>
                <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="apellido" name="apellido" placeholder="Perez" class="form-control"  type="text" value="{{ old('apellido') }}" required autofocus>
                    @if ($errors->has('apellido'))
                        <span class="help-block">
                            <strong>{{ $errors->first('apellido') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="col-md-4 control-label">E-Mail</label>
                <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input id="email" name="email" placeholder="example@mail.com" class="form-control" type="text" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
              <label for="telefono" class="col-md-4 control-label">Telefono</label>
                <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                    <input id="telefono" name="telefono" placeholder="5555-1212" class="form-control" type="text" value="{{ old('telefono') }}" required autofocus>
                    @if ($errors->has('telefono'))
                        <span class="help-block">
                            <strong>{{ $errors->first('telefono') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="col-md-4 control-label">Password</label>
                <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" name="password" placeholder="***********" class="form-control" type="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
              <label for="password-confirm" class="col-md-4 control-label">Repita Password</label>
                <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password-confirm" name="password_confirmation" placeholder="***********" class="form-control" type="password" required>
                  </div>
                </div>
              </div>

        <input id="tipo" type="hidden" name="tipo" value="usu">
        <!-- Success message -->
        <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Gracias por su registro.</div>

        <!-- Button -->
        <div class="form-group">
        <label class="col-md-4 control-label"></label>
          <div class="col-md-4">
            <button type="submit" class="btn btn-warning">Registrarse <span class="glyphicon glyphicon-send"></span></button>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>
@endsection
