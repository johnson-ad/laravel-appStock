@extends('layouts.app')

@section('content')
    <h1>Liste des Articles</h1>
    <!-- passage des variable depuis le controller vers la vue -->
    <!-- <h2> $title </h2>
    <h2> $title2 </h2> -->

    <!-- passage d'un tableau depuis le controller vers la vue -->
    @foreach ($posts as $post)
    <h3>{{ $post }}</h3>
    @endforeach
@endsection

