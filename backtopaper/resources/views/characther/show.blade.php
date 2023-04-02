@extends('layouts.layout')

@yield('title', 'Show Characther')

@section('content')

    <p>{{$characther->id}} {{$characther->gender->gender}} {{$characther->color->color}}</p>
    
    <img src="/storage/{{$characther->imageFile}}" alt="{{$characther->description}}" srcset="">

   <p>{{$characther->description}}</p>

   {{-- <a href="{{route('characther.edit', ['id' => $characther->id])}}">Edit</a> --}}

   <form action="{{route('characther.edit', ['id' => $characther->id])}}" method="get">
    <button class="btn" type="submit">Edit</button>
    </form>
@endsection
