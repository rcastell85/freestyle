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
                        <li class='cambio list-group-item'><a href="perfil.php">Perfil</a></li>
                        <li class='cambio list-group-item' ><a href="#">Amigos</a></li>
                        <li class='cambio list-group-item'><a href="#">Posteos</a></li>

                      </ul>
                    </section>
                  </div>

                      <!-- PARTE CENTRAL DEL BODY ---------------------------->

          <div class="centro col-md-9">
            <div class="cuerpo-central">
              <ul class=" menu-p nav nav-pills nav-justified text-white bg-dark btn-lg">
                 <h1 id='menu-post'>Crear Post</h1>
             </ul><br>

                <div class="postear">
              <form class="postForm" action="/crearPost" method="post" enctype="multipart/form-data">
                @csrf
                        <input name="userId" type="hidden" value="{{ Auth::user()->id }}">
                        <input name="author" type="hidden" value="{{ Auth::user()->username }}">
                        <div class="input-group mb-3 input-group-lg">
                          <div class="inputPost input-group-prepend">
                            <label for='textPost'class="input-group-text">Titulo</label>
                            <input id="textPost"type="text" class="form-control" name="title"placeholder="Mi nuevo post....">
                          </div>

                        </div>
                        <div class="postImg1">
                          <label for="postImg1">Subi una imagen</label>
                          <br>
                          <input type="file" name="postImg" value="" placeholder="Subi lo que quieras...">
                        </div>
                        <br>
                        <div class="postVideo">
                          <label for="postVideo">Subi un video</label>
                          <br>
                          <input type="file" name="postVideo" value="" placeholder="Subi lo que quieras...">
                        </div>
                        <div id='botonPost'class="form-group">
                            <div class="postear-b col-md-6 offset-md-4">
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




      </div>
    </body>
  @endsection
