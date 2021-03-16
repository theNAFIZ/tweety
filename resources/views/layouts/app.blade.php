<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <section class="px-8 py-4">
        <header class="container mx-auto">
            <a href="{{route('home')}}">
                <img class="h-10 w-10" src="http://naimurnafiz.live/assets/img/logo192.png" alt="icon"/>
            </a>
        </header>
    </section>

    <section>
        <main class="container mx-auto">

            <div class="lg:flex justify-between">
                @auth
                    <div class="lg:w-1/6  rounded">
                        @include('_sidebar-links')
                    </div>
                @endauth

                @yield('content')

                @auth
                    <div class="lg:w-1/6">
                        @include('_friends-list')
                    </div>
                @endauth
            </div>

        </main>
    </section>

</div>
</body>
</html>
