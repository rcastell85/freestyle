<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
      "name" => "string|min:3",
      "email" => "email|min:3",
      'password' => ['required', 'string', 'min:4', 'confirmed']
    ];

    $mensajes = [
      "string" => "El campo :attribute debe ser un texto",
      "min" => "El campo :attribute debe tener al menos :min caracteres",
      "email" => "El campo :attribute debe ser un email"
    ];

    $this->validate($req, $reglas, $mensajes);

    $nuevoUsuario = new User();

    $nuevoUsuario->name = $req["name"];
    $nuevoUsuario->email = $req["email"];
    $nuevoUsuario->password = Hash::make($req['password']);

    $nuevoUsuario->save();
    
    return redirect("profile/$nuevoUsuario->id");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
