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
        <ul class="flex w-10/12">
            <li><a href="/">Accueil</a></li>
            <li><a href="/articles">Articles</a></li>
            <li><a href="/ajouter-article">Ajouter un article</a></li>
            <div class="flex justify-end ">
                @if (Route::has('login'))
                    @auth
                        <li class="">
                            <a href="{{ url('/dashboard') }}" class="text-white">Dashboard</a>
                        </li>
                    @else
                        <li class="">
                            <a href="{{ route('login') }}" class="text-white">Se connecter</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="">
                                <a href="{{ route('register') }}" class="text-white">S'inscrire</a>
                            </li>
                        @endif
                    @endauth
            </div>
            @endif
        </ul>


    </header>

    <div>
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
