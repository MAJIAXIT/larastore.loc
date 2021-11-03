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

    <style>
        .b-example-divider {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        main {
            display: flex;
            flex-wrap: nowrap;
            height: 100vh;
            max-height: 100vh;
            overflow-x: auto;
            overflow-y: hidden;
        }

    </style>

</head>
<body>
{{--<header>
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
</header>--}}

<main>
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"/>
                </svg>
                <span class="fs-4">Sidebar</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#home"/>
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#speedometer2"/>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#table"/>
                        </svg>
                        Orders
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#grid"/>
                        </svg>
                        Products
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#people-circle"/>
                        </svg>
                        Customers
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                   id="dropdownUser1"
                   data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>mdo</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>

        <div class="b-example-divider"></div>

        <div class="album py-5 bg-light d-flex flex-column">
            <div class="container">
                @yield('content')
            </div>
        </div>

    </div>
</main>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
