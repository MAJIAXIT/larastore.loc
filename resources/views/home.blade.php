@extends('template')

@php
    $user = session('user');
@endphp

@section('title')Home @endsection

@section('content')
    <style>
        .product-device {
            position: absolute;
            right: 15%;
            bottom: -20%;
            width: 300px;
            height: 540px;
            /*background-color: #333;*/
            border-radius: 21px;
            transform: rotate(
                30deg);
        }

        .product-device-2 {
            top: 5%;
            right: auto;
            bottom: 0;
            transform: rotate(
                -30deg);
            /*left: 5%;*/
            /*background-color: #e5e5e5;*/
        }
    </style>


    <div class="shadow-sm position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light"
         style="border-radius: 25px">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal">Welcome to our store!</h1>
            <p class="lead fw-normal">Here you can buy some gadgets from Apple with very sweet price</p>
            <a class="btn btn-outline-secondary" href="/productsByCategory/1">Watch the catalogue</a>
        </div>
        <div class="product-device d-none d-md-block"><img src="images/products/iphone13.png"></div>
        <div class="product-device product-device-2 d-none d-md-block"><img src="images/products/applewatch6.png">
        </div>
    </div>



    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3">

        <div class="col">
            <div type="button" onclick="window.location.href='/productsByCategory/1'" style="border-radius: 25px;" class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden shadow-sm">
                <div class="my-3 p-3">
                    <h2 class="display-5">Sweet iPhones</h2>
                    <p class="lead">Click to watch catalogue</p>
                </div>
                <div class="mx-auto"
                     style="width: 80%; height: 400px; border-radius: 21px 21px 0 0;">
                    <img src="images/products/iphone13.png" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="col">
            <div type="button" onclick="window.location.href='/productsByCategory/2'" style="border-radius: 25px;" class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden shadow-sm">
                <div class="my-3 py-3">
                    <h2 class="display-5">Sweet iPads</h2>
                    <p class="lead">Click to watch catalogue</p>
                </div>
                <div class="mx-auto"
                     style="width: 80%; height: 400px; border-radius: 21px 21px 0 0;">
                    <img src="images/products/ipadpro.png" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="col">
            <div type="button" onclick="window.location.href='/productsByCategory/3'" style="border-radius: 25px;" class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden shadow-sm">
                <div class="my-3 py-3">
                    <h2 class="display-5">Sweet MacBook</h2>
                    <p class="lead">Click to watch catalogue</p>
                </div>
                <div class="mx-auto"
                     style="width: 80%; height: 400px; border-radius: 21px 21px 0 0;">
                    <img src="images/products/macbookair.png" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="col">
            <div type="button" onclick="window.location.href='/productsByCategory/4'" style="border-radius: 25px;" class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden shadow-sm">
                <div class="my-3 p-3">
                    <h2 class="display-5">Sweet Apple Watch</h2>
                    <p class="lead">Click to watch catalogue</p>
                </div>
                <div class="mx-auto"
                     style="width: 80%; height: 400px; border-radius: 21px 21px 0 0;">
                    <img src="images/products/applewatch6.png" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
@endsection
