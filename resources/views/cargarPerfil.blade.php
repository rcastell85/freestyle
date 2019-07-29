@extends('layouts.app')

@section('content')

  <body>
  {{-- <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Datos Personales') }}</div> --}}


              <div class="card-body">
                <form method="post" action="/cargarPerfil" enctype="multipart/form-data">
                  @csrf

                  <div class="">
                    <label for="image">Foto de perfil</label>
                    <input type="file" name="image" value="">
                  </div>

                  <input name="userId" type="hidden" value="{{ Auth::user()->id }}">
                  <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                   <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                   </div>
                  </div>

                  <div class="form-group row">
                      <label for="lastName" class="col-md-4 col-form-label text-md-right">Apellido</label>

                       <div class="col-md-6">
                          <input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName" autofocus>

                            @error('lastName')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-check form-check-inline" id="padre">
                      <div class="" style="text-align: center">
                        <?php if(isset($_POST["gender"]) && $_POST["gender"] == "mujer"): ?>
                          <input class="form-check-input" name="gender" type="radio" id="gridCheck" value="mujer" checked>
                        <?php else: ?>
                          <input class="form-check-input" name="gender" type="radio" id="gridCheck" value="mujer">
                        <?php endif; ?>
                        <label class="form-check-label" for="gridCheck">
                          Mujer
                        </label>
                      </div>
                      <div class="">
                        <?php if(isset($_POST["gender"]) && $_POST["gender"] == "hombre"): ?>
                          <input class="form-check-input" name="gender" type="radio" id="gridCheck" value="hombre" checked>
                        <?php else: ?>
                          <input class="form-check-input" name="gender" type="radio" id="gridCheck" value="hombre">
                        <?php endif; ?>
                        <label class="form-check-label" for="gridCheck">
                          Hombre
                        </label>
                      </div>
                      <div class="">
                        <?php if(isset($_POST["gender"]) && $_POST["gender"] == "otro"): ?>
                          <input class="form-check-input" name="gender" type="radio" id="gridCheck" value="otro" checked>
                        <?php else: ?>
                          <input class="form-check-input" name="gender" type="radio" id="gridCheck" value="otro">
                        <?php endif; ?>
                        <label class="form-check-label" for="gridCheck">
                          Otro
                        </label>
                      </div>
                  </div>
                        {{-- <div class='Born form-group row'>
                        <label for="name" class="col-md-4 col-form-label text-md-right">Fecha De Nacimiento</label>
                        <div class="col-md-6">
                          <input type="date" class='form-control'name='fecha'max='2001-01-01'>
                        </div>
                        </div> --}}


          <div class="tipo">
            <label for="intereses">Decinos que te interesa? </label>
          </div>
            <section class="int-group">

              <div class="group">
                @if(isset($_POST["interes"]) && isset($_POST["interes"]["cine"]))
                  <input class="cb" type="checkbox" name="interes" value="cine" checked>
                @else
                  <input class="cb" type="checkbox" name="interes" value="cine">
                @endif
                <label class="form-check-label" for="inlineCheckbox1">Cine/Series</label>
              </div>

              <div class="group">
                @if(isset($_POST["interes"]) && isset($_POST["interes"]["deportes"]))
                  <input class="cb" type="checkbox" name="interes" value="deportes" checked> Deportes
                @else
                  <input class="cb" type="checkbox" name="interes" value="deportes">
                @endif
                <label class="form-check-label" for="inlineCheckbox1">Deportes</label>
              </div>

              <div class="group">
                @if(isset($_POST["interes"]) && isset($_POST["interes"]["musica"]))
                  <input class="cb" type="checkbox" name="interes" value="musica" checked>
                @else
                  <input class="cb" type="checkbox" name="interes" value="musica">
                @endif
                <label class="form-check-label" for="inlineCheckbox1">Musica</label>
              </div>

                <div class="group">
                @if(isset($_POST["interes"]) && isset($_POST["interes"]["anime"]))
                  <input class="cb" type="checkbox" name="interes" value="anime" checked>
                @else
                  <input class="cb" type="checkbox" name="interes" value="anime">
                @endif
                <label class="form-check-label" for="inlineCheckbox1">Manga/anime</label>
              </div>

              <div class="group">
                @if(isset($_POST["interes"]) && isset($_POST["interes"]["literatura"]))
                  <input class="cb" type="checkbox" name="interes" value="literatura" checked> Literatura
                @else
                  <input class="cb" type="checkbox" name="interes" value="literatura">
                @endif
                <label class="form-check-label" for="inlineCheckbox1">Literatura</label>
              </div>

              <div class="group">
                @if(isset($_POST["interes"]) && isset($_POST["interes"]["gamming"]))
                  <input class="cb" type="checkbox" name="interes" value="gamming" checked>
                @else
                  <input class="cb" type="checkbox" name="interes" value="gamming">
                @endif
                <label class="form-check-label" for="inlineCheckbox1">Gamming</label>
              </div>

              <div class="group">
                @if(isset($_POST["interes"]) && isset($_POST["interes"]["Animales"]))
                  <input class="cb" type="checkbox" name="interes" value="Animales" checked>
                @else
                  <input class="cb" type="checkbox" name="interes" value="Animales">
                @endif
                <label class="form-check-label" for="inlineCheckbox1">Animales</label>
              </div>

            </section>

        {{-- </div> --}}



      <!-- Boton registro -->

                        <div id='botonRegistro'class="form-group">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarse') }}
                                </button>
                            </div>
                        </div>
                        {{-- <div class="registro-intereses"> --}}
                    </form>
                </div>
            {{-- </div>
        </div>
    </div>
</div> --}}
</body>
@endsection
