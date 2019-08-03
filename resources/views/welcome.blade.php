<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/home.css">
    </head>
    <body>
      <div class="main">

        <section class="cont">
            <img  id="foto1" src="/img/millenials.jpg" alt="" style="width: 100%; height: 650px;">
            <div class="barra navbar navbar-expand-md navbar-light">
              <div class="logo">
                <a href="{{ url('/') }}"><img class="" src="/img/logo5.png" alt="" style="width: 80%;"></a>
              </div>
              @if (Route::has('login'))
                  <div class="top-right links text-dark">
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
          </section>

          <section class="segunda">
              <div class="seccion row">
                <div class="col-md-6">
                  <div class="title-blue text-dark parte-texto" style="width: 100% height: 500px;">
                    <div class="">
                      <h1 class="" style="font-weight: bold;">Conoce gente</h1>
                      <h1>en todo</h1>
                      <h1>el mundo</h1>
                    </div>
                    <div class="" style="margin-top: 50px">
                      <a href="/register"><button class="btn btn-primary btn-lg" type="button" name="button" style="marging-top: 10px;">Registrate ahora!</button></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 img-lateral">
                  <img src="/img/31301123-multi-ethnic-people-social-networking.jpg" alt="" width="90%" style="height: 400px;">
                </div>
              </div>
          </section>

          <section class="tercera">
            <div class="imagen-padre">
                <img  id="foto1" src="/img/jump_people_beach.jpg" alt="" style="width: 100%;  height: 650px; padding-top: 30px;">
              <div class="">
                <button type="button" name="button"></button>
              </div>
            </div>
          </section>

          <section class="segunda">
              <div class="seccion row">
                <div class="col-md-6 img-lateral">
                  <img src="/img/chicos-fondo-blanco.jpg" alt="" width="90%" style="padding-left: 60px;">
                </div>
                <div class="col-md-6">
                  <div class="title-blue text-dark parte-texto" style="width: 100% height: 500px;">
                    <div class="">
                      <h1 class="" style="font-weight: bold;">Comparti</h1>
                      <h1>todo tipo</h1>
                      <h1>de contenido</h1>
                    </div>
                    <div class="" style="margin-top: 50px">
                      <a href="/login"><button class="btn btn-primary btn-lg" type="button" name="button" style="marging-top: 10px;">Inicia Sesion</button></a>
                    </div>
                  </div>
                </div>
              </div>
          </section>

          <section class="tercera">
            <div class="">
              <img  id="foto1" src="/img/chica-relax-2.jpg" alt="" style="width: 100%;  height: 650px; padding-top: 30px;">
            </div>
          </section>

          <footer class="bg-dark">
            <div class="row">
              <div class="col-md-2">
              </div>
              <div class="col-md-3">
                <h2>ACERCA DE NOSOTROS</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
              <div class="col-md-2">
              </div>
              <div class="col-md-3">
                <h2>ACERCA DE NOSOTROS</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
              <div class="col-md-2">
              </div>
            </div>
          </footer>
      </div>
    </body>
</html>
