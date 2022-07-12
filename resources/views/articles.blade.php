@extends('layouts.app')

@section('content')
    <div class="container-fuild mt-5 mb-5 p-2">
        <h1>Liste des Articles</h1>
    <!-- passage des variable depuis le controller vers la vue -->
    <!-- <h2> $title </h2>
    <h2> $title2 </h2> -->

    <!--La condition permet de verifier si on a un post dans la data base-->
    @if ($posts->count() > 0)
            <!-- passage d'un tableau depuis le controller vers la vue -->
            @foreach ($posts as $post)
            <h3><a href="{{ route('posts.show', ['id'=>$post->id])  }}">{{ $post->title}}</a></h3>
            @endforeach
        @else
            <span>Aucun post en base de donner</span>

        @endif
   
    </div>
@endsection

