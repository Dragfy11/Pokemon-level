<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Pokemon</title>
</head>
<body>
    @include('components.navbar')
    @yield('content')
</body>
<script src="{{asset('js/app.js')}}"></script>
</html>