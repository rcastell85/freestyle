@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="box-perfil col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Informacion de Perfil') }}</div>

                <div class="card-body">
                  <form method="post" action="/cargarPerfil" enctype="multipart/form-data">
                    @csrf
                    <input name="userId" type="hidden" value="{{ Auth::user()->id }}">
                    <div class="form-group row">

                      <label class="col-md-4 col-form-label text-md-right" for="image">Foto de perfil</label>
                      <div class="col-md-6">
                      <input type="file" name="image" value="">
                      </div>
                    </div>


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
                      <div class="form-group row">
                        <label for="gender" class="col-md-4 col-form-label text-md-right">Genero</label>
                        <div class="col-md-8">
                          <div class="form-check form-check-inline" id="padre">
                            <div class="col-md-5">
                              <?php if (isset($_POST["gender"]) && $_POST["gender"] == "mujer"): ?>
                                <input class="f-Input form-check-input" name="gender" type="radio" id="gridCheck" value="mujer" checked>
                              <?php else: ?>
                                <input class="f-Input form-check-input" name="gender" type="radio" id="gridCheck" value="mujer">
                              <?php endif; ?>
                              <label class="f-Input form-check-label" for="gridCheck">
                                Mujer
                              </label>

                            </div>
                            <div class="col-md-5">
                              <?php if (isset($_POST["gender"]) && $_POST["gender"] == "hombre"): ?>
                                <input class="f-Input form-check-input" name="gender" type="radio" id="gridCheck" value="hombre" checked>
                              <?php else: ?>
                                <input class="f-Input form-check-input" name="gender" type="radio" id="gridCheck" value="hombre">
                              <?php endif; ?>
                              <label class="f-Input form-check-label" for="gridCheck">
                                Hombre
                              </label>

                            </div>

                            <div class="col-md-5">
                              <?php if (isset($_POST["gender"]) && $_POST["gender"] == "otro"): ?>
                                <input class="f-Input form-check-input" name="gender" type="radio" id="gridCheck" value="otro" checked>
                              <?php else: ?>
                                <input class="f-Input form-check-input" name="gender" type="radio" id="gridCheck" value="otro">
                              <?php endif; ?>
                              <label class="f-Input form-check-label" for="gridCheck">
                                Otro
                              </label>
                            </div>
                        </div>
                        </div>
                      </div>


                          {{-- <div class='Born form-group row'>
                          <label for="name" class="col-md-4 col-form-label text-md-right">Fecha De Nacimiento</label>
                          <div class="col-md-6">
                            <input type="date" class='form-control'name='fecha'max='2001-01-01'>
                          </div>
                          </div> --}}




          {{-- </div> --}}



        <!-- Boton registro -->

                          <div id='botonRegistro'class="form-group">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      {{ __('Registrarse') }}
                                  </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
