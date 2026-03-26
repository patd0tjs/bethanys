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

        <link rel="stylesheet" href="{{ asset('assets/style.css') }}">

        <title>Bethsany's CMS</title>
    </head>
    <style>
        .preview-label{
            font-size: 2.5rem;
        }
        #logo-img {
            max-height: 4rem;
        }
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

        .gold {
            color: #c9a24d;
        }

        .nav-item {
            text-decoration: none;
            transition: color 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.8rem;
        }

    </style>
    <body>
        {{-- NavBar --}}
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar">
            <div class="container">
            <a class to="/" class="navbar-brand fw-bold cursive">
                <img
                src="{{ asset('assets/logo.png') }}"
                alt="Bethany's Events Logo"
                class="img-fluid"
                id="logo-img"
                />
            </a>
            Web Manager

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
                        <a class="nav-link {{ $data['page'] == 'home' ? 'gold' : '' }}" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $data['page'] == 'works' ? 'gold' : '' }}" aria-current="page" href="/works">Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $data['page'] == 'rentals' ? 'gold' : '' }}" aria-current="page" href="/rentals">Rentals</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <form action="/logout" method="post">
                            @csrf
                            <input type="submit" class="btn btn-gold" value="Logout">
                        </form>
                    </li>
                </ul>
            </div>
            </div>
        </nav>

        {{-- main content --}}
        <div class="container-fluid p-5">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show position-fixed z-3 top-1 end-0 me-5" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('error'))
            
                <div class="alert alert-danger alert-dismissible fade show position-fixed z-3 top-1 end-0 me-5" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @yield('content')
        </div>
    </body>
</html>