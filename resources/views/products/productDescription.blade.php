@extends('template')

@section('title')Description @endsection

@section('content')
    @foreach($products as $product)
        <div class="container">
            <img src="{{asset($product->image_path)}}">
            <h3>{{$product->name}}</h3>
            <h6>{{$product->description}}</h6>
            <small>${{$product->price}}</small><br>

            <div class="btn-group">
                <form method="get" action="/addtobasket">
                    <input type="text" id="id" name="id" value="{{ $product->id }}" hidden>
                    <button type="submit" class="btn btn-sm btn-outline-secondary">В корзину</button>
                </form>
            </div>
        </div>
    @endforeach
@endsection
