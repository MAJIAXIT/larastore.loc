@extends('template')

@php
    $user = session('user');
@endphp

@section('title')Home @endsection

@section('content')
    {{--@isset($user)
        <h1>Добро пожаловать, {{$user->name}}!</h1>
    @endisset

    @empty($user)
        <h1>Добро пожаловать!</h1>
    @endempty--}}


        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 fw-normal">Welcome to our store!</h1>
                <p class="lead fw-normal">Here you can buy some gadgets from Aplle with very sweet price</p>
                <a class="btn btn-outline-secondary" href="/productsByCategory/1">Watch the catalogue</a>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    @foreach($products as $product)
        <div class="d-md-flex flex-md-equal my-md-3 ps-md-3">
            <div style="border-radius: 25px;" class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
                <div class="my-3 py-3">
                    <h2 class="display-5">{{$product->name}}</h2>
                    <p class="lead">{{$product->description}}</p>
                </div>
                <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                    <img src="{{$product->image_path}}" class="img-fluid"></div>
            </div>
        </div>
    @endforeach
    </div>
@endsection
