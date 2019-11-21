@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row mb-4">
        <div class="col-lg-5 mx-auto">
            <h2 class="text-center display-4 font-weight-light">Nuestro equipo</h2>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-4" src="{{ asset('img/ventas.jpg') }}" alt="">
            <div class="hovereffect" style="background: #e3b4bc;">
                <center>
                    <img src="https://res.cloudinary.com/mhmd/image/upload/v1556834132/avatar-4_ozhrib.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Pedro Perez</h5><span>CEO - Fundador</span>
                </center>
                <div class="overlay">
                    <h5 class="mb-0"></h5><span></span>
                    <p class="set1">
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </p>
                    <hr>
                    <hr>
                    <p class="set2">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-dribbble"></i>
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-4">
        <div class="hovereffect" style="background: #e3b4bc;">
                <center>
                    <img src="https://res.cloudinary.com/mhmd/image/upload/v1556834132/avatar-4_ozhrib.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Pedro Perez</h5><span>CEO - Fundador</span>
                </center>
                <div class="overlay">
                    <h5 class="mb-0"></h5><span></span>
                    <p class="set1">
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </p>
                    <hr>
                    <hr>
                    <p class="set2">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-dribbble"></i>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-4" style="ba">
        <div class="hovereffect" style="background: #e3b4bc;">
                <center>
                    <img src="https://res.cloudinary.com/mhmd/image/upload/v1556834132/avatar-4_ozhrib.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Pedro Perez</h5><span>CEO - Fundador</span>
                    <br>
                    <br>
                </center>
                <div class="overlay">
                    <h5 class="mb-0"></h5><span></span>
                    <p class="set1">
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </p>
                    <hr>
                    <hr>
                    <p class="set2">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-dribbble"></i>
                        </a>
                    </p>
                </div>
            </div>
        </div>

    </div>
    <br><br><br>
    <div class="row text-center">
        <div class="col-md-6">
            <h1 class="font-weight-light">Nuestra misión</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
        </div>
        <div class="col-md-6">
            <h1 class="font-weight-light">Nuestra visión</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
        </div>
    </div>
    <br><br><br>
</div>

@endsection
