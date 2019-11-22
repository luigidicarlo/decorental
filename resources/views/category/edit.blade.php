@extends('layouts.app')

@section('content')
<div class="col-md-3"></div>
<div class="col-xs-12 col-md-6 mx-auto">
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">
                {{ __('Editar Categoría') }}
            </h1>
        </div>
        <div class="card-body">
            <form action="/category/{{ $category->id }}" method="post">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">
                        {{ __('Nombre') }}
                    </label>
                    <br>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nombre de la categoría"
                        value="{{ $category->name }}" required autofocus>
                </div>

                <div class="form-group">
                    <label for="parent_id">
                        {{ __('Categoría Padre') }}
                    </label>
                    <br>
                    <select name="parent_id" id="parent_id" class="form-control">
                        <option value="0" {{ $category->parent_id === 0 ? 'selected' : '' }}>
                            {{ __('Sin padre') }}
                        </option>
                        @foreach ($categories as $cat)
                            @if ($cat->id !== $category->id)
                                <option value="{{ $cat->id }}" {{ $category->parent_id === $cat->id ? 'selected' : '' }}>
                                    {{ $cat->name }}
                                </option>    
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary text-white">
                        {{ __('Editar') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection