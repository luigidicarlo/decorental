@extends('layouts.app')

@section('content')
    <div class="col-md-3"></div>
    <div class="col-xs-12 col-md-6">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">
                    {{ __('Nueva Categoría') }}
                </h1>
            </div>
            <div class="card-body">
                <form action="/category" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="name">
                            {{ __('Nombre') }}
                        </label>
                        <br>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nombre de la categoría" value="{{ old('name') }}" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="parent_id">
                            {{ __('Categoría Padre') }}
                        </label>
                        <br>
                        <select name="parent_id" id="parent_id" class="form-control">
                            <option value="0">
                                {{ __('Sin padre') }}
                            </option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary text-white">
                            {{ __('Agregar') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection