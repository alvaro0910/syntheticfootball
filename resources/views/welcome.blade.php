<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Welcome</title>

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
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            @if (Route::has('login'))
                    @auth
                      <li><a href="{{ url('/') }}">HOME</a></li>
                    @else
                        <li><a href="{{ route('login') }}">LOGIN</a></li>
                        <li><a href="{{ route('register') }}">REGISTRO</a></li>
                    @endauth
            @endif
          </ul>
        </div>
      </div>
    </nav>

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
        <img src="{{ asset('imgs/img1.jpg') }}" alt="Phasellus">
        <div class="carousel-caption">
          <h3>Phasellus</h3>
          <p>Phasellus tincidunt commodo mauris non eleifend.</p>
        </div>
      </div>

      <div class="item">
        <img src="{{ asset('imgs/img2.jpg') }}" alt="Hendrerit">
        <div class="carousel-caption">
          <h3>Hendrerit</h3>
          <p>Maecenas feugiat arcu ligula, vitae tempus elit iaculis ut.</p>
        </div>
      </div>

      <div class="item">
        <img src="{{ asset('imgs/img3.jpg') }}" alt="Fermentum" />
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

  <div class="container text-center">
  <h3>THE PAGE</h3>
  <p><em>Ut at turpis viverra!</em></p>
  <p>Vivamus at erat sit amet neque vehicula congue. Lorem ipsum..</p>
  <br>

  <div class="row">
    <div class="col-sm-3">
      <p><strong>Lacinia</strong></p>
      <a href="#demo1" data-toggle="collapse">
        <img src="{{ asset('imgs/img7.jpg') }}" class="img-circle person" alt="Img">
      </a>
      <div id="demo1" class="collapse">
        <p><a href="{{ route('login') }}">Reservar</a></p>
        <p>Sed posuere pretium lectus</p>
        <p>Cras at magna a metus elementum</p>
        <p>rhoncus ut ante eget</p>
      </div>
    </div>
    <div class="col-sm-3">
      <p><strong>Malesuada</strong></p>
      <a href="#demo2" data-toggle="collapse">
        <img src="{{ asset('imgs/img8.jpg') }}" class="img-circle person" alt="Img">
      </a>
      <div id="demo2" class="collapse">
        <p><a href="{{ route('login') }}">Reservar</a></p>
        <p>Vestibulum id risus a metus dapibus</p>
        <p>efficitur massa fermentum</p>
        <p>nulla auctor sagittis at ut diam</p>
      </div>
    </div>
    <div class="col-sm-3">
      <p><strong>Condimentum</strong></p>
      <a href="#demo3" data-toggle="collapse">
        <img src="{{ asset('imgs/img9.jpg') }}" class="img-circle person" alt="Img">
      </a>
      <div id="demo3" class="collapse">
        <p><a href="{{ route('login') }}">Reservar</a></p>
        <p>Suspendisse mollis tortor quis</p>
        <p>Praesent lacinia imperdiet ultricies</p>
        <p>Morbi maximus nisl et mauris gravida</p>
      </div>
    </div>
    <div class="col-sm-3">
      <p><strong>Volutpat</strong></p>
      <a href="#demo4" data-toggle="collapse">
        <img src="{{ asset('imgs/img10.jpg') }}" class="img-circle person" alt="Img">
      </a>
      <div id="demo4" class="collapse">
        <p><a href="{{ route('login') }}">Reservar</a></p>
        <p>Nam bibendum eleifend massat</p>
        <p>Ut et vulputate turpis. Maecenas</p>
        <p>a neque interdum aliquet. Nullam</p>
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-sm-3">
      <p><strong>Lacinia</strong></p>
      <a href="#demo5" data-toggle="collapse">
        <img src="{{ asset('imgs/img11.jpg') }}" class="img-circle person" alt="Img">
      </a>
      <div id="demo5" class="collapse">
        <p><a href="{{ route('login') }}">Reservar</a></p>
        <p>Sed posuere pretium lectus</p>
        <p>Cras at magna a metus elementum</p>
        <p>rhoncus ut ante eget</p>
      </div>
    </div>
    <div class="col-sm-3">
      <p><strong>Malesuada</strong></p>
      <a href="#demo6" data-toggle="collapse">
        <img src="{{ asset('imgs/img12.jpg') }}" class="img-circle person" alt="Img">
      </a>
      <div id="demo6" class="collapse">
        <p><a href="{{ route('login') }}">Reservar</a></p>
        <p>Vestibulum id risus a metus dapibus</p>
        <p>efficitur massa fermentum</p>
        <p>nulla auctor sagittis at ut diam</p>
      </div>
    </div>
    <div class="col-sm-3">
      <p><strong>Condimentum</strong></p>
      <a href="#demo7" data-toggle="collapse">
        <img src="{{ asset('imgs/img13.jpg') }}" class="img-circle person" alt="Img">
      </a>
      <div id="demo7" class="collapse">
        <p><a href="{{ route('login') }}">Reservar</a></p>
        <p>Suspendisse mollis tortor quis</p>
        <p>Praesent lacinia imperdiet ultricies</p>
        <p>Morbi maximus nisl et mauris gravida</p>
      </div>
    </div>
    <div class="col-sm-3">
      <p><strong>Volutpat</strong></p>
      <a href="#demo8" data-toggle="collapse">
        <img src="{{ asset('imgs/img14.jpg') }}" class="img-circle person" alt="Img">
      </a>
      <div id="demo8" class="collapse">
        <p><a href="{{ route('login') }}">Reservar</a></p>
        <p>Nam bibendum eleifend massat</p>
        <p>Ut et vulputate turpis. Maecenas</p>
        <p>a neque interdum aliquet. Nullam</p>
      </div>
    </div>
  </div>
</div>

  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">Visitanos en:</div>

      <div class="panel-body">
        @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
        @endif

        <div id="footer">
          <div class="container">
            <div class="row">
              <h3 class="footertext" ><center></center></h3><br>
              <div class="col-md-2">
                <center>
                    <img src="{{ asset('imgs/icon1.png') }}" class="img-circle" alt="the-brains"><br>
                    <h5 class="footertext" style="letter-spacing:4px; opacity:0.5">PELLENTESQUE</h5>
                  <p class="footertext">Nullam gravida turpis eros, id ultrices risus dapibus eget.<br>
                </center>
              </div>
              <div class="col-md-2">
                <center>
                    <img src="{{ asset('imgs/icon2.png') }}" class="img-circle" alt="...">
                    <br>
                    <h5 class="footertext" style="letter-spacing:4px; opacity:0.5">SODALES</h5>
                  <p class="footertext">Vestibulum nec arcu ac neque bibendum scelerisque non ac nunc.<br>
                </center>
              </div>
              <div class="col-md-2">
                <center>
                  <img src="{{ asset('imgs/icon3.png') }}" class="img-circle" alt="..."><br>
                    <h5 class="footertext" style="letter-spacing:4px; opacity:0.5">EUISMOD</h5>
                      <p class="footertext">Curabitur aliquet felis justo, quis sagittis leo dapibus non.<br>
                </center>
              </div>
              <div class="col-md-2">
                <center>
                    <img src="{{ asset('imgs/icon4.png') }}" class="img-circle" alt="..."><br>
                    <h5 class="footertext" style="letter-spacing:4px; opacity:0.5">DEFERUY</h5>
                  <p class="footertext">justo, quis  dapibus Curabitur sagittis leo aliquet felis non.<br>
                </center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
  <script src="{{ asset('js/validation/validation.js') }}"></script>
</body>
</html>
