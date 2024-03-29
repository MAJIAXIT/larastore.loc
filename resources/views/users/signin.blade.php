<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Форма входа</title>
    <link href="{{asset('vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('mycss/signin.css')}}" rel="stylesheet">
</head>
<body class="text-center">

<main class="form-signin">
    <form method="post" action="/users/signin/check">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Пожалуйста войдите</h1>

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
            <input type="text" class="form-control" name="login">
            <label for="floatingInput">Логин</label>
        </div>

        <div class="form-floating">
            <input type="password" class="form-control" name="password">
            <label for="floatingPassword">Пароль</label>
        </div>

        <button class="w-100 btn btn-lg btn-dark" type="submit">Войти</button>
    </form>
    <br>
    Ещё нет аккаунта? <a class="link-dark" href="/users/signup">Зарегестрироваться</a>
</main>



</body>
</html>
