@extends('layouts.layout')

@yield('title', 'List of Characthers')

@section('content')
<ul>
    @foreach ($characthers as $characther) 
    <li>a {{$characther->gender->gender}} and the color is {{$characther->color->color}} <li> 
    @endforeach
</ul>
@endsection
    