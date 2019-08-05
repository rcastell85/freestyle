@extends('layouts.app')

@section('content')


<body>

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
                 <a class="link-menu nav-link text-light" href="{{ url('/') }}">Home</a>
               </li>
               <li class="it nav-item">
                 <a class="nav-link text-light" href="/crearPost">Nuevo Post</a>
               </li>
               <li class="it nav-item">
                   <a class="nav-link text-light" href="/buscar">Buscar</a>
               </li>
            </ul><br>

           {{-- {{ $users= User::find(1) }} --}}

           <h4>Bienvenido: {{ auth()->user()->username }}</h4>




      @forelse ($posts as $post)
        <div class="post">
          <div class="id-post row">
              <div class="img-id-post col col-md-1" id="fotico">
                <a href="/verPerfilUsuario/{{$perfil->id}}">
                  <img class="img-p" src="/storage/profiles/{{$post->perfil->image}}" alt="" style="width:50px">
              </div>
              <div class="nombre-id-post col col-md-1" id="fotico">
                  <h5 class="h5-inicio">{{$post->author}}</h5>
              </div>
              </a>
              <div class="time-post col col-md-1">
                  <p class="time-p" style="">2h.</p>
              </div>
          </div>
            <div class="">
            @empty ($post->video)
                <img class='postImg'src="/storage/PostImg/{{$post->image}}" alt="" width="" height="">
            @else
                <video class="postImg"src="/storage/{{$post->video}}" muted loop controls width="700" height="500"> </video>
            @endempty
            </div>



          <div class="titleClass nombre-id-post col-md-10">
              <h5>{{$post->title}}</h5>
          </div>
              <div class="parteBajaPost">
                <div class="like-share row">

                    <div class="likes col-md-3 col-sm-3">
                        @foreach ($post->likes as $value)
                          @if ($value->user_id == $user)
                          <form class="" action="/like" method="post">
                              @csrf
                              <input type="hidden" name="post_id" value="{{$post->id}}">
                              <button class="l-boton" type="submit" name="button"><i class="far fa-heart"></i>Me gusta</button>
                          </form>
                        @else
                          <form class="col" action="/like" method="post">
                              @csrf
                              <input type="hidden" name="post_id" value="{{$post->id}}">
                              <button  class="l-boton" type="submit" name="button"><i class="fas fa-heart"></i>Ya no me gusta</button>
                          </form>
                        @endif
                      @endforeach
                    </div>
                    <div class="likes col col-md-6 col-sm-3">

                    </div>
                  <div class="likes col col-md-3 col-sm-3">
                      <a href="/compartir/{{$post->id}}">Compartir</a>
                  </div>
                </div>
              </div>
                    <hr>

                @empty
                  <p>Este usuario no tiene posts</p>
                @endforelse

<div class="paginate">
  {{$posts->render()}}
</div>
          </div>
       </div>
  </body>
@endsection
