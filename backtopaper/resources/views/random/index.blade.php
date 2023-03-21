@extends('layouts.layout')

@yield('title', 'Random Characther')

@section('content')
    <div>
        @if (@isset($text))
            <p>Your charachter is...</p>
            <p>{{$text}}</p>
        @else
            <p>Press the button to generate a random characther!</p> 
        @endif
    </div>

    <form action="{{route('random.index')}}" method="get">
        @csrf
        <input type="hidden" name="clicked" value="true">
        <button type="submit" value="clicked">Generate a characther</button>
    </form>
@endsection
    