@extends('layouts.app')

@section('content')

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif

<div class="container">
    <div class="row mw-100">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-pink">
                    <h2 class="text-center">
                        {{ __('Gestionar Productos') }}
                    </h2>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>

@endsection