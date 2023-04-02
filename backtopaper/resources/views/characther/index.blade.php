@extends('layouts.layout')

@yield('title', 'List of Characthers')

    @section('content')
    <div class="wrap-content">
    <ul>
        @foreach ($characthers as $key => $characther) 
        <li>
            <form action="{{route('characther.show', ['id'=>$characther->id])}}" method="GET">
                <button class="btn" type="submit"> {{$key+1}} {{$characther->gender->gender}} - {{$characther->color->color}}</button>
            </form>
        <li> 
        @endforeach
    </ul>
</div>
    @endsection

    