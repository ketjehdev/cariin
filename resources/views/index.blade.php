<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#000">
    {{-- stylesheet API bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    {{-- favicon cariin --}}
    <link rel="icon" href="{{ asset('img/logo.png') }}">
    
    {{-- link stylesheet asset --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Cariin Aja | Home</title>
</head>
<body>

    {{-- navbar top --}}
    <nav class="navbar navbar-expand-lg position-absolute navbar-light bg-light" style="width: 100%">
        <div class="container-fluid">
            <a href="#" class="navbar-brand my-2">
                <img src="{{ asset('img/logo.png') }}" height="28" alt="CoolBrand">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="#" class="nav-item nav-link btn">Login</a>
                    <a href="#" class="nav-item nav-link btn btn-primary text-light">Daftar</a>
                </div>
            </div>
        </div>
    </nav>

    {{-- content --}}
    <div class="main">
        <div class="content">
            <h1 class="mb-0">Car<span class="text-warning">ii</span>n Aja!</h1>
            <p class="text-primary mb-1">Cari tempat magang disini aja!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit deserunt a veritatis inventore ullam hic provident eius! Modi mollitia eveniet blanditiis sit magnam! Commodi esse, temporibus aperiam labore minima incidunt.</p>
            <button class="btn btn-primary" style="width:100%">Mulai sekarang</button>
        </div>

        <div class="imgBx">
            <img src="{{ asset('img/index-bg.svg') }}" alt="">
        </div>
    </div>


    {{-- script API bootstrap 5 --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>