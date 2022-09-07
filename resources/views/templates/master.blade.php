<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css?v=') . time() }}">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <title>
        @yield('title')
    </title>
</head>

<body>
    <header>
        <ul class="header">
            <li><a href="/">Accueil</a></li>
            <li><a href="/articles">Articles</a></li>
            <li><a href="/ajouter-article">Ajouter un article</a></liclass=>
        </ul>
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-white">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-white">Se connecter</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-white">S'inscrire</a>
                    @endif
                @endauth
            </div>
        @endif

    </header>

    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
