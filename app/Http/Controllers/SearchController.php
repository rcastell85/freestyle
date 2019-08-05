<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Auth;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = Auth::user()->id;
      $perfil = Profile::find($user);

      return view('buscar', compact('user','perfil'));  //
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
    // public function buscarAmigos($search)
    // {
    //   $search=urldecode($search);
    //   $users=Profile::select()
    //     ->where('user','LIKE','%'.$search.'%')
    //     ->ordeBy('name','desc')
    //     ->get();
    //   if(count($users)==0){
    //     return view('/buscar')
    //     ->with('message','No hay resultados que mostrar')
    //     ->with('search',$search);
    //   }else{
    //     return view('/buscar')
    //     ->with('users',$users)
    //     ->with('search',$search);
    //   }
    //
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      $user = Auth::user()->id;
      $users = User::all();
      $perfil = Profile::find($user);
      $perfiles = Profile::orderBy('name','asc')->paginate(5);

      return view('buscar', compact('user', 'perfiles','users', 'perfil'));  //
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
