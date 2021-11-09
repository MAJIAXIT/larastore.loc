@extends('template')

@section('title')Cart @endsection

@section('content')

    @if(count($cartItems)==0)
        <h3>В корзине ничего нет.</h3>
        <p>Вы можете добавлять товары в корзину через категории.</p>
    @else
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach($cartItems as $cartItem)
                @php $product = $cartItem->product; @endphp
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{asset($product->image_path)}}">
                        <div class="card-body">
                            <h5 class="card-text">{{$product->name}}</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <small>${{$product->price}}</small>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    @endif
@endsection
