<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
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
</body>
</html>