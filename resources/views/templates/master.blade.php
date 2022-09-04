<html>

<head>
    @yield('meta')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <ul>
            <li><a href="/">Accueil</a></li>
            <li><a href="/articles">Articles</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </header>
    <!-- <style>
    .container {
        background-color: red;
    }
    </style> -->
    <div class="container">
        @yield('content')
    </div>
</body>

</html>