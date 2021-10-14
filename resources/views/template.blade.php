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
                            <a type="button" class="p-4 btn btn-outline-secondary" href="/productsByCategory/1">iPhone</a>
                        </div>
                        <div class="col">
                            <a type="button" class="p-4 btn btn-outline-secondary" href="/productsByCategory/2">iPad</a>
                        </div>
                        <div class="col">
                            <a type="button" class="p-4 btn btn-outline-secondary" href="/productsByCategory/3">MacBook</a>
                        </div>
                        <div class="col">
                            <a type="button" class="p-4 btn btn-outline-secondary" href="/productsByCategory/4">Watch</a>
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

<main>
    <div class="album py-5 bg-light">
        <div class="container">
            @yield('content')
        </div>
    </div>

</main>

<footer class="text-muted py-5">

</footer>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
