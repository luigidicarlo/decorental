@extends("layouts.app");
@section("content")

<br><br>
<div class="container">
    <div class="row">
        @if ($products->count())
            @foreach ($products as $product)
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="card text-center item-Height">
                        <img src="{{ $product->image }}" class="card-img-top" alt="...">
                        <div class="card-body pink">
                        <strong class="card-title text-left"><h1 class="text-center">{{ $product->name }}</h1></strong>
                            <p class="card-text text-right"> <h3 class="text-center">{{ $product->price }}$</h3></p>
                            <!-- <p class="card-text text-right " > {{$product->category_name}}</p> -->
                            <a style="width: 100%;" href="/products/{{$product->id}}" class="btn btn-primary btn-pink text-white">Ver Producto</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="float-right">
                {{ $products->links() }}
            </div>
        @else
            <br><br><br><br>
            <h1 class="text-center mx-auto">NO HAY RESULTADOS PARA SU BÚSQUEDA</h1>
            <br><br><br><br>
        @endif

    </div>
</div>
<br><br>
@endsection