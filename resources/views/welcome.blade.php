@extends('layouts.app')

@section('content')

<script>
    var swiper = app.swiper.get('.swiper-container');
    swiper.slideNext();
</script>


    <div id="carouselExampleSlidesOnly" class="carousel carousel-fade slide" data-ride="carousel" data-pause="false">
        <div class="carousel-inner">
            <div class="carousel-item active" >
                <img class="d-block w-100 img-fluid vh-100" src=" {{ asset('img/28.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid vh-100" src=" {{ asset('img/ll8.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid vh-100" src=" {{ asset('img/52.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid vh-100" src=" {{ asset('img/ph.jpg') }}" alt="Second slide">
            </div>
        </div>
    </div>



<section class="container pt-3">
    <div class="row mb-5">
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="hovereffect" style="height:430px; width:340px;">
                <img class="img-responsive" src=" {{ asset('img/decora.jpg') }}" alt="">
                <div class="overlay">
                    <h2>Decoraciones</h2>
                    <center>
                    <a class="info" href="#">Más Información</a>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="hovereffect" style="height:430px; width:340px;">
                <img class="img-responsive" src=" {{ asset('img/mobiliario.jpg') }}" alt="">
                <div class="overlay">
                    <h2>Mobiliario</h2>
                    <center>
                    <a class="info" href="#">Más Información</a>
                    </center>

                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="hovereffect"style="height:430px; width:340px;">
                <img class="img-responsive" src="{{ asset('img/ventas.jpg') }}" alt="">
                <div class="overlay">
                    <h2>Ventas</h2>
                    <center> <a class="info" href="#">Más Información</a></center>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ESTE CÓDIGO ES SOLO UNA PRUEBA -->
@if ($products->count())

<ul class="list-group">
    @foreach ($products as $product)
    <li class="list-group-item">
        <div class="clearfix">
            <div class="float-left mr-auto">
                <a href="/products/{{ $product->id }}">
                    {{ $product->name }}
                </a>
                <span>
                    | Precio: {{ $product->price }} {{ env('CUR_SYMBOL', 'VEF') }}
                </span>
            </div>
        </div>
    </li>
    @endforeach
</ul>

@else



@endif
<!-- FIN DE CÓDIGO PRUEBA -->


<div class="py-4">
    <div class="container-fluid">
        <div class="row mw-100">
            <div class="col-md-3"></div>
            <div class="col-xs-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <center>
                        <img class="img-fluid" src="{{ asset('img/logo.png') }}" style="height:230px; width:340px" alt="Carousel 2">
                        </center>
                    </div>
                    <div class="card-body">
                        <h2><b>
                            <p class="lead text-center">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum nostrum exercitationem eaque delectus
                                consequatur voluptatem voluptate reprehenderit debitis porro nobis. Cumque voluptatum culpa nulla
                                laborum mollitia maxime ipsam iure totam.
                            </p>
                        </b>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="carousel slide" data-ride="carousel" id="postsCarousel">
    <div class="container pt-0 mt-2 carousel-inner">
        <div class="row">
            <div class="col-12 py-1 text-md-right lead">
                <a class="btn btn-outline-secondary prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                <a class="btn btn-outline-secondary next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
            </div>
        </div>
        <div class="carousel-item active">
            <div class="row">
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-img-top card-img-top-200">
                            <img class="img-fluid" src="{{ asset('img/2.jpg') }}" alt="Carousel 1">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-img-top card-img-top-200">
                            <img class="img-fluid" src="{{ asset('img/6.jpg') }}" alt="Carousel 2">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-img-top card-img-top-200">
                            <img class="img-fluid" src="{{ asset('img/9.jpg') }}" alt="Carousel 3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-img-top card-img-top-200">
                            <img class="img-fluid" src="{{ asset('img/8.jpg') }}" alt="Carousel 4">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-img-top card-img-top-200">
                            <img class="img-fluid" src="{{ asset('img/7.jpg') }}" alt="Carousel 5">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-img-top card-img-top-200">
                            <img class="img-fluid" src="{{ asset('img/3.jpg') }}" alt="Carousel 6">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>

</section>
<script src="https://unpkg.com/swiper/js/swiper.js"></script>
<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
@endsection
