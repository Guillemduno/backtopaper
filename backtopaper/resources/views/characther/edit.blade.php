@extends('layouts.layout')

@section('content')
    <h1>@yield('title', 'Edit Character')</h1>
    <p>{{$characther->id}} {{$characther->gender->gender}} {{$characther->color->color}}</p>
    
    <img src="/storage/{{$characther->imageFile}}" alt="{{$characther->description}}" srcset="">

    <form  action="{{route('characther.store', ['id'=>$characther->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div>
            <label for="showInFeed">Show in Feed:</label>
            <input type="checkbox" name="showInFeed" id="showInFeed" {{ $characther->showInFeed == 'on' ? 'checked' : '' }}/>
        </div>
        <div class="margin-air">
            <label for="imageFile">Upload an image:</label>
            <input type="file" name="imageFile" id="imageFile">
        </div>
        <div class="margin-air">
            <label for="description">Description:</label>
                <textarea name="description" id="description" >{{old('description', $characther->description)}}</textarea>
        </div>
        
        @if ($errors->any())
            <div class="margin-air">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="danger">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button class="margin-air" type="submit">Save</button>
    </form>
    <form class="margin-air" action="{{route('characther.show', ['id'=> $characther->id])}}" method="get">
        @csrf
        <button type="submit">Back</button>
    </form>
@endsection
