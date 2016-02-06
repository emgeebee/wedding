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
                        @foreach ($paths as $path=>$name)
                            <li class="{{$path}} {{$path === $selected ? 'selected' : ''}}"><a href="/{{$path}}">{{$name}}</a></li>
                        @endforeach
                    </ul>
                </header>
            @show
            <div class="container">
                @yield('content')
            </div>
        </div>
        <footer class="footer">
            &copy; Mat Bishop {{ date('Y') }}.
        </footer>
    </body>
</html>
