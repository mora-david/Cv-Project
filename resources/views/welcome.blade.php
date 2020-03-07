<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EASY_CV</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #3d0404;
                color: #1397d9;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
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
                margin-top: 150px;
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

            .steps{
                display:flex;
                padding: 50px;


            }

            .slides:hover{
                color:blue;
                transform: translate(0, -10px);
            }

            .slides{
                box-sizing: border-box;
                padding: 20px;
                margin: 20px;
                width: 300px;
                border: 1px solid black;
                transition: all 0.3s ease-in;
            }

            .slide-titles{
                color:grey
            }
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

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif



                <div class="content">
                    <div class="title m-b-md">
                        Create a Cv in easy way!
                    </div>
            @if(Auth::check() == False)

                <div class="steps">
                <div class="slides">
                    <h4 class="slide-titles">Registrate</h4>
                    <div>img</div>
                    <a href="/home">link</a>
                </div>

                    <div class="slides">
                        <h4 class="slide-titles">Ingresa la información</h4>
                        <div>img</div>
                        <a href="/home">link</a>
                    </div>

                    <div class="slides">
                        <h4 class="slide-titles">Elige una plantilla</h4>
                        <div>img</div>
                        <a href="/home">link</a>
                    </div>

                </div>
                @endif
            </div>
        </div>
    </body>
</html>
