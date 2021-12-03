@extends('template')

@section('title')Cart @endsection

@section('content')
    @php
        use \Illuminate\Support\Facades\Session;
        $user = Session::get('user');
    @endphp

    @if(count($cartItems)==0)
        <h3>В корзине ничего нет</h3>
        <p>Вы можете добавлять товары в корзину через категории</p>
    @else
        @foreach($cartItems as $cartItem)
            @php
                $product = $cartItem->product;
                $productCount = DB::table('cart_items')->where('product_id','=', $product->id)->get()->count();
            @endphp
            <div class="card mb-3 shadow-sm col-sm-10" id="cart_{{$product->id}}"
                 style="max-width: 1320px; border-radius: 25px;">
                <div class="row">
                    <div type="button" class="col-sm-3"
                         onclick="window.location.href='/productDescription/{{$product->id}}'">
                        <img src="{{asset($product->image_path)}}" class="img-fluid ">
                    </div>
                    <div class="col">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->name}} </h5>
                            <p class="card-text">{{$product->description}}</p>
                            <p class="card-text"><small class="text-muted">${{$product->price}}</small></p>

                            {{--<button class="btn fs-3" onclick="buttonDeleteClick({{$cartItem->id}})">-</button>--}}
                            <span id="productCountInCart" class="badge rounded-pill bg-dark">{{$productCount}}</span>
                            {{--<button class="btn fs-3" onclick="buttonAddClick({{$product->id}})">+</button>--}}
                        </div>
                        <a class="nav-link d-flex justify-content-end">
                            <i class="bi-trash fs-1 btn" style="color: black" onclick="buttonDeleteClick({{$product->id}})"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            </ul>
            <a href="/purchases/make" class="col-sm-10 btn btn-dark btn-lg"  style="max-width: 1320px;" type="button"
               onclick="alert('Покупка совершена!')">
                Оформить заказ
            </a>
            @endif
            <script src="{{asset('myjs/cart.js')}}"></script>
@endsection
