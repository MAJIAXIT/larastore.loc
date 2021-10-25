@extends('template')

@section('title')Products @endsection
@section('content')
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        @foreach($products as $product)
        <div class="col">
            <div class="card shadow-sm">
                <img src="{{asset($product->image_path)}}">

                <div class="card-body">
                    <h5 class="card-text">{{$product->name}}</h5>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">В корзину</button>
                            <form method="post" action="/productDescription">
                                @csrf
                                <input type="text" id="id" name="id" value="{{ $product->id }}" hidden>
                            <button type="submit" class="btn btn-sm btn-outline-secondary">Подробнее</button>
                            </form>
                        </div>
                        <small>${{$product->price}}</small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection