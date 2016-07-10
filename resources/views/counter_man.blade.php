@extends('layout')

@section('content')
    {{ csrf_field() }}
    <h1> {{Auth::user()->name}}</h1>

    <p> {{Auth::user()->type}} </p>


@endsection