@extends('layouts.app')

@section('content')

<div class="col-md-1"></div>
<div class="col-xs-12 col-md-10">
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Productos</h1>
        </div>
        <div class="card-body">

            <div class="text-center mb-4">
                <a href="/product/create" class="btn btn-primary text-white">
                    Nuevo Producto
                </a>
            </div>

            @if ($products->count())
            
            <ul class="list-group">
                @foreach ($products as $product)
                <li class="list-group-item">
                    {{ $product->name }}: {{ $product->price }} 
                    <a href="/product/{{ $product->id }}/edit" class="btn btn-primary text-white mx-4">
                        Editar
                    </a>
                    <form class="d-inline" action="/product/{{ $product->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger text-white">
                            Eliminar
                        </button>
                    </form>
                </li>
                @endforeach
            </ul>

            @else

            <h3>No hay resultados para mostrar</h3>

            @endif
        </div>
    </div>
</div>

@endsection