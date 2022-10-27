<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/styles/admin.css') }}">
    <title>@yield('title', 'Admin-AfrikFood')</title>
</head>

<body>
    <div class="row g-0">
        <!-- Sidebar -->
        <div class="p-3 col fixed text-white bg-dark">
            <a href="{{ route('adminHomePage') }}" class="text-white text-decoration-none">
                <span class="fs-4">Admin Panel</span>
            </a>
            <hr />
            <ul class="nav flex-column">
                <li><a href="{{ route('adminHomePage') }}" class="nav-link text-white">-Admin-Home</a></li>
                <li><a href="#" class="nav-link text-white">-Admin-Products</a></li>
                <li><a href="{{ route('home') }}" class="mt-2 btn bg-primary text-white">Go back to the home
                        page</a></li>
            </ul>
        </div>
        <!--End of sidebar -->
        <div class="col content-grey">
            <nav class="p-3 shadow text-end">
                <span class="profile-font">Admin</span>
                <img src="{{ asset('/img/profile.svg') }}" alt="profile avatar" class="img-profile rounded-circle">
            </nav>

            <div class="g-0 m-5">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="copyright text-white py-4 text-center">
        <div class="container">
            <small>
                Copyright- <a class="text-reset fw-bold text-decoration-none" target="_blank"
                    href="https://twitter.com/albertdaoda">DAODA ALBERT</a>
            </small>
        </div>
    </div>
    <!-- End of footer -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>
