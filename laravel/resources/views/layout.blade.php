<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        />

        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"
        ></script>

        <title>Bethsany's CMS</title>
    </head>

    <style>
        .custom-navbar {
            background: rgba(0, 0, 0, 0.85);
            backdrop-filter: blur(6px);
            z-index: 1050;
        }

        .navbar-brand {
            color: #fff;
        }

        .nav-link {
            color: #e0e0e0;
        }

        .nav-link:hover {
            color: #c9a24d;
        }
    </style>
    <body>

    {{-- NavBar --}}
    <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
        <div class="container">
        <a class="navbar-brand" href="#">Bethany's Content Management</a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navMenu"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto align-items-lg-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Rentals</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Bookings</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
        @yield('content')
    </body>
</html>