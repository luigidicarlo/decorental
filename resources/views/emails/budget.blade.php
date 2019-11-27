<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presupuesto Decorental</title>
</head>
<body style="font-size: 16px">
    <div style="width: 60%; margin: 0 auto; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);">
        <div style="background-color: #f2d5d1; padding: 1rem; border-top-left-radius: 5px; border-top-right-radius: 5px;">
            <h1 style="text-align: center; color: #000">
                Presupuesto Decorental
            </h1>
        </div>
        <div style="padding: 2rem; padding-bottom: 0.5rem;">
            <p style="font-size: 1.1rem">
                ¡Hola! Recibes este correo porque solicitaste un presupuesto en Decorental.
            </p>
            <p style="font-size: 1.1rem">
                A continuación, podrás visualizar los productos que están contemplados en el presupuesto.
            </p>
        </div>
        <hr>
        <div>
            <table style="width: 100%;">
                <thead>
                    <tr>
                        <th style="padding: 1rem;">Producto</th>
                        <th style="padding: 1rem;">Precio</th>
                        <th style="padding: 1rem;">Cantidad</th>
                        <th style="padding: 1rem;">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td style="padding: 1rem; text-align: center">
                            {{ $product->name }}
                        </td>
                        <td style="padding: 1rem; text-align: center">
                            {{ $product->price * (1 - ($product->discount / 100)) }}
                        </td>
                        <td style="padding: 1rem; text-align: center">
                            {{ $product->quantity }}
                        </td>
                        <td style="padding: 1rem; text-align: center">
                            {{ ($product->price * (1 - ($product->discount / 100))) * $product->quantity }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <hr>
        <div style="text-align: right; padding: 1rem;">
            <p style="font-size: 1.5rem">
                <strong>
                    {{ $cartTotal }}
                </strong>
            </p>
        </div>
    </div>
</body>
</html>