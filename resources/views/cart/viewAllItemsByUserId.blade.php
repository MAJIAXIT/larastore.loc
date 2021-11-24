@extends('template')

@section('title')Cart @endsection

@section('content')
    @php
        use \Illuminate\Support\Facades\Session;
        $user = Session::get('user');
    @endphp

    @if(count($cartItems)==0)
        <h3>В корзине ничего нет.</h3>
        <p>Вы можете добавлять товары в корзину через категории.</p>
    @else
        @foreach($cartItems as $cartItem)
            @php $product = $cartItem->product; @endphp
            <div class="card mb-3" id="cart_{{$cartItem->id}}" style="max-width: 1320px;">
                <div class="row g-0">
                    <div class="col-4">
                        <img src="{{asset($product->image_path)}}" class="img-fluid rounded-start">
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->name}} </h5>
                            <p class="card-text">{{$product->description}}</p>
                            <p class="card-text"><small class="text-muted">${{$product->price}}</small></p>
                        </div>
                    </div>
                    <a class="nav-link py-3 px-2 d-flex justify-content-end">
                        <i class="bi-trash fs-1 btn" style="color: black"
                           onclick="buttonDeleteClick({{$cartItem->id}})"></i>
                    </a>
                </div>
            </div>
            @endforeach
            </ul>
            <button class="w-100 btn btn-primary btn-lg" style="max-width: 1320px;" type="submit">
                Оформить заказ
            </button>
            @endif
            <script src="{{asset('myjs/cart.js')}}"></script>
@endsection
