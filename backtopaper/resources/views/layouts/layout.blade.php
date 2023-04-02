<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        <header>
            <ul>
                <li>
                    <a href="{{route('random.index')}}">Random</a>
                </li>
                <li>
                    <a href="{{route('characther.index')}}">Characthers</a>
                </li>
            </ul>
        </header>
        @yield('content')
    </div>
</body>
</html>