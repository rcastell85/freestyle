<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use App\Post;
use App\Friend;
use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
          $reglas = [
          "user_id" => "numeric",
          "name" => "string|min:3",
          "lastName" => "string|min:3",
          "gender" => "string|min:3",
          "image" => "file"
        ];

        $mensajes = [
          "string" => "El campo :attribute debe ser un texto",
          "min" => "El campo :attribute debe tener al menos :min caracteres",
          "max" => "El campo :attribute admite hasta :max caracteres",
          "numeric" => "El campo :attribute debe ser un numero",
          "file" => "El campo :attribute debe ser una imagen"
        ];

        $this->validate($req, $reglas, $mensajes);

        $nuevoPerfil = new Profile();

        $ruta = $req->file("image")->store("public/profiles");
        $nombreArchivo = basename($ruta);


        $nuevoPerfil->image = $nombreArchivo;
        $nuevoPerfil->id = $req["userId"];
        $nuevoPerfil->name = $req["name"];
        $nuevoPerfil->lastName = $req["lastName"];
        $nuevoPerfil->gender = $req["gender"];
        $nuevoPerfil->user_id = $req["userId"];

        $nuevoPerfil->save();

        return redirect("inicio");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $user = User::find($id);
      return view('profile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function perfilId($id){
      $usuario = Auth::user()->id;
      $perfil = Profile::find($id);
      $seguido = Friend::all()->pluck('user_id')->toArray();
      $posts = Post::where("user_id", "=", $perfil->id)->get();

      return view("verPerfilUsuario", compact('perfil', 'posts', 'seguido', 'usuario'));
    }

    public function seguir($id){

      $profile = Profile::find($id);
      $user = Auth::user()->id;

      $nuevoSeguidor = new Friend();

      $nuevoSeguidor->user_id = $profile->id;
      $nuevoSeguidor->friend_id = $user;

      $nuevoSeguidor->save();

      return redirect("verPerfilUsuario/$profile->id");
    }
}
