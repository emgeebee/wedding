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
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-28963119-7', 'auto');
            ga('send', 'pageview');

        </script>
    </body>
</html>
