<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="text-gray-900 leading-tight">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href={{asset('css/app.css')}} rel="stylesheet">

</head>
<body>
<div class="min-h-screen bg-blue-400 flex flex-col items-center justify-center">
    <h1 class="text-6xl m-8">Tweety</h1>
    <div class="items-center 2xl:group-hover:text-blue-300">
        @auth
            <a href="{{route('home')}}">Home</a>
        @else
            <a class="m-2" href="{{route('login')}}">Login</a>
            <a class="m-2" href="{{route('register')}}">Register</a>
        @endauth</div>
</div>
</body>
</html>
