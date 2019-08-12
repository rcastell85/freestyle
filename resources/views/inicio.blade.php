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
        <div class="col-md-1">

        </div>
        <div class="centro col-md-7">
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
              <div class="img-id-post col-md-2" id="fotico">
                <a href="/verPerfilUsuario/{{$perfil->id}}" class="perfil-username"></a>
                  <img class="img-p" src="/storage/profiles/{{$post->photo}}" alt="" style="width:50px">
              </div>
              <div class="nombre-id-post col-md-2">
                  <h5 class="h5-inicio">{{$post->author}}</h1>
              </div>
              <div class="col-md-5 titulo">
                <h3 class="">{{$post->title}}</h3>
              </div>
              <div class="time-post col-md-3">
                  <p class="time-p" style="">{{$post->created_at->diffForHumans()}}</p>
              </div>
          </div>
            <div class="contenido-post">
            @empty ($post->video)
                <img class='postImg'src="/storage/PostImg/{{$post->image}}" alt="" width="" height="">
            @else
                <video class="postImg"src="/storage/{{$post->video}}" muted loop controls width="700" height="500"> </video>
            @endempty
            </div>

              <div class="parteBajaPost">
                <div class="like-share row">

                    <div class="likes col-md-4 col-sm-4">
                        @if (!$post->likes->contains('user_id', $user))
                          <form class="" action="/like" method="post">
                              @csrf
                              <input type="hidden" name="post_id" value="{{$post->id}}">
                              <button class="l-boton" type="submit" name="button"><a href="#" class="lk"><i class="far fa-heart"> Me gusta </i></a></button>
                          </form>
                         @else
                           <form class="" action="/dislike" method="post">
                               @csrf
                               <input type="hidden" name="like_id" value="{{$post->likes->where('user_id', '=', $user)}}">
                               <button  class="l-boton" type="submit" name="button"><a href="#" class="lk"><i class="fas fa-heart"> Ya no me gusta</i></a></button>
                           </form>
                        @endif
                    </div>
                    <div class="likes col-md-4 col-sm-4 contador">
                      <p class="text-white">{{$post->likes->count()}}</p>
                    </div>
                  <div class="likes col col-md-4 col-sm-4 text-white share">
                      <a class="link-share" href="/compartir/{{$post->id}}">Compartir  <i class="fas fa-share"></i></a>
                  </div>
                </div>
              </div>
              <div class="titleClass nombre-id-post col-md-12 col-sm-12">
                  <h5><a href="#" class="lk"><strong>{{$post->author}}</strong></a></h5><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
          </div>
                @empty
                  <p>Este usuario no tiene posts</p>
                @endforelse

<div class="paginate">
  {{-- {{$posts->render()}} --}}
</div>
          </div>
       </div>
       <div class="col-md-1">

       </div>
  </body>
@endsection
