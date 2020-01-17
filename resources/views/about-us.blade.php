@extends('layouts.app')

@section('content')

<br>
<div class="container">
    <div class="row mb-4">
        <div class="col-lg-5 mx-auto">
            <div class="row">
                <h1 class="section-title text-center mx-auto">NUESTRO EQUIPO</h1>
            </div>
        </div>
    </div>
    <div class="row text-center">

        <div class="col-md-4 col-movil" src="{{ asset('img/ventas.jpg') }}" alt="">
            <div class="p-4" style="background: #e3b4bc;">
                <center>
                    <img src="https://res.cloudinary.com/mhmd/image/upload/v1556834132/avatar-4_ozhrib.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Pedro Perez</h5><span>CEO - Fundador</span>
                </center>
            </div>
        </div>        
        <div class="col-md-4 col-movil" src="{{ asset('img/ventas.jpg') }}" alt="">
            <div class="p-4" style="background: #e3b4bc;">
                <center>
                    <img src="https://res.cloudinary.com/mhmd/image/upload/v1556834132/avatar-4_ozhrib.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Pedro Perez</h5><span>CEO - Fundador</span>
                </center>
            </div>
        </div>

        <div class="col-md-4 col-movil" src="{{ asset('img/ventas.jpg') }}" alt="">
            <div class="p-4" style="background: #e3b4bc;">
                <center>
                    <img src="https://res.cloudinary.com/mhmd/image/upload/v1556834132/avatar-4_ozhrib.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Pedro Perez</h5><span>CEO - Fundador</span>
                </center>
            </div>
        </div>

    </div>
    <br><br><br>
    <div class="row text-center">
        <div class="col-md-4">
            <h1 class="font-weight-light">Nuestra misión</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
        </div>
        <div class="col-md-4">
            <h1 class="font-weight-light">Nuestra visión</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
        </div>
        <div class="col-md-4">
            <h1 class="font-weight-light">Nuestros valores</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
        </div>
    </div>
    <br><br><br>
</div>

@endsection
