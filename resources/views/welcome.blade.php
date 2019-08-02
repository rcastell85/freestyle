<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/home.css">
    </head>
    <body>
      <div class="container">
        <div class="img-principal">
          <img  src="/img/jump_people_beach.jpg" alt="" style="width: 100%;">

          <div class="barra navbar navbar-expand-md navbar-light">
                  <div class="logo">
                    <a href="{{ url('/') }}"><img class="" src="/img/logo5.png" alt="" style="width: 50%;"></a>
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
