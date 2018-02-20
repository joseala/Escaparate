<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta  http-equiv="Content-Type" content="text/html" charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-signin-client_id" content="624538345902-q62ne1bkl3ltdhnrjqlg8ahejg7c83hm.apps.googleusercontent.com">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Escaparate') }}</title>

        <!-- Styles -->   
        <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
        <link href="{{ asset('css/pie.css') }}" rel="stylesheet">
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <script src="https://apis.google.com/js/platform.js" async defer></script>

    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container-fluid login">
                    <div class="navbar-header col-md-2 col-lg-2">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img class="logo" src="{{ asset('imagenes/logo.png') }}"/>
                        </a>
                    </div>
                    <div class="col-md-8 col-lg-8">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active imgCarousel">
                                    <img class="imgc" src="{{ asset('imagenes/carousel1.png') }}" alt="Envio mensajes abordo">
                                    <h5>ENVÍO DE MENSAJES Y NAVEGADOR A BORDO</h5>
                                </div>

                                <div class="item imgCarousel">
                                    <img class="imgc" src="{{ asset('imagenes/carousel2.png') }}" alt="Apertura vehiculos" >
                                    <h5>APERTURA DE VEHÍCULOS SIN LLAVE</h5>
                                </div>

                                <div class="item imgCarousel">
                                    <img class="imgc" src="{{ asset('imagenes/carousel3.png') }}" alt="Sensores" >
                                    <h5>SENSORES DE TEMPERATURA, PRESIÓN, GIRO…</h5>
                                </div>

                            </div>
                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class=" collapse navbar-collapse col-md-2 col-lg-2 logueo" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            &nbsp;
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right ">
                            <!-- Authentication Links -->
                            @guest
                            <li><a class="btn btn-success btn-lg btn-block" href="{{ route('login') }}" role="button">Login</a></li>
                            <li><a class="btn btn-info btn-lg btn-block" href="{{ route('register') }}" role="button">Registrarse</a></li>
                            <div class="g-signin2" data-onsuccess="onSignIn"></div>
                            @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu ">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                           
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            @yield('content')


        </div>
        <script type="text/javascript">
        function $(id) {
          return document.getElementById(id);
        }
        var map,
            lat = parseFloat($('mapa').dataset.lat),
            lng = parseFloat($('mapa').dataset.lng),
            marker,
            title = '';
        function initMap() {
          map = new google.maps.Map(document.getElementById('mapa'), {
            center: {lat: lat , lng: lng },
            zoom: 5 
          });
          marker = new google.maps.Marker({
            position: {lat: lat , lng: lng },
            map: map,
            title: title,
          });
        }
        </script>
        <script type="text/javascript" src="{{ asset('js/front.js') }}"></script>
        <!--key = credenciales google developer console, claves de API -->
        <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFpuyGMRIUr_NuGVxQtOtb752biDCDhXw&callback=initMap">
        </script>
        <!-- Scripts 
        <script>
          function initMap() {
            var uluru = {lat: 40.5180063, lng: -3.6564008000000285};
            var map = new google.maps.Map(document.getElementById('mapa'), {
              zoom: 12,
              center: uluru
              
            });
            var marker = new google.maps.Marker({
              position: uluru,
              map: map,
              title : "Avenida Europa 14, 28108 Alcobendas, Madrid"
              
            });
          }
        </script>
        
        <script async defer
                accesskey=""src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFpuyGMRIUr_NuGVxQtOtb752biDCDhXw&callback=initMap">
        </script>-->
        <script src="{{ asset('js/app.js') }}"></script>
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->    
    </body>
</html>
