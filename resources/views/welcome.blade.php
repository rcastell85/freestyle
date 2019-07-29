<!doctype html>
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

            .img-principal{
              position: relative;
            }
            .barra{
              position: absolute;
              display: flex;
              justify-content: space-between;
              width: 100%;
              
            }
            .full-height {
                height: 100vh;
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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
    </head>
    <body>
      <div class="container">
        <div class="img-principal">
          <img  src="/storage/jump_people_beach.jpg" alt="" style="width: 100%;">

          <div class="barra navbar navbar-expand-md navbar-light">
                  <div class="logo">
                    <a href="{{ url('/') }}"><img class="" src="/storage/logo5.png" alt="" style="width: 50%;"></a>
                  </div>
              @if (Route::has('login'))
                  <div class="top-right links text-white">
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
          </div>

      </div>
    </body>
</html>
