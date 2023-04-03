@extends('layouts.layout')

@section('content')
    <h1>@yield('title', 'List of Characters')</h1>
    <ul class="margin-air">
        @foreach ($characthers as $key => $characther) 
        <li>
            <form action="{{route('characther.show', ['id'=>$characther->id])}}" method="GET">
                {{-- <button class="btn" type="submit"> {{$key+1}} {{$characther->gender->gender}} - {{$characther->color->color}}</button> --}}
                <button class="btn" type="submit"> {{$characther->id}}. {{$characther->gender->gender}} - {{$characther->color->color}}</button>
            </form>
        <li> 
        @endforeach
    </ul>
@endsection

    