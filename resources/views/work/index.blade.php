@extends('layouts.app')

@section('content')

<div class="col-md-1"></div>
<div class="col-xs-12 col-md-10 mx-auto">
    <br>
    <div class="row">
        <div class="col-md-12 mx-auto">
            <a href="/home" class="btn btn-primary btn-pink text-white">
                {{ __('Volver al inicio del administrador') }}
            </a>    
        </div>    
    </div>
    <br>
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Trabajos realizados</h1>
        </div>
        <div class="card-body">

            <div class="text-center mb-4">
                <a href="/work/create" class="btn btn-primary text-white">
                    Nuevo Trabajo
                </a>
            </div>

            @if ($works->count())

            <ul class="list-group">
                @foreach ($works as $work)
                <li class="list-group-item">
                    <div class="clearfix">
                        <div class="float-left mr-auto">
                        	<img src="{{ $work->url }}" width="80px">
                            <a href="/work/{{ $work->id }}">
                                Ver imagen
                            </a>

                        </div>
                        <div class="float-right ml-auto">
                            <a href="/work/{{ $work->id }}/edit" class="btn btn-primary text-white mx-4">
                                Editar
                            </a>
                            <form class="d-inline" action="/work/{{ $work->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger text-white">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>

            @else

            <h3>No hay resultados para mostrar</h3>

            @endif
        </div>
    </div>
</div>
<br><br><br>
@endsection