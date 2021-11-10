@extends('template')

@php
    $user = session('user');
@endphp

@section('title')Home @endsection

@section('content')
    @isset($user)
        <h1>Добро пожаловать, {{$user->name}}!</h1>
    @endisset

    @empty($user)
        <h1>Добро пожаловать!</h1>
    @endempty
@endsection
