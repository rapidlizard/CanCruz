<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com" />
        <link
            href="https://fonts.googleapis.com/css?family=Nunito"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=DM+Mono:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
            integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
            crossorigin="anonymous"
        />

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

           
        <!-- Scripts ajax y bootstrap -->
        <link rel="stylesheet" href="carousel.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
    
    </head>

    <body>

    <header class="header-basic">
        <div class="header">
            <span href="{{url('/welcome/')}}">Can Cruz</span>
            <div class="headerNav">
                <nav>
                <a href="{{url('/masia/')}}">La Masía</a>
                    <a href="{{url('/puigracios/')}}">Estancias</a>
                        <!-- <ul>Estancias
                            <li class="submenu"><a href="{{url('/puigracios/')}}">Puigraciós</a></li>
                            <li class="submenu"><a href="{{url('/santcristofol/')}}">Sant Cristòfol</a></li>
                            <li class="submenu"><a href="{{url('/rocacentella/')}}">Rocacentelles</a></li>
                        </ul> -->
                    <a href="{{url('/huerto_cocina/')}}">Huerto y cocina ecológica</a>
                    <a href="{{url('/parque_montseny/')}}">Parque natural de Montseny</a>
                    <a href="{{url('/contacto/')}}">Contacto</a>
                </nav>
            </div>
            <button><a href="{{url('/reserva_usuario_first/')}}">Reserva</a></button>
        </div>
        
    </header>

    @yield('content')
    
    <footer class="site-footer">
            <div class="logo-footer">
                <img
                    src="https://cdn.shopify.com/shopifycloud/hatchful-web/assets/6fcc76cfd1c59f44d43a485167fb3139.png"
                    alt=""
                />
            </div>
            <div class="nav-footer">
                <a href="">La Masia</a>
                <a href="">Alojamiento</a>
                <a href="">Huerto y cocina ecológica</a>
                <a href="">Animales</a>
                <a href="">Parc natural </a>
                <a href="">Contacto</a>
            </div>
            <div class="contact-footer">
                <p>Figaró-Montmany 08590 Barcelona</p>
                <p>+34 607 30 44 98</p>
                <p>info@masicacancruz.com</p>
            </div>
            <div class="social-footer">
                <a href=""><i class="fab fa-facebook-square fa-3x"></i></a>
                <a href=""><i class="fab fa-instagram-square fa-3x"></i></a>
                <a href=""><i class="fab fa-twitter-square fa-3x"></i></a>
            </div>
        </footer>
    </body>
</html>
