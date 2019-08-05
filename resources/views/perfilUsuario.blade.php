@extends('layouts.app')

@section('content')


<body>

      <div class="cuerpo-inicio row">

<<<<<<< HEAD
=======

>>>>>>> 011f93c46f9984376ba61e6a85905dc1d972363b
                <!-- PARTE IZQUIERDA DEL BODY ------------------->

                <div class="izquierda col-md-3" id="perfil">
                  <div class="foto">
                    <div class="img-perfil">
                        <img class="avatar" src="/storage/profiles/{{$perfil->image}}" alt="" style="width:100%">
<<<<<<< HEAD
=======

                  <div class="izquierda col-md-2" id="perfil">
                    <div class="foto">
                      <div class="img-perfil">
                            <img class="avatar" src="/storage/profiles/{{$perfil->image}}" alt="" style="width:100%">
                      </div>
                    </div>
                    <section class="informacion">
                      <ul>
                        <li><a href="/perfilUsuario">Mi perfil</a></li>
                        <li><a href="/seguidos">Mis Amigos</a></li>
                        <li><a href="#">Mis Posteos</a></li>
                        <li><a href="#">Mis Intereses</a></li>
                      </ul>
                    </section>
                  </div>

          <!-- PARTE CENTRAL DEL BODY ---------------------------->

                  <div class="centro col-md-7">
                    <div class="cuerpo-central">
                      <ul class="menu-p nav nav-pills nav-justified text-white bg-dark btn-lg">
                         <li class="it nav-item">
                           <a class="link-menu nav-link text-light" href="/inicio">Inicio</a>
                         </li>
                         <li class="it nav-item">
                           <a class="nav-link text-light" href="/buscar">Mis Amigos</a>
                         </li>
                         <li class="it nav-item">
                             <a class="nav-link text-light" href="#">Link</a>
                         </li>
                     </ul><br>


                    <div class="search">
                      <input type="text" name="search" value="" placeholder="Search..." style="width: 100%;">
                    </div>

                    @forelse ($posts as $post)

                    <div class="post">
                      <div class="id-post row">
                        <div class="nombre-id-post col-md-10">
                          <h5>{{$post->author}}</h5>
                        </div>
                        <div class="">
                          @empty ($post->video)
                            <img src="/storage/PostImg/{{$post->image}}" alt="">
                          @else
                            <video src="/storage/{{$post->video}}" muted loop controls width="640" height="480"></video>
                          @endempty
                        </div>
                        <div class="nombre-id-post col-md-10">
                          <h5>{{$post->title}}</h5>
                        </div>
                        <div class="time-post col-md-1">
                          <p style="margin-bottom: 0px; color: gray;">2h.</p>
                        </div>
                      </div>
                      <div class="like-share row">
                          <div class="likes col-md-6">

                              {{-- @if (!$post->likes->has(Auth::user()->id)) --}}
                                <form class="" action="/like" method="post">
                                    @csrf
                                    <input type="hidden" name="post_id" value="{{$post->id}}">
                                    <button type="submit" name="button"><i class="far fa-heart"></i>Me gusta</button>
                                </form>
                              {{-- @else --}}
                                <form class="" action="/like" method="post">
                                    @csrf
                                    <input type="hidden" name="post_id" value="{{$post->id}}">
                                    <button type="submit" name="button"><i class="fas  fa-heart"></i>Ya no me gusta</button>
                                </form>
                            {{-- @endif --}}
                            <a href="#"><input name="like" type="hidden" value= 1>likes</a>
                          </div>
                        <div class="likes col-md-6">
                            <a href="#">Compartir</a>
                        </div>
                      </div>

>>>>>>> 011f93c46f9984376ba61e6a85905dc1d972363b
                    </div>
                  </div>
                  <section class="informacion">
                    <ul class="lista-izquierda list-group"style="list-style: none";>
                      <li class='cambio list-group-item'><a href="/inicio">Inicio</a></li>
                      <li class='cambio list-group-item'><a href="/perfilUsuario">Perfil</a></li>
                      <li class='cambio list-group-item' ><a href="#">Amigos</a></li>
                      <li class='cambio list-group-item'><a href="#">Posteos</a></li>

                    </ul>
                  </section>
                </div>

                    <!-- PARTE CENTRAL DEL BODY ---------------------------->

        <div class="centro col-md-9">
          <div class="cuerpo-central">

            <ul class="menu-p nav nav-pills nav-justified text-white bg-dark btn-lg">
               <li class="it nav-item">
                 <a class="link-menu nav-link text-light" href="/crearPost">Nuevo Post</a>
               </li>
               <li class="it nav-item">
                 <a class="nav-link text-light" href="/buscar">Buscar</a>
               </li>
               <li class="it nav-item">
                   <a class="nav-link text-light" href="#">Link</a>
               </li>
            </ul><br>

            <h3>Datos de Contacto</h3>
            <ul>
              <li>Nombre: {{ $perfil->name }}</li>
              <li>Apellido: {{$perfil->lastName}}</li>
              <li>Email: {{auth()->user()->email}}</li>
            </ul>




      @forelse ($posts as $post)
        <div class="post">
          <div class="id-post row">
              <div class="img-id-post col col-md-1">
                  <img class="img-p" src="/storage/profiles/{{$post->perfil->image}}" alt="" style="width:50px">
              </div>
              <div class="nombre-id-post col col-md-1" style="">
                  <h5 class="h5-inicio">{{$post->author}}</h5>
              </div>
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
                    <div class="likes col col-md-6">

                        {{-- @if (!$post->hearts->has(Auth::user()->id)) --}}
                          <form class="col" action="/like" method="post">
                              @csrf
                              <input type="hidden" name="post_id" value="{{$post->id}}">
                              <button class="l-boton" type="submit" name="button"><i class="far fa-heart"></i>Me gusta</button>
                          </form>
                        {{-- @else --}}
                          <form class="col" action="/like" method="post">
                              @csrf
                              <input type="hidden" name="post_id" value="{{$post->id}}">
                              <button  class="l-boton" type="submit" name="button"><i class="fas  fa-heart"></i>Ya no me gusta</button>
                          </form>
                         {{-- @endif --}}
                         {{-- @foreach ($likes as $value)
                          @if ($post->id == $value)
                            <p style="color:#fff">
                              like
                            </p>
                          @endif
                        @endforeach --}}
                    </div>
                  <div class="likes col col-md-6">
                      <a class="compartir"href="#">Compartir</a>
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
