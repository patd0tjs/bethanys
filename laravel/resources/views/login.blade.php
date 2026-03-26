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
        <title>Bethabny's CMS</title>
    </head>
    <body style="background: black">
        <div class="container-fluid p-5 text-center">
            @if(session('error'))
            
                <div class="alert alert-danger alert-dismissible fade show position-fixed z-3 top-1 end-0 me-5" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <img
            src="{{ asset('assets/logo.png') }}"
            alt="Bethany's Events Logo"
            class="img-fluid mb-3"
            id="logo-img"
            />
            <h2 class="mb-3 cursive">Web Manager</h2>
            <form method="POST" action="/login">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                    <label>Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <label>Password</label>
                    
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-gold" type="submit">Login</button>
                </div>
            </form>
        </div>

        <style>
            .container-fluid{
                max-width: 430px;
            }
        </style>
    </body>
</html>
