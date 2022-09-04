<html>

<head>
    <link rel="stylesheet" href="../../css/app.css">
    @yield('meta')
</head>

<body>
    <header>
        <ul>
            <li><a href="/">Accueil</a></li>
            <li><a href="/articles">Articles</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </header>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>