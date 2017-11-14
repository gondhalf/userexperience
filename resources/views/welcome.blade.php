<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UserExperience</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: whitesmoke;
                background-image: url("http://i55.tinypic.com/wqpik9.jpg");
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                animation-name: colorin;
                animation-duration: 4s;
                animation-iteration-count: infinite;
                animation-direction: alternate;
                animation-timing-function: linear;


            }

            @keyframes colorin {
                0%   {background-color: whitesmoke;}
                25%  {background-color: #aeffb1;}
                50%  {background-color: #bcdaff;}
                100% {background-color: #ffbab9;}


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
                color: black;

                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;


            }

            .m-b-md {

                margin-bottom: 30px;
                color: black;
                text-shadow: 1px 1px gray;

            }
            body, a:hover {cursor: url(http://cur.cursors-4u.net/nature/nat-9/nat839.cur), progress !important;}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Registro</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Comida para Mariposas
                </div>
                @if (Route::has('login'))
                    <div class="links">
                        @auth
                                <a href="{{ route('register') }}"> ya estas logeado, click aqui para comprar</a>
                            @else
                                    <a href="{{ route('register') }}"> <u>Registrate</u> o logeate y compra su comida</a>
                                @endauth
                    </div>
                @endif

            </div>
        </div>
    </body>
</html>
