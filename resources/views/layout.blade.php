<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Laravel</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Main</a></li>

                        @if (session('auth') == 'Authorized')
                            <li><a href="/exit">Logout</a></li>
                        @else
                            <li><a href="/enter">Login</a></li>
                            <li><a href="/create">Register</a></li>
                        @endif

                    </ul>
                </div>
            </nav>
        </div>
    </header>
    @yield('content')
    <footer>
        <div class="container">
            <div class="container-fluid">This is footer</div>
        </div>
    </footer>
</body>
</html>