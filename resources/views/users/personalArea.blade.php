@extends('template')

@php
    $user = session('user');
@endphp

@section('title')Personal area @endsection

@section('content')
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

            <div class="col-sm-3">
                <label>Имя</label>
                <input value="{{$user->name}}" type="text" class="form-control" name="name">
            </div>
            <br>

            <div class="col-sm-3">
                <label>Почта</label>
                <input value="{{$user->email}}" type="text" class="form-control" name="email">
            </div>
            <br>

            <div class="col-sm-3">
                <label>Логин</label>
                <input value="{{$user->login}}" type="text" class="form-control" name="login">
            </div>
            <br>

            <div class="col-sm-3">
                <label>Пароль</label>
                <input value="{{$user->password}}" type="password" class="form-control" name="password">
            </div>
            <br>
            <button class="btn btn-lg btn-dark col-sm-3" type="submit">Сохранить изменения</button>
        </form>
    </div>
@endsection
