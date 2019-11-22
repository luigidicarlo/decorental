@extends('layouts.app')

@section('content')
<br><br>
<div class="align-items-center">
    <div class="container">
        <h2 class="text-center">Formulario de Contacto</h2>
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-6 pb-5">
                <form>
                    <div class="card border-primary rounded-0 shadow form-container">
                        <div class="card-header p-0">
                            <div class="bg-pink text-white text-center py-2">
                                <h3><i class="fa fa-envelope"></i> Contáctanos</h3>
                                <p class="m-0">Con gusto te ayudaremos</p>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user icons-pink"></i></div>
                                    </div>                                    
                                    <input type="text" class="form-control" id="nombre" placeholder="Nombre y Apellido" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope icons-pink"></i></div>
                                    </div>                                    
                                    <input type="email" class="form-control" id="nombre" placeholder="ejemplo@gmail.com" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-comment icons-pink"></i></div>
                                    </div>                                    
                                    <textarea class="form-control" placeholder="Envianos tu Mensaje" required></textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" value="Enviar" class="btn bg-pink text-pink btn-block rounded-0 py-2">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection