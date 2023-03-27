@extends('layouts.layout')

@yield('title', 'Edit Characther')

@section('content')

    <p>{{$characther->id}} {{$characther->gender->gender}} {{$characther->color->color}}</p> 
<img src="{{Storage::get('image.png')}}" alt="face" srcset="">
    <form action="{{route('characther.store', ['id'=>$characther->id])}}" method="post">
        @csrf
        @method('post')
        <div>
            <label for="imageFile">Upload an image:</label>
            <input type="file" name="imageFile" id="imageFile" value="{{old('imageFile', $characther->imageFile)}}">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10">{{old('description', $characther->description)}}</textarea>
        </div>
        
        @if ($errors->any())
            <div class="">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <button type="submit">Save</button>
    </form>

@endsection
