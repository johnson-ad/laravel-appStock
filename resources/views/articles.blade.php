<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
</head>

<body>
    <h1>Liste des Articles</h1>
    <!-- passage des variable depuis le controller vers la vue -->
    <!-- <h2> $title </h2>
    <h2> $title2 </h2> -->

    <!-- passage d'un tableau depuis le controller vers la vue -->
    @foreach ($posts as $post)
    <h3>{{ $post }}</h3>
    @endforeach










</body>

</html>