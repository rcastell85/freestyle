@extends('layouts.app')

@section('content')

  <body><br>

        <div class="cuerpo-inicio row">

                  <!-- PARTE IZQUIERDA DEL BODY ------------------->

          <div class="izquierda col-md-2" id="perfil">
            <div class="foto">
              <div class="img-perfil">
                  {{-- <img class="avatar" src="/storage/{{$user->perfil->image}}" alt="" style="width:100%"> --}}
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


            <div class="search">
              <input type="text" name="search" value="" placeholder="Search..." style="width: 100%;">
            </div>

            <div class="postear">
              <form class="postForm" action="/crearPost" method="post" enctype="multipart/form-data">
                @csrf
                        <input name="userId" type="hidden" value="{{ Auth::user()->id }}">
                        <input name="author" type="hidden" value="{{ Auth::user()->username }}">
                        <div class="tituloPost">
                          <label for="title">Titulo de tu post</label>
                          <input type="text" name="title" value="" placeholder="Mi titulo...">
                        </div>
                        <div class="postImg">
                          <label for="postImg">Subi una imagen</label>
                          <input type="file" name="postImg" value="" placeholder="Subi lo que quieras...">
                        </div>
                        <div class="postVideo">
                          <label for="postVideo">Subi un video</label>
                          <input type="file" name="postVideo" value="" placeholder="Subi lo que quieras...">
                        </div>
                        <div id='botonPost'class="form-group">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Postear') }}
                                </button>
                            </div>
                        </div>


                      </form>
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
