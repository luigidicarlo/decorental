@extends('layouts.app')

@section('content')
<div class="col-md-1"></div>
<div class="col-xs-12 col-md-10 mx-auto">
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">
                {{ __('Categorías') }}
            </h1>
        </div>
        <div class="card-body">
            <div class="text-center mb-4">
                <a href="/category/create" class="btn btn-primary text-white">
                    {{ __('Nueva Categoría') }}
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 75%">
                                {{ __('Nombre') }}
                            </th>
                            <th style="width: 25%">
                                {{ __('Gestionar') }}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>
                                    {{ $category->parent_id > 0 ? '-- '.$category->name : $category->name }}
                                </td>
                                <td>
                                    <div class="container-fluid">
                                        <div class="row mw-100">
                                            <div class="col-xs-6 mr-3">
                                                <a href="/category/{{ $category->id }}/edit" class="btn btn-primary text-white">
                                                    {{ __('Editar') }}
                                                </a>
                                            </div>
                                            <div class="col-xs-6">
                                                <form class="d-inline" action="/category/{{ $category->id }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger text-white">
                                                        {{ __('Eliminar') }}
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection