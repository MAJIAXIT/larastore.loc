@extends('template')

@section('title')Home @endsection

@section('content')
    @isset($user)
        <h1>Welcome to our store, {{$user->name}}!</h1>
    @endisset

    @empty($user)
        <h1>Welcome to our store!</h1>
    @endempty
@endsection
