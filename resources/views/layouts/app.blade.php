<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header class="bg-info-subtle mb-3">
        <div class="container">
            <nav class="nav py-4 d-flex justify-content-center">
                <a class="nav-link active" aria-current="page" href="{{route('comics.index')}}">Home</a>
                <a class="nav-link" href="{{route('comics.create')}}">Aggiungi un fumetto</a>
            </nav>
        </div>
        <div class="d-flex">
            <img src="https://static.dc.com/2024-05/DC.com_20240524_WE_TheVigil_Marquee_3x1_.jpg?w=1200" class="flex-fill" alt="hero">
        </div>
    </header>

    <main>
        @yield('content')
    </main>

</body>

</html>