<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Форма регистрации</title>
    <link href="{{asset('vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <link href="{{asset('mycss/signin.css')}}" rel="stylesheet">
</head>
<body class="text-center">

<main class="form-signin">
    <form method="post" action="/users/signup/check">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Регестрация</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-floating">
            <input type="text" class="form-control" name="name">
            <label for="floatingInput">Имя</label>
        </div><br>

        <div class="form-floating">
            <input type="text" class="form-control" name="email">
            <label for="floatingInput">Email</label>
        </div><br>

        <div class="form-floating">
            <input type="text" class="form-control" name="login">
            <label for="floatingInput">Логин</label>
        </div><br>

        <div class="form-floating">
            <input type="password" class="form-control" name="password">
            <label for="floatingPassword">Пароль</label>
        </div><br>

        <button class="w-100 btn btn-lg btn-dark" type="submit">Зарегестрироваться</button>
    </form>
    <br>
    Уже есть аккаунт? <a class="link-dark" href="/users/signin">Войти</a>
</main>
</body>
</html>
