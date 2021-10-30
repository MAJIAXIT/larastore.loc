@extends('template')

@section('title')Description @endsection

@section('content')
    @foreach($products as $product)
        <div class="container">
            <img src="{{asset($product->image_path)}}">
            <h3>{{$product->name}}</h3>
            <h6>{{$product->description}}</h6>
            <small>${{$product->price}}</small>
        </div>
    @endforeach
@endsection
