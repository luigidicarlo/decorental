@extends('layouts.app')

@section('content')

<div id="carouselExampleSlidesOnly" class="carousel carousel-fade slide" data-ride="carousel" data-pause="false">
    <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 img-fluid vh-100" src="https://www.65ymas.com/uploads/s1/18/90/13/devoluciones-de-compras-en-internet-que-se-les-exige-a-los-comercios-online.jpeg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 img-fluid vh-100" src="https://eventosestrella.com/wp-content/uploads/2017/05/img_2710-eventos-estrella-bodas-organizador-de-bodas.jpg" alt="Second slide">
        </div>
    </div>
</div>

{{-- <section class="container pt-3">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="font-weight-light">AAAAAAAAAAAAAAAAAa</h1>
        </div>
    </div>
</section> --}}
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
                            <img class="img-fluid" src="http://i.imgur.com/EW5FgJM.png" alt="Carousel 1">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-img-top card-img-top-200">
                            <img class="img-fluid" src="http://i.imgur.com/Hw7sWGU.png" alt="Carousel 2">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-img-top card-img-top-200">
                            <img class="img-fluid" src="http://i.imgur.com/g27lAMl.png" alt="Carousel 3">
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
                            <img class="img-fluid" src="//visualhunt.com/photos/l/1/office-student-work-study.jpg" alt="Carousel 4">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-img-top card-img-top-200">
                            <img class="img-fluid" src="//visualhunt.com/photos/l/1/working-woman-technology-computer.jpg" alt="Carousel 5">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-img-top card-img-top-200">
                            <img class="img-fluid" src="//visualhunt.com/photos/l/1/people-office-team-collaboration.jpg" alt="Carousel 6">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br><br>
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

            <h3>No hay resultados para mostrar</h3>

            @endif
          <!-- FIN DE CÓDIGO PRUEBA -->


<div class="py-4">
    <div class="container-fluid">
        <div class="row mw-100">
            <div class="col-md-3"></div>
            <div class="col-xs-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center">
                            Decorental
                        </h1>
                    </div>
                    <div class="card-body">
                        <p class="lead text-center">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum nostrum exercitationem eaque delectus
                            consequatur voluptatem voluptate reprehenderit debitis porro nobis. Cumque voluptatum culpa nulla
                            laborum mollitia maxime ipsam iure totam.
                        </p>
                    </div>
                </div>
            </div>            
        </div>                
    </div>
</div>

@endsection