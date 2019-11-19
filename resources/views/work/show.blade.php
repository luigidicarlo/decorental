@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row text-center">
		<div class="col-md-12">
			<br><br>
			<a href="/work" class="btn btn-primary text-white">
                    Volver a la lista de trabajos
            </a>
            <br><br><br>
			<img class="img-fluid" src="{{ $work->url }}">		
		</div>
	</div>
</div>

@endsection