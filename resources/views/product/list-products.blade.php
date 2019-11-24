@extends("layouts.app");
@section("content")
<div class="container">
<div class="row">
    @foreach ($products as $product)
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
        <div class="card text-center item-Height">
            <img src="{{$product->image}}" class="card-img-top" alt="...">
            <div class="card-body pink">
            <strong class="card-title text-left text-white "><h1 class="text-center">{{$product->name}}</h1></strong>
                <p class="card-text text-right text-white " > <h3 class="text-center text-white">Precio :{{$product->price}}$ - <del>{{$product->discount}} </del>$</h3></p>
                <!-- <p class="card-text text-right " > {{$product->category_name}}</p> -->
                <a href="/products/{{$product->id}}" class="btn btn-primary">Ver Producto</a>
            </div>
        </div>
        </div>
    @endforeach
</div>
<div class="pagination my-4 text-center mx-auto">
    {{$products->links()}}
</div> 
@endsection