<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SALESIN</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: rgb(15, 15, 15);
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                color: #000000;
                padding: 0 25px;
                font-size: 16px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .body > h3 {
                font-family: "Times New Roman", Times, serif; 
                font-size: 18px;
                text-transform: uppercase;
            }
        </style>
    </head>
    
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        {{-- <a href="{{ route('register') }}">Register</a> --}}
                    @endauth
                </div>
            @endif

            <style>
                .jumbotron {
                  background-color: #78edf1;
                  color: #fff;
                  padding: 200px 300px;
                }
                
                .container-fluid {
                  padding: 60px 50px;
                }
                </style>
            <body>
                
            <div class="jumbotron text-center">
                <img src="images/salesin.png" style="float:right;width:120px;height:120px;">
                <div class="title m-b-md; ">
                    SALESIN
            </div>

                <h3 >Gestión de ofertas de empleo</h3>
                

                <div class="links">
                    <!--<a href="https://laravel.com/docs">Documentation</a>-->
                    <a href="acciones/gestion">Gestion de usuarios</a>
                    <!--<a href="https://laracasts.com">Laracasts</a>-->
                    <a href="acciones/vistaEmail">Email</a>
                    <a href="noticias">Noticias</a>
                    <a href="informes">Generar informes</a>
                    {{-- <a href="{{ route('pdf') }}">PDF</a> --}}

                </div>
            
            </div>
        </div>
    </body>
</html>
