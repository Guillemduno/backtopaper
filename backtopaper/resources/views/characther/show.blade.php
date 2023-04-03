@extends('layouts.layout')

@section('content')

    <h1>@yield('title', 'Show Character')</h1>

    <p>{{$characther->id}} {{$characther->gender->gender}} {{$characther->color->color}}</p>
    
    <img src="/storage/{{$characther->imageFile}}" alt="{{$characther->description}}" srcset="">

   <p>{{$characther->description}}</p>

   <form class="margin-air" action="{{route('characther.edit', ['id' => $characther->id])}}" method="get">
    <button class="btn" type="submit">Edit</button>
    </form>

    <form class="margin-air" action="{{route('characther.destroy', ['id'=> $characther->id])}}" method="post">
        @csrf
        <button onclick="confirm('Are you sure that you want delete this character?')" type="submit">Delete</button>
    </form>
    <form class="margin-air" action="{{route('characther.index')}}" method="get">
        @csrf
        <button type="submit">Back</button>
    </form>
@endsection
