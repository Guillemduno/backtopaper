@extends('layouts.layout')

@yield('title', 'List of Characthers')

@section('content')
<ul>
    @foreach ($characther as $item) 
    <li> {{$item['user_id']}} - 
        {{$item['gender']}}</li> 
    @endforeach
</ul>

@endsection
    