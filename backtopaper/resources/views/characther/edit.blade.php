@extends('layouts.layout')

@yield('title', 'Edit Characther')

@section('content')
 
    <p>{{$characther->id}} {{$characther->gender->gender}} {{$characther->color->color}}</p> 

@endsection
