@extends('layouts.app')

@section('content')

<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators my-4">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('img/carrusel1.jpg') }}" class="d-block w-100 img-fluid vh-100" alt="...">
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
<<<<<<< HEAD
                    <a class="info" href="/product/1">Más Información</a>
=======
                    <a class="info" href="#">Más Información</a>
>>>>>>> 20c80140cedcc7fa17787170c082b1c36d6d0dd8
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
                    <a class="info" href="/product/2">Más Información</a>
                    </center>

                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="hovereffec">
                <img class="img-fluid mx-auto" src="{{ asset('img/ventas.jpg') }}" alt="">
                <div class="overlay">
                    <h2>Ventas</h2>
                    <center> <a class="info" href="/product/3">Más Información</a></center>

                </div>
            </div>
        </div>
    </div>
</section>


<div class="jumbotron parent text-center" style="color: rgb(0, 0, 0);">
    <div class="background"></div>
    <div class="content my-auto">
        <div class="content-no-flex">
           <h1 class="text-white title-header">NOS ADAPTAMOS A TUS NECESIDADES</h1>
           <p class="lead hero-description text-white">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit
           </p>
            <p class="lead text-white">
                <a href="#contact" class="btn btn-primary btn-lg">
                    Empieza ya
                </a>
            </p>
        </div>
    </div>
</div>

<br><br>
<div class="row">
    <h1 class="section-title text-center mx-auto">TRABAJOS RECIENTES</h1>
</div>
<section class="carousel slide" data-ride="carousel" id="postsCarousel">
    <div class="container pt-0 mt-2 carousel-inner">
        <div class="row">
            <div class="col-12 py-1 text-md-right lead">
                <button onclick="previous()" class="btn btn-outline-secondary prev" title="go back"><i class="fa fa-lg fa-chevron-left"></i></button>
                <button onclick="next()" class="btn btn-outline-secondary next" title="more"><i class="fa fa-lg fa-chevron-right"></i></button>
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
                            <a href="#" data-toggle="modal" data-target="#image-gallery" data-image="https://i.ibb.co/D8Snp0L/IMG-20180205-WA0031.jpg">
                                <img class="img-fluid" src="https://i.ibb.co/6yrd1Ld/IMG-20180205-WA0022.jpg" alt="Carousel 6">
                            </a>
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
<div class="modal fade bd-example-modal-lg show" id="image-gallery" role="dialog">
            <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="dynamic-content">
                            <img src="https://i.ibb.co/6yrd1Ld/IMG-20180205-WA0022.jpg" class="img-fluid" alt=""/>
                        </div>
                    </div>
               </div>
        </div>
</section>
@endsection