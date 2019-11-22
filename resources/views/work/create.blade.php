@extends('layouts.app')

@section('content')

<div class="col-md-3"></div>
<div class="col-xs-12 col-md-6 mx-auto">
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Nuevo Trabajo</h1>
        </div>
        <div class="card-body">
            <form action="/work" method="post">
            @csrf

                <div class="form-group">
                    <label for="name">URL DE IMAGEN</label>
                    <br>
                    <input type="text" name="url" id="name" class="form-control" placeholder=""
                        required autofocus>
                </div>                

                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary text-white">
                            Crear Trabajo
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection