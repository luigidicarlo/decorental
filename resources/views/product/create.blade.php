@extends('layouts.app')

@section('content')

<div class="col-md-3"></div>
<div class="col-xs-12 col-md-6 mx-auto">
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Nuevo Producto</h1>
        </div>
        <div class="card-body">
            <form action="/product" method="post">
                @csrf

                <div class="form-group">
                    <label for="name">Nombre</label>
                    <br>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nombre del producto"
                        required autofocus>
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
                        placeholder="Descripción del producto..." required></textarea>
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
                        max="99999999.99" placeholder="Precio del producto" required>
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
                        max="100" placeholder="Descuento para el producto">
                    @if ($errors->has('discount'))
                        <span class="form-text text-danger">
                            {{ $errors->first('discount') }}
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Example select</label>
                    @if ($categories->count())
                        <select class="form-control" name="category_id" id="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    @else
                        <h3>No hay categorías para mostrar</h3>
                    @endif
                </div>

                <div class="form-group">
                    <label for="image">URL de imagen</label>
                    <br>
                    <input type="text" name="image" id="image" class="form-control" placeholder="Imagen del producto">
                    @if ($errors->has('image'))
                        <span class="form-text text-danger">
                            {{ $errors->first('image') }}
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary text-white">
                            Crear Producto
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection