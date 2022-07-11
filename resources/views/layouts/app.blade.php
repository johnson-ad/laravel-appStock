<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon super site</title>
    {{ asset('css/app.css') }}
</head>
<body>
    <!--include permet d'appeler des composant bien specifique -->
    @include('partials.navbar')
    <!-- le @ yield permet d'indiquer kon aura des contenuent dynamique -->
    @yield('content')
    
    {{ asset('js/app.js') }}
</body>
</html>