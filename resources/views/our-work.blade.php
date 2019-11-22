@extends('layouts.app')

@section('content')
<div class="container page-top">



        <div class="row">

            @if ($works->count())
                @foreach ($works as $work)

                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a data-toggle="modal" href="#" class="fancybox" rel="ligthbox" data-target="#id{{ $loop->iteration }}">
                        <img  class="zoom img-fluid" src="{{ $work->url }}"  alt="">                       
                    </a>
                </div>                
                <div class="modal fade bd-example-modal-lg show" id="id{{ $loop->iteration }}" role="dialog">
                    <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="dynamic-content">
                                    <img src="{{ $work->url }}" class="img-fluid" alt=""/>
                                </div>
                            </div>
                       </div>
                </div>

                @endforeach         
            @else

            <h3>No hay resultados para mostrar</h3>

            @endif                    
       </div>       
     
      

    </div>

@endsection