@extends('layouts.app')

@section('content')
    <div class="col-md-1"></div>
    <div class="col-xs-12 col-md-10">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">
                    {{ $product->name }}
                </h1>
            </div>
            <div class="card-body">
                <p class="lead">
                    {{ $product->description }}
                </p>
                <hr>
                <div class="text-center">
                    <strong>
                        {{ $product->price }} {{ env('CUR_SYMBOL', 'VEF') }}
                    </strong>
                </div>
            </div>
            <div class="card-footer">
                <small class="text-muted">
                    {{ $product->created_at }}
                </small>
            </div>
        </div>
    </div>
@endsection