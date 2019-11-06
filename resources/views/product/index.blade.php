@extends('layouts.app')

@section('content')

<div class="col-md-1"></div>
<div class="col-xs-12 col-md-10">
    <div class="card">
        <div class="card-header">
            <h1>Productos</h1>
        </div>
        <div class="card-body">

            @if ($products->count())

            @foreach ($products as $product)
            <li>
                {{ $product->name }}: {{ $product->price }}
            </li>
            @endforeach

            @else

            <h3>No hay resultados para mostrar</h3>

            @endif

            <ul>
            </ul>
        </div>
    </div>
</div>

@endsection