@extends('layouts.app')

@section('content')

<main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/14.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Content-->
          <div class="p-4">

            <div class="mb-3">
              <a href="">
                <span class="badge purple mr-1">Categoría 2</span>
              </a>                          
            </div>
            <h1>{{ $product->name }}</h1>
            <p class="lead">
              <span class="mr-1">
                <del>{{ $product->price }}{{ env('CUR_SYMBOL', '$') }}</del>
              </span>
              <span>{{ $product->price - ($product->price * $product->discount) }}{{ env('CUR_SYMBOL', '$') }} </span>
            </p>

            <p class="lead font-weight-bold">Descripción</p>

            <p>{{ $product->description }}</p>

            <form class="d-flex justify-content-left">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="form-control" style="width: 100px">
              <button class="btn btn-primary btn-md my-0 p" type="submit">Agregar al carrito
                <i class="fas fa-shopping-cart ml-1"></i>
              </button>

            </form>

          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    <!--Grid row-->
    <div class="row row-underline">
        <div class="col-md-6"> <span class=" deal-text">Especificaciones</span> </div>
        <div class="col-md-6"> <a href="#" data-abc="true"> <span class="ml-auto view-all"></span> </a> </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="col-md-12">
                <tbody>
                    <tr class="row mt-10">
                        <td class="col-md-4"><span class="p_specification">Sales Package :</span> </td>
                        <td class="col-md-8">
                            <ul>
                                <li>2 in 1 Laptop, Power Adaptor, Active Stylus Pen, User Guide, Warranty Documents</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="row mt-10">
                        <td class="col-md-4"><span class="p_specification">Número de modelo:</span> </td>
                        <td class="col-md-8">
                            <ul>
                                <li> 14-dh0107TU </li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="row mt-10">
                        <td class="col-md-4"><span class="p_specification">Part Number :</span> </td>
                        <td class="col-md-8">
                            <ul>
                                <li>7AL87PA</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="row mt-10">
                        <td class="col-md-4"><span class="p_specification">Color :</span> </td>
                        <td class="col-md-8">
                            <ul>
                                <li>Black</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="row mt-10">
                        <td class="col-md-4"><span class="p_specification">Recomendable para :</span> </td>
                        <td class="col-md-8">
                            <ul>
                                <li>Procesamiento y multitareas</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="row mt-10">
                        <td class="col-md-4"><span class="p_specification">Marca de procesador :</span> </td>
                        <td class="col-md-8">
                            <ul>
                                <li>Intel</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">

          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/11.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">

          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">

          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </main>
@endsection