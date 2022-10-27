<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/styles/app.css') }}">
    <title>@yield('title', 'AfrikFood')</title>
</head>

<body>
    <!-- Header section -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">AfrikFood</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" area-expand="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="{{ route('home') }}">Home</a>
                    <a class="nav-link active" href="{{ route('productPage') }}">Products</a>
                    <a class="nav-link active" href="{{ route('about page') }}">About</a>
                </div>
            </div>
        </div>
    </nav>

    <header class="masthead bg-primary text-white text-center py-4">
        <div class="container d-flex align-items-center flex-column">
            <h2>@yield('subtitle', 'AfrikFood')</h2>
        </div>
    </header>
    <!-- End Header section -->

    <div class="container my-4">
        @yield('content')
    </div>

    <!-- Footer section -->
    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>
                Copyright-<a class="text-reset fw-bold text-decoration-none" target="_blank"
                    href="https://twitter.com/albertdaoda">
                    DAODA ALBERT
                </a> - <b>Others</b>
            </small>
        </div>
    </div>
    <!-- End Footer section -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>
