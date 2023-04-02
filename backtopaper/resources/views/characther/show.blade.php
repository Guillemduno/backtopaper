@extends('layouts.layout')

@section('content')

    <h1>@yield('title', 'Show Character')</h1>

    <p>{{$characther->id}} {{$characther->gender->gender}} {{$characther->color->color}}</p>
    
    <img src="/storage/{{$characther->imageFile}}" alt="{{$characther->description}}" srcset="">

   <p>{{$characther->description}}</p>

   <form class="margin-air" action="{{route('characther.edit', ['id' => $characther->id])}}" method="get">
    <button class="btn" type="submit">Edit</button>
    </form>
@endsection
