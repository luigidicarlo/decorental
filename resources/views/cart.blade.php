@extends('layouts.app')

@section('content')

<br><br>
<div class="pb-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

        <!-- Shopping cart table -->
        <div class="table-responsive">
          <table class="table">
            <thead class="bg-header">
              <tr>
                <th scope="col" class="border-0">
                  <div class="p-2 px-3 text-uppercase">Producto</div>
                </th>
                <th scope="col" class="border-0">
                  <div class="py-2 text-uppercase">Precio</div>
                </th>
                <th scope="col" class="border-0">
                  <div class="py-2 text-uppercase">Cantidad</div>
                </th>
                <th scope="col" class="border-0">
                  <div class="py-2 text-uppercase">Remover</div>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="border-0">
                  <div class="p-2">
                    <img
                      src="https://http2.mlstatic.com/customs-ba-zapatos-hombre-botitas-eco-cuero-vestir-keyw-full-D_NQ_NP_853759-MLA31102426796_062019-Q.jpg"
                      alt="" width="70" class="img-fluid rounded shadow-sm">
                    <div class="ml-3 d-inline-block align-middle">
                      <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Zapato</a></h5><span
                        class="text-muted font-weight-normal font-italic d-block">Category: Zapatos</span>
                    </div>
                  </div>
                </th>
                <td class="border-0 align-middle"><strong>100$</strong></td>
                <td class="border-0 align-middle"><strong>1</strong></td>
                <td class="border-0 align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
              </tr>
              <tr>
                <th scope="row" class="border-0">
                  <div class="p-2">
                    <img
                      src="http://www.hikoreanfashion.com/76776-thickbox_default/blanca-sin-cuello-dise%C3%B1ador-manga-larga-casual-camisas-de-vestir.jpg"
                      alt="" width="70" class="img-fluid rounded shadow-sm">
                    <div class="ml-3 d-inline-block align-middle">
                      <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Camisa</a></h5><span
                        class="text-muted font-weight-normal font-italic d-block">Category: Ropa</span>
                    </div>
                  </div>
                </th>
                <td class="border-0 align-middle"><strong>67$</strong></td>
                <td class="border-0 align-middle"><strong>1</strong></td>
                <td class="border-0 align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="row py-5 p-4 bg-white rounded shadow-sm">
          <div class="col-lg-12 mx-auto">
            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold bg-header">Resumen de Orden
            </div>
            <div class="p-4">
              <p class="font-italic mb-4">El envío y los costos adicionales son calculados en base a los datos
                ingresados</p>
              <ul class="list-unstyled mb-4">
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Subtotal de la
                    orden</strong><strong>$390.00</strong></li>
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Gastos de
                    envío</strong><strong>$10.00</strong></li>
                <li class="d-flex justify-content-between py-3 border-bottom"><strong
                    class="text-muted">Impuesto</strong><strong>$0.00</strong></li>
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                  <h5 class="font-weight-bold">$400.00</h5>
                </li>
              </ul><a href="#" class="btn btn-dark rounded-pill py-2 btn-block">Enviar Presupuesto</a>
            </div>
          </div>
        </div>
        <!-- End -->
      </div>
    </div>
  </div>
</div>


@endsection