@extends('layouts.app')

@section('content')
<div class="row d-none d-lg-flex">
  <div class="col-6 p-4">
    <div class="bordered square">
      <div class="bordered large-square">
        <div class="text-center mx-auto">
          <h1 class="section-title text-center mx-auto">Decorental</h1>
        </div>
        <br>
        <p class="text-center" style="font-size: 22px;">En Decorental nos ocupamos en personalizar tu evento, para hacer que esa celebración especial sea lo que siempre has soñado y más.</p>            
      </div>
    </div>
    
  </div>
  <div class="col-6" style="padding-left: 0px; padding-right: 0px;">
    <div class="bd-example">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators my-4">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('img/carrusel1.jpg') }}" class="d-block w-100 img-fluid banner-slide image-height" alt="...">
            <!--
            <div class="carousel-caption d-none d-sm-block">
              <h5>First slide label</h5>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>-->
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/ll8.jpg') }}" class="d-block w-100 img-fluid banner-slide image-height" alt="...">
            <!--
            <div class="carousel-caption d-none d-sm-block">
              <h5>Second slide label</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>-->
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/52.jpg') }}" class="d-block w-100 img-fluid banner-slide image-height" alt="...">
            <!--
            <div class="carousel-caption d-none d-sm-block">
              <h5>Third slide label</h5>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>-->
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
  </div>
</div>

<div class="bd-example d-lg-none">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators my-4">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('img/carrusel1.jpg') }}" class="d-block w-100 img-fluid banner-slide image-height" alt="...">
        <!--
        <div class="carousel-caption d-none d-sm-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>-->
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/ll8.jpg') }}" class="d-block w-100 img-fluid banner-slide image-height" alt="...">
        <!--
        <div class="carousel-caption d-none d-sm-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>-->
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/52.jpg') }}" class="d-block w-100 img-fluid banner-slide image-height" alt="...">
        <!--
        <div class="carousel-caption d-none d-sm-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>-->
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
<div class="text-center mx-auto">
    <h1 class="section-title text-center mx-auto">CATEGORÍAS</h1>
</div>
<section class="container pt-3">
    <div class="row mb-5">
        <div class="col-md-4 mb-4">
            <div class="text-center">
                <img class="img-fluid mx-auto" src=" {{ asset('img/decora.jpg') }}" alt="">
                <a href="/categorias/1" class="btn btn-primary btn-pink text-white" style="width: 100%;">Decoraciones</a>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="text-center">
                <img class="img-fluid mx-auto" src=" {{ asset('img/mobiliario.jpg') }}" alt="">
                <a href="/categorias/2" class="btn btn-primary btn-pink text-white" style="width: 100%;">Mobiliario</a>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="text-center">
                <img class="img-fluid mx-auto" src="{{ asset('img/ventas.jpg') }}" alt="">
                <a href="/categorias/3" class="btn btn-primary btn-pink text-white" style="width: 100%;">Organización de eventos</a>
            </div>
        </div>
    </div>
</section>

<div class="jumbotron parent text-center" style="color: rgb(0, 0, 0);">
    <div class="background"></div>
    <div class="content my-auto">
        <div class="content-no-flex">
           <h1 class="text-white title-header">PERSONALIZAMOS TU EVENTO</h1>
           <p class="lead hero-description text-white">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit
           </p>
            <p class="lead text-white">
                <a href="#contact" style="background: #e3b4bc; border: 0;" class="btn btn-primary btn-lg">
                    Empieza ya
                </a>
            </p>
        </div>
    </div>
</div>

<br><br>
<div class="text-center mx-auto">
    <h1 class="section-title text-center mx-auto">TRABAJOS RECIENTES</h1>
</div>
@if ($works->count())
    <section class="carousel slide" data-ride="carousel" id="postsCarousel">
        <div class="container pt-0 mt-2 carousel-inner">
            <div class="row">
                <div class="col-12 py-1 text-md-right lead">
                    <button onclick="previous()" class="btn btn-outline-secondary prev" title="go back"><i class="fa fa-lg fa-chevron-left"></i></button>
                    <button onclick="next()" class="btn btn-outline-secondary next" title="more"><i class="fa fa-lg fa-chevron-right"></i></button>
                </div>
            </div>
            @foreach ($works->chunk(3) as $count => $item)
                <div class="carousel-item {!! $count == 0 ? 'active' : '' !!}">
                    <div class="row">
                        @foreach ($item as $work)

                            <div class="col-md-4">
                                <div class="card h-100">
                                    <div class="card-img-top card-img-top-200">
                                        <a data-toggle="modal" href="#" class="fancybox" rel="ligthbox" data-target="#id{{ $work->id }}">
                                            <img class="img-fluid" src="{{ $work->url }}" alt="Carousel 1">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade bd-example-modal-lg show" id="id{{ $work->id }}" role="dialog">
                                <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" id="dynamic-content">
                                                <img src="{{ $work->url }}" class="img-fluid" alt=""/>
                                            </div>
                                        </div>
                                   </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
        <br>
        <br>
        <br>
        <br>
    </section>

@else
    <br><br>
    <h1 class="text-center mx-auto">NO HAY TRABAJOS PARA MOSTRAR</h1>
    <br><br>
@endif

@endsection