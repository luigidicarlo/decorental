@extends("layouts.app");
@section("content")
<div class="container">
<div class="row">
    @foreach ($products as $product)
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <div class="card text-center item-Height">
            <img src="{{$product->image}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-text text-right"> Precio :{{$product->price}}</h4>
                <h4 class="card-text text-right">Descuento:{{$product->discount}}</h4>
                <h6 class="card-title text-left">{{$product->name}}</h6>
                <p class="card-text">{{$product->description}}</p>
                <a href="#" class="btn btn-primary">Ver Producto</a>
            </div>
        </div>
        </div>
    @endforeach
 </div>
@endsection