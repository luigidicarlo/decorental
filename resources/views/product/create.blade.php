@extends('layouts.app')

@section('content')

<div class="col-md-3"></div>
<div class="col-xs-12 col-md-6">
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
                </div>

                <div class="form-group">
                    <label for="description">Descripción</label>
                    <br>
                    <textarea name="description" id="description" rows="20" class="form-control"
                        placeholder="Descripción del producto..." required></textarea>
                </div>

                <div class="form-group">
                    <label for="price">Precio</label>
                    <br>
                    <input type="number" name="price" id="price" class="form-control" step="0.01" min="0"
                        max="99999999.99" placeholder="Precio del producto" required>
                </div>

                <div class="form-group">
                    <label for="discount">Descuento</label>
                    <br>
                    <input type="number" name="discount" id="discount" class="form-control" step="0.01" min="0"
                        max="100" placeholder="Descuento para el producto">
                </div>

                <div class="form-group">
                    <label for="image">Imagen</label>
                    <br>
                    <input type="file" name="image" id="image" class="form-control" placeholder="Imagen del producto">
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