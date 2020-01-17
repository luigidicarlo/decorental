@extends('layouts.app')

@section('content')

<main class="mt-5 pt-4">
  <div class="container dark-grey-text mt-5">
    <div class="row wow fadeIn">
      <div class="col-md-6 mb-4">
        <img src="{{ $product->image }}" class="img-fluid" alt="">
      </div>

      <div class="col-md-6 mb-4">
        <div class="p-4">
          <h1>{{ $product->name }}</h1>
          <p class="lead">
            <span class="mr-1">
              <del>{{ $product->price }}{{ env('CUR_SYMBOL', '$') }}</del>
            </span>
            <span>{{ $product->price - ($product->price * ($product->discount / 100)) }}{{ env('CUR_SYMBOL', '$') }}
            </span>
          </p>

          <p class="lead font-weight-bold">Descripción</p>

          <p>{{ $short }}</p>

          <div id="add-to-cart-section">
            <form id="add-to-cart" class="d-flex justify-content-left">
              <input type="hidden" name="product_id" value="{{ $product->id }}">
              <input type="number" name="quantity" value="1" aria-label="Search" class="form-control"
                style="width: 100px">
              <button class="btn btn-primary btn-pink btn-md my-0 p ml-2" type="button" id="add-to-cart-toggler">Agregar al
                carrito
                <i class="fas fa-shopping-cart ml-1"></i>
              </button>
            </form>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="text-center">
          <h2 class=" mx-auto my-4">
            {{ __('DESCRIPCIÓN DEL PRODUCTO') }}
          </h2>  
        </div>
        
        <br>
        <p class="lead">
          {{ $product->description }}
        </p>
      </div>
    </div>

    <hr>

    {{-- RELATED PRODUCTS --}}
    <h2 class="text-center mx-auto my-4 section-title">
      {{ __('Productos Relacionados') }}
    </h2>
    <div class="row wow fadeIn mx-auto text-center">
      @foreach ($related as $elem)
        <div class="col-md-4 col-xs-12">
          <div class="related-product mx-2 p-2">
            <h3>{{ $elem->name }}</h3>
            <br>
            <img class="img-fluid" style="height: 128px" src="{{ $elem->image }}" alt="{{ $elem->name }}">
            <br>
            <div class="text-center p-2">
              <a href="/products/{{ $elem->id }}" class="btn btn-primary btn-pink text-white">
                {{ __('Ver Producto') }}
              </a>
            </div>
          </div>
        </div>
      @endforeach
    </div>

  </div>
</main>
@endsection