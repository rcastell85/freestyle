@extends('layouts.app')

@section('content')


<body>

      <div class="cuerpo-inicio row">

                <!-- PARTE IZQUIERDA DEL BODY ------------------->

        <div class="izquierda col-md-2" id="perfil">
          <div class="foto">
            <div class="img-perfil">
                <img class="avatar" src="/storage/profiles/{{$perfil->image}}" alt="" style="width:100%">
            </div>
          </div>
          <section class="informacion">
            <ul style="list-style: none";>
              <li><a href="/perfilUsuario">Mi perfil</a></li>
              <li><a href="#">Mis Amigos</a></li>
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
                 <a class="link-menu nav-link text-light" href="/crearPost">Nuevo Post +</a>
               </li>
               <li class="it nav-item">
                 <a class="nav-link text-light" href="/buscar">Buscar</a>
               </li>
               <li class="it nav-item">
                   <a class="nav-link text-light" href="#">Link</a>
               </li>
            </ul><br>

           {{-- {{ $users= User::find(1) }} --}}

           <h4>Bienvenido {{ $perfil->name }}</h4>
           <p>Username: {{ auth()->user()->username }}</p>

          <div class="search">
            <input type="text" name="search" value="" placeholder="Search..." style="width: 100%;">
          </div>

                @forelse ($posts as $post)

                <div class="post">
                  <div class="id-post row">
                    <div class="img-id-post col-md-1">
                      <img src="/storage/{{$post->perfil->image}}" alt="" style="width: 40px;">
                    </div>
                    <div class="nombre-id-post col-md-10">
                      <h5>{{$post->author}}</h5>
                    </div>
                    <div class="time-post col-md-1">
                      <p style="margin-bottom: 0px; color: gray;">2h.</p>
                    </div>
                  </div>


                    <div class="">
                      @empty ($post->video)
                        <img src="/storage/{{$post->image}}" alt="" style="max-width: 80%;">
                      @else
                        <video src="/storage/{{$post->video}}" muted loop controls style="max-width: 80%;"></video>
                      @endempty
                    </div>
                    <div class="nombre-id-post col-md-10">
                      <h5>{{$post->title}}</h5>
                    </div>
                    <div class="time-post col-md-1">
                      <p style="margin-bottom: 0px; color: gray;">2h.</p>
                    </div>
                    <div class="like-share row">
                      <div class="likes col-md-6">
                        @if (!$post->likes->has(Auth::user()->id))
                        <form class="" action="/like" method="post">
                          @csrf
                          <input type="hidden" name="post_id" value="{{$post->id}}">
                          <input type="hidden" name="sumarLike" value="1">
                          <button type="submit" name="button"><i class="far fa-heart"></i>Me gusta</button>
                        </form>

                      @else
                        <form class="" action="/like" method="post">
                          @csrf
                          <input type="hidden" name="post_id" value="{{$post->id}}">
                          <input type="hidden" name="restarLike" value="1">
                          <button type="submit" name="button"><i class="fas fa-heart"></i>Ya no me gusta</button>
                        </form>
                      @endif
                      </div>
                      <div class="likes col-md-6">
                        <a href="#">Compartir</a>
                      </div>
                    </div>
                </div>
                @empty
                  <p>Este usuario no tiene posts</p>
                @endforelse

            </div>
          </div>

                      <!-- PARTE DERECHA DEL BODY ---------------------------------------->


       <div class="derecha col-md-3">

           <div class="chat row">
            <div class="img-id-post col-md-2">
               <img class="profile" src="/img/like2.png" alt="perfil-posteo" style="width:100%;">
             </div>
             <div class="nombre-id-post col-md-10">
               <h5>Nombre</h5>
             </div>
           </div>
           <div class="chat row">
             <div class="img-id-post col-md-2">
               <img class="profile" src="/img/like2.png" alt="perfil-posteo" style="width:100%;">
             </div>
             <div class="nombre-id-post col-md-10">
               <h5>Nombre</h5>
             </div>
           </div>
           <div class="chat row">
             <div class="img-id-post col-md-2">
               <img class="profile" src="/img/like2.png" alt="perfil-posteo" style="width:100%;">
             </div>
             <div class="nombre-id-post col-md-10">
               <h5>Nombre</h5>
             </div>
           </div>
           <div class="chat row">
             <div class="img-id-post col-md-2">
               <img class="profile" src="/img/like2.png" alt="perfil-posteo" style="width:100%;">
             </div>
             <div class="nombre-id-post col-md-10">
               <h5>Nombre</h5>
             </div>
           </div>
           <div class="chat row">
             <div class="img-id-post col-md-2">
               <img class="profile" src="/img/like2.png" alt="perfil-posteo" style="width:100%;">
             </div>
             <div class="nombre-id-post col-md-10">
               <h5>Nombre</h5>
             </div>
           </div>
           <div class="chat row">
             <div class="img-id-post col-md-2">
               <img class="profile" src="/img/like2.png" alt="perfil-posteo" style="width:100%;">
             </div>
             <div class="nombre-id-post col-md-10">
               <h5>Nombre</h5>
             </div>
           </div>
           <div class="chat row">
             <div class="img-id-post col-md-2">
               <img class="profile" src="/img/like2.png" alt="perfil-posteo" style="width:100%;">
             </div>
             <div class="nombre-id-post col-md-10">
               <h5>Nombre</h5>
             </div>
           </div>

       </div>
      </div>
  </body>
@endsection
