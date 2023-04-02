@extends('layouts.layout')



@section('content')

    <h1>@yield('title', 'Random Character')</h1>

    <div class="randomResult">
        @if (@isset($text))
            <p>Your charachter will be...</p>
            <p class="randomText">{{$text}}</p>
        @else
            <p>Press the button to generate a random character!</p> 
        @endif
    </div>

    <form action="{{route('random.index')}}" method="get">
        @csrf
        <input type="hidden" name="clicked" value="true">
        <button class="btn" type="submit" value="clicked">Generate a character</button>
    </form>
@endsection
    