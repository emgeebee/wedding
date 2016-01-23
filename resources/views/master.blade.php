<html>
    <head>
        <title>App Name - @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="/css/index.css">
    </head>
    <body class="body">
        <div class="main">
            @section('sidebar')
                <header class="header">
                    <ul>
                        <li class="home"><a href="/"></a></li>
                        <li><a href="/directions">Directions</a></li>
                        <li><a href="/rsvp">RSVP</a></li>
                        <li><a href="/accomodation">Accomodation</a></li>
                    </ul>
                </header>
            @show
            <div class="container">
                @yield('content')
            </div>
        </div>
    </body>
    <footer>
    </footer>
</html>
