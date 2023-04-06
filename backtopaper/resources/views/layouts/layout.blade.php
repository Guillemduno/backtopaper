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
            
        </header>
        <div class="wrap-content">
        @yield('content')
        </div>
        <nav class="nav-down-wrap">
            <ul class="d-flex">
                <li>
                    <form action="{{route('random.index')}}" method="get">
                        <input type="image" src="{{asset('storage/images/home.png')}}" alt="submit">
                    </form>
                </li>
                <li>
                    <form action="{{route('random.index')}}" method="get">
                        <input type="image" src="{{asset('storage/images/search.png')}}" alt="submit">
                    </form>
                </li>
                <li>
                    <form action="{{route('characther.index')}}" method="get">
                        <input type="image" src="{{asset('storage/images/list.png')}}" alt="submit">
                    </form>
                </li>
                <li>
                    <form action="{{route('random.index')}}" method="get">
                        <input type="image" src="{{asset('storage/images/person.png')}}" alt="submit">
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</body>
</html>