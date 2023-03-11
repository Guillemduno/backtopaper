@extends('layouts.layout')

@yield('title', 'Random Characther')

@section('content')
    <div>
        <h1>Your charachter: </h1>
        
        @if (@isset($text))
        <p>{{$text}}</p>
        @else
        <p>Text not set yet</p> 
        @endif
    </div>

    <form action="{{route('random.index')}}" method="get">
        @csrf
        <button type="submit">Create</button>
    </form>
@endsection
    