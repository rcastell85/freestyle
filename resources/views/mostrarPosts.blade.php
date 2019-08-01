@extends('layouts.app')

@section('content')

  <body><br>

        <div class="cuerpo-inicio row">

                  <!-- PARTE IZQUIERDA DEL BODY ------------------->

                  <div class="izquierda col-md-2" id="perfil">
                    <div class="foto">
                      <div class="img-perfil">
                        @foreach ($perfil as $element)
                          @if ($element->user_id ==  auth()->user()->id)
                            <img class="avatar" src="/storage/{{$element->image}}" alt="" style="width:100%">
                          @endif
                        @endforeach
                      </div>
                    </div>
                    <section class="informacion">
                      <ul>
                        <li><a href="perfil.php">Mi perfil</a></li>
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
                           <a class="nav-link text-light" href="#">Mis Amigos</a>
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
                            <img src="/storage/{{$post->image}}" alt="">
                          @else
                            <video src="/storage/{{$post->video}}" autoplay muted loop controls width="640" height="480"></video>
                          @endempty
                        </div>
                        <div class="nombre-id-post col-md-10">
                          <h5>{{$post->title}}</h5>
                        </div>
                        <div class="time-post col-md-1">
                          <p style="margin-bottom: 0px; color: gray;">2h.</p>
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
                <img class="profile" src="/storage/like2.png" alt="perfil-posteo" style="width:100%;">
              </div>
              <div class="nombre-id-post col-md-10">
               <h5>Nombre</h5>
             </div>
            </div>

            <div class="chat row">
               <div class="img-id-post col-md-2">
                 <img class="profile" src="/storage/like2.png" alt="perfil-posteo" style="width:100%;">
               </div>
               <div class="nombre-id-post col-md-10">
                 <h5>Nombre</h5>
               </div>
            </div>

            <div class="chat row">
             <div class="img-id-post col-md-2">
               <img class="profile" src="/storage/like2.png" alt="perfil-posteo" style="width:100%;">
             </div>
             <div class="nombre-id-post col-md-10">
               <h5>Nombre</h5>
             </div>
            </div>
          </div>
      </body>

@endsection
