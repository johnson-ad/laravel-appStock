@extends('layouts.app')

@section('content')
    <div class="container-fuild mt-5 mb-5 ">
    <!-- passage des variable depuis le controller vers la vue -->
    <!-- <h2> $title </h2>
    <h2> $title2 </h2> -->

    <!--La condition permet de verifier si on a un post dans la data base-->
    @if ($posts->count() > 0)
            <!-- passage d'un tableau depuis le controller vers la vue -->
            <ul class="list-group m-4 col-7">
                <li class="list-group-item active" aria-current="true">Liste des articles</li>
                @foreach ($posts as $post)
                <li class="list-group-item"><a href="{{ route('posts.show', ['id'=>$post->id])  }}">{{ $post->title}}</a></li>
                @endforeach
              </ul>
        @else
            <span>Aucun post en base de donner</span>
        @endif
    </div>
@endsection

