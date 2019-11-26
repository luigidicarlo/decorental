@extends("layouts.app");
@section("content")
<div class="container">
<h1 class="text-center">Decoraciones</h1>
<div class="row">
     @foreach ($products as $product)
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 p-2">
        <div class="card text-center item-Height">
            <img src="{{$product->image}}" class="card-img-top" alt="...">
            <div class="card-body blanks">
            <strong class="card-title text-left  "><h3 class="text-center">{{$product->name}}</h3></strong>
                <p class="card-text text-right  " > <h4 class="text-center ">Precio :{{$product->price}}$ - <del>{{$product->discount}} </del>$</h4></p>
                <!-- <p class="card-text text-right " > {{$product->category_name}}</p> -->
                <a href="/products/{{$product->id}}" class="btn pinks text-white">Ver Producto</a>
            </div>
        </div>
        </div>
    @endforeach
</div>
<div class="pagination my-4 text-center mx-auto">
    {{$products->links()}}
</div>
@endsection