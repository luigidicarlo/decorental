<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">


        <nav class="navbar navbar-expand-md fixed-top-sm justify-content-between flex-nowrap navbar-light">     
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar2">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form class="form-inline d-none d-md-block nav-side-left">
                <i class="fa fa-search search-icon"></i>
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                <!--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
            </form>
            <a href="/" class="navbar-brand mx-auto"><img src="{{ asset('img/decorental.jpg') }}" width="200" height="100" alt=""></a>
            <ul class="navbar-nav flex-row nav-side-right text-center mx">
                <li class="nav-item icon"> 
                    <a style="text-decoration: none; color: #000" href="{{ route('login') }}">
                        <i class="fa fa-user"></i>&nbsp;
                        {{ __('Login') }}
                    </a>
                </li>
                <li class="nav-item icon">
                    <a style="text-decoration: none; color: #000" href="/shopping-cart">
                        <i class="fa fa-shopping-cart"></i>&nbsp;
                        {{ __('Carrito') }}
                    </a>
                </li>
            </ul>               
        </nav>
        <nav class="navbar navbar-expand-md">
            <div class="navbar-collapse collapse pt-2 pt-md-0" id="navbar2">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/quienes-somos">Quienes somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CEO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/nuestros-trabajos">Nuestros Trabajos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="mw-100">
            @yield('content')
        </div>
    </div>
</body>
</html>
