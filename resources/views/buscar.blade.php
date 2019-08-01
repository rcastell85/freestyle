@extends('layouts.app')

@section('content')


<body><br>

      <div class="cuerpo-inicio row">

                <!-- PARTE IZQUIERDA DEL BODY ------------------->

        <div class="izquierda col-md-2" id="perfil">
          <div class="foto">
            <div class="img-perfil">
                <img class="avatar" src="/storage/{{$perfil->image}}" alt="" style="width:100%">
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

           {{-- {{ $users= User::find(1) }} --}}

           <h4>Bienvenido {{ $perfil->name }}</h4>
           <p>Username: {{ auth()->user()->username }}</p>

          <div class="search">
            <input type="text" name="search" value="" placeholder="Search..." style="width: 100%;">
          </div>
          @forelse ($users as $user)
                         <div class="">
                           <div class="">
                             <div class="">
                               <img src="/storage/profiles/{{$user->image}}" alt="" style="width: 50px;">
                               <h5>{{$user->name}}</h5>
                             </div>
                         @empty
                           <p>Este usuario no tiene posts</p>
                         @endforelse

                </div>
                </div>
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
                   </div>
                 </body>
               @endsection
