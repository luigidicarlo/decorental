@extends('layouts.app')

@section('content')

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif

<div class="container">
    <br><br>
    <div class="row mw-100">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-pink">
                    <h2 class="text-center">
                        {{ __('Menú de administración') }}
                    </h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mx-auto py-4">
                            <a href="/product" class="btn btn-primary btn-pink text-white">
                                {{ __('Administrar productos') }}
                            </a>
                        </div>
                        <div class="col-md-4 mx-auto py-4">
                            <a href="/work" class="btn btn-primary btn-pink text-white">
                                {{ __('Administrar trabajos') }}
                            </a>
                        </div>
                        <div class="col-md-4 mx-auto py-4">
                            <a href="/category" class="btn btn-primary btn-pink text-white">
                                {{ __('Administrar categorías') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>
@endsection