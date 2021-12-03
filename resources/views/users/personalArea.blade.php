@extends('template')

@php
$user = session('user');
@endphp

@section('title')Personal area @endsection

@section('content')
<div class="d-flex flex-column flex-sm-row">

    <div class="col ">
        <form action="/users/personalArea/check">

            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="col-sm-10">
                <label>Имя</label>
                <input value="{{$user->name}}" type="text" class="form-control" name="name">
            </div>
            <br>

            <div class="col-sm-10">
                <label>Почта</label>
                <input value="{{$user->email}}" type="text" class="form-control" name="email">
            </div>
            <br>

            <div class="col-sm-10">
                <label>Логин</label>
                <input value="{{$user->login}}" type="text" class="form-control" name="login">
            </div>
            <br>

            <div class="col-sm-10">
                <label>Пароль</label>
                <input value="{{$user->password}}" type="password" class="form-control" name="password">
            </div>
            <br>
            <button class="btn btn-lg btn-dark col-sm-10" type="submit">Сохранить изменения</button>
        </form>
    </div>

    <div class="col">
        @if(count($purchases)==0)
        <h3>Вы еще не совершали покупок</h3>
        @else
        <br>
        <h3>Ваши покупки</h3>
        @foreach($purchases as $purchase)
        @php
        $productId = $purchase->product_id;
        $product = DB::table('products')->where('id','=', $purchase->product_id)->first();
    
        $productCount = DB::table('purchases')->where([
                ['user_id', '=', $user->id],
                ['product_id', '=', $purchase->product_id]
            ])->get()->count();
        @endphp
        <div class="card mb-3 shadow-sm" id="cart_{{$product->id}}" style="max-width: 1320px; border-radius: 25px;">
            <div class="row">
                <div type="button" class="col-sm-3" onclick="window.location.href='/productDescription/{{$product->id}}'">
                    <img src="{{asset($product->image_path)}}" class="img-fluid">
                </div>
                <div class="col">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}} </h5>
                        <p class="card-text">Куплено: {{$purchase->added_at}}<p class="card-text text-end"><small class="text-muted">${{$product->price * $productCount}}</small>
                        <span class="badge rounded-pill bg-dark">{{$productCount}}</span></p></p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>
@endsection