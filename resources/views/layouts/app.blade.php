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
            <form class="form-inline d-none nav-side-left d-md-flex">
                <i class="fa fa-search search-icon"></i>
                <input style="width: 84%" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                <!--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
            </form>
            <a href="/" class="navbar-brand mx-auto"><img src="{{ asset('img/decorental.jpg') }}" width="200" height="100" alt=""></a>
            <ul class="navbar-nav flex-row nav-side-right text-center mx">
                <a href="/carrito">
                <li class="nav-item icon d-flex">
                    <img src="{{asset('img/decocarri.png')}}" width="50px">
                    <p style="position: absolute; top: 75px; color: #000;">Carrito</p>
                </li></a>
            </ul>
        </nav>
        <nav class="navbar navbar-expand-md">
            <div class="navbar-collapse collapse pt-2 pt-md-0" id="navbar2">
                <ul class="navbar-nav nav-link-container mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/quienes-somos">¿Quiénes somos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ceo">CEO</a>
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

        <section id="footer">
            <div class="container">
                <div class="row text-center text-xs-center">
                    <div class="col-4 mx-auto">
                        <h5>Accesos rápidos</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="/quienes-somos"><i class="fa fa-angle-double-right"></i>Quienes somos</a></li>
                            <li><a href="/ceo"><i class="fa fa-angle-double-right"></i>CEO</a></li>
                            <li><a href="nuestros-trabajos"><i class="fa fa-angle-double-right"></i>Nuestros trabajos</a></li>
                            <li><a href="/contacto"><i class="fa fa-angle-double-right"></i>Contáctanos</a></li>
                        </ul>
                    </div>
                    <div class="col-4 mx-auto">
                        <h5>Categorías</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Decoraciones</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Mobiliario</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Ventas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                        <ul class="list-unstyled list-inline social text-center">
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                    <hr>
                </div>  
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                        <p>© 2019, Decorental. Todos los derechos reservados.</p>
                    </div>
                    <hr>
                </div>  
            </div>
        </section>
    </div>
</body>
</html>
