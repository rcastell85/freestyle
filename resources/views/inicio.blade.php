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
                 <a class="link-menu nav-link text-light" href="#">Nuevo Post +</a>
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
          <div class="post">
            <div class="id-post row">
              <div class="img-id-post col-md-1">
                <img class="profile" src="/img/like2.png" alt="perfil-posteo" style="width:100%;">
              </div>
              <div class="nombre-id-post col-md-10">
                <h5>Nombre</h5>
              </div>
              <div class="time-post col-md-1">
                <p style="margin-bottom: 0px; color: gray;">2h.</p>
              </div>
            </div>
            <div class="post-img">
                <div class="principal-post">
                  <img class="" src="/img/free.jpg" alt="" style="width: 100%; height: 350px;">
                  <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>
                </div>
            </div>
            <div class="like-share row">
              <div class="likes col-md-6">
                <a href="#"><i class="far fa-arrow-alt-circle-up" style="width: 20px;"></i><p class="pie">500 likes</p></a>
              </div>
              <div class="likes col-md-6">
                <a href="#"><i class="far fa-share-square"></i><p class="pie">Compartir</p></a>
              </div>
            </div>
          </div>

          <div class="post">
            <div class="id-post row">
              <div class="img-id-post col-md-1">
                <img class="profile" src="/img/like2.png" alt="perfil-posteo" style="width:100%;">
              </div>
              <div class="nombre-id-post col-md-10">
                <h5>Nombre</h5>
              </div>
              <div class="time-post col-md-1">
                <p style="margin-bottom: 0px; color: gray;">2h.</p>
              </div>
            </div>
            <div class="post-img">
                <div class="principal-post">
                  <img class="" src="/img/free.jpg" alt="" style="width: 100%; height: 350px;">
                  <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>
                </div>
            </div>
            <div class="like-share row">
              <div class="likes col-md-6">
                <a href="#"><i class="far fa-arrow-alt-circle-up" style="width: 20px;"></i><p class="pie">500 likes</p></a>
              </div>
              <div class="likes col-md-6">
                <a href="#"><i class="far fa-share-square"></i><p class="pie">Compartir</p></a>
              </div>
            </div>
          </div>

          <div class="post">
            <div class="id-post row">
              <div class="img-id-post col-md-1">
                <img class="profile" src="/img/like2.png" alt="perfil-posteo" style="width:100%;">
              </div>
              <div class="nombre-id-post col-md-10">
                <h5>Nombre</h5>
              </div>
              <div class="time-post col-md-1">
                <p style="margin-bottom: 0px; color: gray;">2h.</p>
              </div>
            </div>
            <div class="post-img">
                <div class="principal-post">
                  <img class="" src="/img/free.jpg" alt="" style="width: 100%; height: 350px;">
                  <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>
                </div>
            </div>
            <div class="like-share row">
              <div class="likes col-md-6">
                <a href="#"><i class="far fa-arrow-alt-circle-up" style="width: 20px;"></i><p class="pie">500 likes</p></a>
              </div>
              <div class="likes col-md-6">
                <a href="#"><i class="far fa-share-square"></i><p class="pie">Compartir</p></a>
              </div>
            </div>
          </div>
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
           <div class="chat row">
             <div class="img-id-post col-md-2">
               <img class="profile" src="/storage/like2.png" alt="perfil-posteo" style="width:100%;">
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
