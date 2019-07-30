@extends('layouts.app')

@section('content')

  <h2>Posts</h2>

      @forelse ($posts as $post)
          <article class="">
            
            <p>Autor: {{$post->author}}</p>
            <p>Titulo: {{$post->title}}</p>
            <div class="">
              @empty ($post->video)
                <img src="/storage/{{$post->image}}" alt="">
              @else
                <video src="/storage/{{$post->video}}" autoplay muted loop controls width="640" height="480"></video>
              @endempty

            </div>

            {{-- <a href="/product/{{$product->id}}">Ver más</a>
            <a href="/product/edit/{{$product->id}}">Editar</a> --}}
          </article>
      @empty
        <p>Este usuario no tiene posts</p>
      @endforelse

    @endsection
