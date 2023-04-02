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
            <ul class="d-flex">
                <li>
                    <form action="{{route('random.index')}}" method="get">
                        <button type="submit">Random</button>
                    </form>
                </li>
                <li>
                    <form action="{{route('characther.index')}}" method="get">
                        <button type="submit">Characters</button>
                    </form>
                </li>
            </ul>
        </header>
        <div class="wrap-content">
        @yield('content')
        </div>
    </div>
</body>
</html>