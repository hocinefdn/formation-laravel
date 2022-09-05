<html>

<head>
    <meta charset="UTF-8">
<meta name="description" content="Tutoriel Laravel 9 gratuit">
<meta name="keywords" content="HTML, CSS, JavaScript">
<meta name="author" content="John Doe">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css?v=').time() }}">
    <title>
        @yield('title')
    </title>
</head>

<body>
    <header>
        <ul class="header">
            <li><a href="/">Accueil</a></li>
            <li><a href="/articles">Articles</a></li>
            <li><a href="/ajouter-article">Ajouter un articles</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/connexion">Connexion</a></li>
            <li><a href="/inscription">Inscription</a></li>
        </ul>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <script src="{{asset('js/app.js')}}"></script>

</body>

</html>
