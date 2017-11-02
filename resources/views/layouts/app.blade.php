<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SyntheticFootball - @yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css/">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" >
    <!--<link href="{falta una llave asset('css/app.css') }}" rel="stylesheet">-->
</head>
<body>
  <section name="tab">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--<a class="navbar-brand" href="#"><img alt="Brand" src="{falta una llave asset('imgs/logo.png') }}" style="width:180px; height:100px"></a>-->
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">

                <!-- Authentication Links -->
                @guest
                    <li><a href="/">HOME</a></li>
                    <li><a href="{{ route('login') }}">LOGIN</a></li>
                    <li><a href="{{ route('register') }}">REGISTRO</a></li>
                @else
                  <li><a href="#" >{{ Auth::user()->name }}</a></li>
                  <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOGOUT</a></li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                @endguest
          </ul>
        </div>
      </div>
    </nav>

    @if($errors->any())
      <div class="alert alert-danger">
          @foreach($errors->all() as $error)
              <p>{{ $error }}</p>
          @endforeach
      </div>
    @endif

    @if(Session::has('flash_message'))
      <article class="alert alert-success">
        {{ Session::get('flash_message') }}
      </article>
    @endif

    @yield('content')
  </section>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
  <script src="{{ asset('js/validation/validation.js') }}"></script>
</body>
</html>
