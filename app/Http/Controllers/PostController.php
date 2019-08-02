<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use App\Post;
use Auth;
use App\Like;
use Illuminate\Http\Request;

class PostController extends Controller
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
          "title" => "string|min:3",
          "author" => "string|min:3",
          "image" => "file",
          "video" => "file",
        ];

        $mensajes = [
          "string" => "El campo :attribute debe ser un texto",
          "min" => "El campo :attribute debe tener al menos :min caracteres",
          "file" => "El campo :attribute debe ser una imagen o video"
        ];

        $this->validate($req, $reglas, $mensajes);

        $nuevoPost = new Post();

        if (null !== $req->file("postImg")) {

          $rutaImg = $req->file("postImg")->store("public/PostImg");
          $nombreArchivoImg = basename($rutaImg);
          $nuevoPost->image = $nombreArchivoImg;
        } else {

          $rutaVideo = $req->file("postVideo")->store("public");
          $nombreArchivoVideo = basename($rutaVideo);
          $nuevoPost->video = $nombreArchivoVideo;
        }

        $nuevoPost->title = $req["title"];
        $nuevoPost->author = $req["author"];
        $nuevoPost->user_id = $req["userId"];

        $nuevoPost->save();

        return redirect("inicio");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      $user = Auth::user()->id;
      $perfil = Profile::find($user);

      return view('crearPost', compact('perfil','user'));
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

    public function like(Request $req){
      $user = Auth::user()->id;

      $like = new Like;

      $like->user_id = $user;
      $like->post_id = $req["post_id"];

      $like->save();

      return redirect("/inicio");
    }
}
