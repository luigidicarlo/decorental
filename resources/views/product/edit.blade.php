@extends('layouts.app')

@section('content')

<div class="col-md-3"></div>
<div class="col-xs-12 col-md-6 mx-auto">
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Editar Producto</h1>
        </div>
        <div class="card-body">
            <form action="/product/{{ $product->id }}" method="post">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Nombre</label>
                    <br>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nombre del producto"
                        value="{{ $product->name }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="form-text text-danger">
                            {{ $errors->first('name') }}
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="description">Descripción</label>
                    <br>
                    <textarea name="description" id="description" rows="8" class="form-control"
                        placeholder="Descripción del producto..." required>{{ $product->description }}</textarea>
                    @if ($errors->has('description'))
                        <span class="form-text text-danger">
                            {{ $errors->first('description') }}
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="price">Precio</label>
                    <br>
                    <input type="number" name="price" id="price" class="form-control" step="0.01" min="0"
                        max="99999999.99" placeholder="Precio del producto" value="{{ $product->price }}" required>
                    @if ($errors->has('price'))
                        <span class="form-text text-danger">
                            {{ $errors->first('price') }}
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="discount">Descuento</label>
                    <br>
                    <input type="number" name="discount" id="discount" class="form-control" step="0.01" min="0"
                        max="100" value="{{ $product->discount }}" placeholder="Descuento para el producto">
                    @if ($errors->has('discount'))
                        <span class="form-text text-danger">
                            {{ $errors->first('discount') }}
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="image">Imagen</label>
                    <br>
                    <input type="file" name="image" id="image" class="form-control" placeholder="Imagen del producto">
                    @if ($errors->has('image'))
                        <span class="form-text text-danger">
                            {{ $errors->first('image') }}
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary text-white">
                            Editar Producto
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection