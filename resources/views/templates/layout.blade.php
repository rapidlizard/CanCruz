
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    
    <body>
        <ul>
            <li><a href="{{url('/masia/')}}">La Masía</a></li>
                <ul class="submenu">Estancias
                    <li class="submenu"><a href="{{url('/puigracios/')}}">Puigraciós</a></li>
                    <li class="submenu"><a href="{{url('/santcristofol/')}}">Sant Cristòfol</a></li>
                    <li class="submenu"><a href="{{url('/rocacentella/')}}">Rocacentelles</a></li>
                </ul>
            <li><a href="{{url('/huerto_cocina/')}}">Huerto y cocina ecológica</a></li>
            <li><a href="{{url('/parque_montseny/')}}">Parque Natural de Montseny</a></li>
            <li><a href="{{url('/contacto/')}}">Contacto</a>   </li>
        </ul>
        <button class="cta"> Reserva</button>

        <div class="container">
            @yield('content')
        </div>

        <footer>
            <div id="logo"></div>
            
                <ul>
                    <li><a href="{{url('/masia/')}}">La Masía</a></li>
                    <li><a href="{{url('/estancias/puigracios/')}}">Estancia Puigraciós</a></li>
                    <li><a href="{{url('/estancias/santcristofol/')}}">Estancia Sant Cristòfol</a></li>
                    <li><a href="{{url('/estancias/rocacentella/')}}">Estancia Rocacentella</a></li>
                    <li><a href="{{url('/huerto_cocina/')}}">Huerto y cocina ecológica</a></li>
                    <li><a href="{{url('/parque_nmontseny/')}}">Parque Natural de Montseny</a></li>
                    <li><a href="{{url('/contacto/')}}">Contacto</a></li>   
                    </li>
                </ul>
              
                 <ul>
                    <li><a href="">Figaró-Montmany <br>08590 Barcelona </a></li>
                    <li><a href="">+34 607 304 498</a></li>
                        <li><a href="">info@masiacanplans.com</a></li>
                </ul>
        div>                    <u                        <li><a href=""><i></i></a></l                        <li><a href=""><i></i></a></l                        <li><a href=""><i></i></a></li>                     <div>
        
        </footer>    
