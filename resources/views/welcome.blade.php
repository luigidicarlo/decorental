@extends('layouts.app')

@section('content')

<script>
    var swiper = app.swiper.get('.swiper-container');
    swiper.slideNext();
</script>

<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators my-4">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('img/28.jpg') }}" class="d-block w-100 img-fluid vh-100" alt="...">
        <div class="carousel-caption d-none d-sm-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/ll8.jpg') }}" class="d-block w-100 img-fluid vh-100" alt="...">
        <div class="carousel-caption d-none d-sm-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/52.jpg') }}" class="d-block w-100 img-fluid vh-100" alt="...">
        <div class="carousel-caption d-sm-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!--
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
    </div>-->

<br><br>
<div class="row">
    <h1 class="section-title text-center mx-auto">CATEGORÍAS</h1>
</div>
<section class="container pt-3">
    <div class="row mb-5">
        <div class="col-md-4 mb-4">
            <div class="hovereffec">
                <img class="img-fluid mx-auto" src=" {{ asset('img/decora.jpg') }}" alt="">
                <div class="overlay">
                    <h2>Decoraciones</h2>
                    <center>
                    <a class="info" href="#">Más Información</a>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="hovereffec">
                <img class="img-fluid mx-auto" src=" {{ asset('img/mobiliario.jpg') }}" alt="">
                <div class="overlay">
                    <h2>Mobiliario</h2>
                    <center>
                    <a class="info" href="#">Más Información</a>
                    </center>

                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="hovereffec">
                <img class="img-fluid mx-auto" src="{{ asset('img/ventas.jpg') }}" alt="">
                <div class="overlay">
                    <h2>Ventas</h2>
                    <center> <a class="info" href="#">Más Información</a></center>

                </div>
            </div>
        </div>
    </div>
</section>
<div class="jumbotron parent text-center" style="color: rgb(0, 0, 0);">
    <div class="background"></div>
    <div class="content my-auto">
        <div class="content-no-flex">
           <h2>
           <h1 class="lead hero-description text-white">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum nostrum exercitationem eaque delectus
                                consequatur voluptatem voluptate reprehenderit debitis porro nobis. Cumque voluptatum culpa nulla
                                laborum mollitia maxime ipsam iure totam.
</h2>
           </h1>



        </div>
    </div>
</div>
<!--
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
-->
<br><br>
<div class="row">
    <h1 class="section-title text-center mx-auto">TRABAJOS RECIENTES</h1>
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
