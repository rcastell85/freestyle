
@extends('layouts.app')

@section('content')


<body><br>

      <div class="cuerpo-inicio row">

                <!-- PARTE IZQUIERDA DEL BODY ------------------->

                <div class="izquierda col-md-3" id="perfil">
                  <div class="foto">
                    <div class="img-perfil">
                        <img class="avatar" src="/storage/profiles/{{$perfil->image}}" alt="" style="width:100%">
                    </div>
                  </div>
                  <section class="informacion">
                    <ul class="lista-izquierda list-group"style="list-style: none";>
                      <li class='cambio list-group-item'><a href="/inicio">Inicio</a></li>
                      <li class='cambio list-group-item'><a href="/perfilUsuario">Perfil</a></li>
                      <li class='cambio list-group-item' ><a href="/buscar">Amigos</a></li>
                      <li class='cambio list-group-item'><a href="#">Posteos</a></li>

                    </ul>
                  </section>
                </div>

                    <!-- PARTE CENTRAL DEL BODY ---------------------------->

            <div class="centro col-md-9">
              <div class="cuerpo-central">
                <ul class="menu-p nav nav-pills nav-justified text-white bg-dark btn-lg">
                   <li class="it nav-item">
                     <a class="link-menu nav-link text-light" href="/inicio/">Inicio</a>
                   </li>
                   <li class="it nav-item">
                     <a class="nav-link text-light" href="/seguidores">Seguidores</a>
                   </li>
                   <li class="it nav-item">
                       <a class="nav-link text-light" href="/seguidos">Seguidos</a>
                   </li>
               </ul><br>



              <div class="search">
                <h2>Seguidos:</h2>
              </div>
              <br>


          <div class="">
            @forelse ($seguidos as $seguido)
              <a href="/verPerfilUsuario/{{$seguido->profile->id}}">
                <img class="usuarios"src="/storage/profiles/{{$seguido->profile->image}}" alt="" style="width: 50px;">
                  <h5>{{$seguido->profile->name}}</h5>
              </a>
                  <hr>
            @empty
              <p style="text-align:center">No Sigues a Nadie</p>
            @endforelse
          </div>
        </div>
      </div>
                      <!-- PARTE DERECHA DEL BODY ---------------------------------------->
    </div>
  </body>
@endsection
