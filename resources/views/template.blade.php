<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/jquery-3.6.0.js')}}"></script>

</head>
<body>
{{--
<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">Categories</h4>
                </div>
            </div>
            <div class="container px-4">
                <div class="row gx-4">
                    <div class="col">
                        <a type="button" class="p-4 btn" href="/productsByCategory/1">
                            <img src="/icons/iphone-icon.png" alt="iPhone">
                        </a>
                    </div>
                    <div class="col">
                        <a type="button" class="p-4 btn" href="/productsByCategory/2">
                            <img src="/icons/ipad-icon.png" alt="iPad">
                        </a>
                    </div>
                    <div class="col">
                        <a type="button" class="p-4 btn" href="/productsByCategory/3">
                            <img src="/icons/mac-icon.png" alt="Mac Book">
                        </a>
                    </div>
                    <div class="col">
                        <a type="button" class="p-4 btn" href="/productsByCategory/4">
                            <img src="/icons/applewatch-icon.png" alt="Apple Watch">
                        </a>
                    </div>
                    <div class="col">
                        <h4 class="text-white">User</h4>
                        <ul class="list-unstyled">
                            <li><a href="/users/signin" class="text-white">Sign In</a></li>
                            <li><a href="/users/signup" class="text-white">Sign Up</a></li>
                            <li><a href="/users/logout" class="text-white">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a href="/" class="navbar-brand d-flex align-items-center">
                <strong>re:Store</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>
--}}

<div class="container-fluid">
    <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="sticky-top d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/"
                       class=" d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <h1 class="d-none d-sm-inline link">Store</h1>
                    </a>

                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item">
                            <a href="/productsByCategory/1" class="nav-link align-middle px-0">
                                <img src="/icons/iphone-icon.ico"> <h4 class="ms-1 d-none d-sm-inline text-white">
                                    iPhone</h4>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/productsByCategory/2" class="nav-link align-middle px-0">
                                <img src="/icons/ipad-icon.ico"> <h4 class="ms-1 d-none d-sm-inline text-white">
                                    iPad</h4>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/productsByCategory/3" class="nav-link align-middle px-0">
                                <img src="/icons/mac-icon.ico"> <h4 class="ms-1 d-none d-sm-inline text-white">Mac</h4>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/productsByCategory/4" class="nav-link align-middle px-0">
                                <img src="/icons/applewatch-icon.ico"> <h4 class="ms-1 d-none d-sm-inline text-white">
                                    Watch</h4>
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4 fs-5">
                        <a href="#"
                           class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                           id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30"
                                 class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">
                                @isset($user)
                                    <h6>{{$user->name}}</h6>
                                @endisset

                                @empty($user)
                                    <h6>User</h6>
                                @endempty
                            </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="/users/signin">Sign In</a></li>
                            <li><a class="dropdown-item" href="/users/signup">sign Up</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/users/logout">Sign out</a></li>
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
