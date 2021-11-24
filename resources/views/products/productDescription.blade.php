@extends('template')

@section('title')Description @endsection

@section('content')
    <div class="row">
        <div class="container">
            @foreach($products as $product)
                <div class="col-md-12">
                <img src="{{asset($product->image_path)}}" class="img-fluid">
                <h3>{{$product->name}}</h3>
                <h6>{{$product->description}}</h6>
                <small>${{$product->price}}</small><br>
                <div class="btn-group">
                    <a href="" class="btn btn-sm btn-outline-secondary" onclick="buttonAddClick({{$product->id}})">В корзину
                    </a>
                </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="{{asset('myjs/cart.js')}}"></script>
@endsection
