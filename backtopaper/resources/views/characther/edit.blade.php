@extends('layouts.layout')

@yield('title', 'Edit Characther')

@section('content')
 
    <p>{{$characther->id}} {{$characther->gender->gender}} {{$characther->color->color}}</p> 

    <form action="{{route('characther.store', ['id'=>$characther->id])}}" method="post">
        @csrf
        @method('post')
        <div>
            <label for="imageFile">Upload an image:</label>
            <input type="file" name="imageFile" id="imageFile">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <button type="submit">Save</button>
    </form>

@endsection
