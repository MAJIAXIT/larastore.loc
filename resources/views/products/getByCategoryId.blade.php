@extends('template')

@section('title')Products @endsection
@section('content')
    @php
        use \Illuminate\Support\Facades\Session;
        $user = Session::get('user');
    @endphp

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        @foreach($products as $product)
            <div class="col">
                <div class="card shadow-sm">
                    <img src="{{asset($product->image_path)}}">

                    <div class="card-body">
                        <h5 class="card-text">{{$product->name}}</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a class="btn btn-sm btn-outline-secondary"
                                   onclick="buttonAddClick({{$product->id}},{{$user->id}})">В корзину
                                </a>
                                <a class="btn btn-sm btn-outline-secondary" href="/productDescription/{{$product->id}}">Подробнее</a>
                            </div>
                            <small>${{$product->price}}</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <script src="{{asset('myjs/cart.js')}}"></script>
@endsection
