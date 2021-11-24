<!doctype html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/jquery-3.6.0.js')}}"></script>
    <script src="{{asset('myjs/cart.js')}}"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    @php
        $user = Session::get('user');
    @endphp

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-auto bg-light sticky-top">
            <div class="d-flex flex-sm-column flex-row flex-nowrap bg-light align-items-center sticky-top">
                <a href="/" class="d-block p-3 link-dark text-decoration-none" title="" data-bs-toggle="tooltip"
                   data-bs-placement="right" data-bs-original-title="Icon-only">
                    <i class="bi-apple fs-1"></i>
                </a>

                <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center justify-content-between w-100 px-3 align-items-center">
                    <li class="nav-item">
                        <a href="/productsByCategory/1" class="nav-link py-3 px-2" data-bs-toggle="tooltip"
                           data-bs-placement="right" data-bs-original-title="iPhone">
                            <i class="bi-phone fs-1" style="color: black"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/productsByCategory/2" class="nav-link py-3 px-2" data-bs-toggle="tooltip"
                           data-bs-placement="right" data-bs-original-title="iPad">
                            <i class="bi-tablet fs-1" style="color: black"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/productsByCategory/3" class="nav-link py-3 px-2" data-bs-toggle="tooltip"
                           data-bs-placement="right" data-bs-original-title="Mac Book">
                            <i class="bi-laptop fs-1" style="color: black"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/productsByCategory/4" class="nav-link py-3 px-2" data-bs-toggle="tooltip"
                           data-bs-placement="right" data-bs-original-title="Apple Watch">
                            <i class="bi-smartwatch  fs-1" style="color: black"></i>
                        </a>
                    </li>
                    @isset($user)
                        <li class="nav-item">
                            <a href="/cart/view" class="nav-link py-3 px-2" data-bs-toggle="tooltip"
                               data-bs-placement="right" data-bs-original-title="Cart">
                                <i class="bi bi-basket3 fs-1" style="color: black"></i>
                                <span class="position-absolute translate-middle badge rounded-pill bg-danger" id="cartCountItems"></span>
                            </a>
                        </li>

                        <script>
                            getCountItemsByUserId();
                        </script>
                    @endisset
                </ul>
                <div class="dropdown">
                    <a href="#"
                       class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle"
                       id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi-person-circle h2"></i>
                    </a>
                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                        @empty($user)
                            <li><a class="dropdown-item" href="/users/signin">Войти</a></li>
                            <li><a class="dropdown-item" href="/users/signup">Зарегестрироваться</a></li>
                        @endempty

                        @isset($user)
                            <li><p class="dropdown-item" style="pointer-events: none;">{{$user->name}}:</p></li>
                            <hr class="dropdown-divider">
                            <li><a class="dropdown-item" href="/users/logout">Выйти</a></li>
                            <li><a class="dropdown-item" href="/cart/view">Корзина</a></li>
                        @endisset
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm p-3 min-vh-100">
            <div class="album py-5 ">
                @yield('content')
            </div>
        </div>
    </div>
</div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
