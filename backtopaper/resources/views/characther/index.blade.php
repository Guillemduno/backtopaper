@extends('layouts.layout')

@yield('title', 'List of Characthers')

@section('content')
<ul>
    @foreach ($characthers as $key => $characther) 
    <li>
        <a href="{{route('characther.show', ['id'=>$characther->id])}}">
        {{$key+1}} {{$characther->id}} {{$characther->gender->gender}} - {{$characther->color->color}} <li> 
        </a>
            @endforeach
</ul>
@endsection
    