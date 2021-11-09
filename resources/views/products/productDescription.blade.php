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
                    <button onclick="buttonAddClick({{$product->id}})" class="btn btn-sm btn-outline-secondary">В корзину</button>
                </form>
            </div>
        </div>
    @endforeach
    <script src="{{asset('myjs/addNewItemToCart.js')}}"></script>
@endsection
