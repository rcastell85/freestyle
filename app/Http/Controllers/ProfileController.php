<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
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

        $ruta = $req->file("image")->store("public");
        $nombreArchivo = basename($ruta);


        $nuevoPerfil->image = $nombreArchivo;
        $nuevoPerfil->id = $req["userId"];
        $nuevoPerfil->name = $req["name"];
        $nuevoPerfil->lastName = $req["lastName"];
        $nuevoPerfil->gender = $req["gender"];
        $nuevoPerfil->interes = $req["interes"];
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

    public function cargar(){

    }
}
