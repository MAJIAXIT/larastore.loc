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

    @php
        $user = session('user');
    @endphp

</head>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="sticky-top d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" id="currentPage"
                       class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <h1 class="display-6">Store</h1>
                    </a>

                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item" >
                            <a href="/productsByCategory/1" onclick="currentPage()" id="linkPage" class="nav-link align-middle px-0">
                                <img src="/icons/iphone-icon.ico" width="50" height="50"> <h5 class="ms-1 d-none d-sm-inline text-white">
                                    iPhone</h5>
                            </a>
                        </li>

                        <li class="nav-item" onclick="currentPage()">
                            <a href="/productsByCategory/2" id="linkPage" class="nav-link align-middle px-0">
                                <img src="/icons/ipad-icon.ico" width="50" height="50"> <h5 class="ms-1 d-none d-sm-inline text-white">
                                    iPad</h5>
                            </a>
                        </li>

                        <li class="nav-item" onclick="currentPage()">
                            <a href="/productsByCategory/3" id="linkPage" class="nav-link align-middle px-0">
                                <img src="/icons/mac-icon.ico" width="50" height="50"> <h5 class="ms-1 d-none d-sm-inline text-white">Mac</h5>
                            </a>
                        </li>

                        <li class="nav-item" onclick="currentPage()">
                            <a href="/productsByCategory/4" id="linkPage" class="nav-link align-middle px-0">
                                <img src="/icons/applewatch-icon.ico" width="50" height="50"> <h5 class="ms-1 d-none d-sm-inline text-white">
                                    Watch</h5>
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4 fs-5">
                        <a href="#"
                           class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                           id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="/icons/user.png" alt="hugenerd" width="30" height="30"
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
<script src="public/myjs/sidebar.js"></script>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
