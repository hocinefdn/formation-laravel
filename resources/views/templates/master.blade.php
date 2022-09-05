<html>

<head>
    @yield('meta')
    <link rel="stylesheet" href="{{ asset('css/app.css?v=').time() }}">
</head>

<body>
    <header>
        <ul class="header">
            <li><a href="/">Accueil</a></li>
            <li><a href="/articles">Articles</a></li>
            <li><a href="/ajouter-article">Ajouter un articles</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <script src="{{asset('js/app.js')}}"></script>

</body>

</html>
