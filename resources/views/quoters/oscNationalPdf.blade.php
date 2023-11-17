<!DOCTYPE html>
<html>
<head>
    <title>Cotización No.{{$order_number}}</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #111111;
            text-align: left;
            padding: 8px;
            font-size: 0.8rem;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        .blank{
            border:none;
            background-color: white;
        }
    </style>
</head>
<body>
    <hr style="height:5px;border-width:0;color:rgb(0, 98, 255);background-color:rgb(0, 98, 255);">
    <hr style="height:5px;border-width:0;color:rgb(0, 98, 255);background-color:rgb(0, 98, 255);">
    <div>
        <div style=" float: left;">
            <img src="{{ public_path('images/main/sgl_express.jpg') }}" width="110" height="110">
        </div>
        <br>
        <p style="text-align: right;">
            Fecha: {{ $created_at }} <br>
            Cotización No.{{ $order_number }}<br>
        </p>
    </div>
    <br><br>
    <div>
        <div>GRUPO SGL</div>
        <div>5ª Avenida 15-45 Zona 10 Centro Empresarial torre 1 oficina 102</div>
        <div>Cda Guatemala, Guatemala</div>
        {{-- <div>email: sales11@gruposgl.com</div>
        <div>Tel: +502 2379-0640</div> --}}
    </div>

    <div style="height: 150px;">
        <p style="float: left;">
            Facturar a: <br>
            GRUPO SGL <br>
            5ta. Avenida 15-45 Zona 10 <br>
            Edificio Centro Empresarial <br>
        </p>

    </div>

    <table>
        <tr>
            <th>Cant.</th>
            <th>Articulo</th>
            <th>Descripción</th>
            <th>Precio <br> Unitario </th>
            <th>Impuesto</th>
            <th>IVA</th>
            <th>Total</th>
        </tr>
        {{-- @foreach ($packages as $key=>$p)
            <tr>
                <td>{{ ($key+1) }}</td>
                <td>({{ ($p->size) }})cm</td>
                <td>({{ ($p->weight) }})cm</td>
                @if($p->fragile)
                    <td>X</td>
                @else
                    <td>-</td>
                @endif
                @if($p->dangerous)
                    <td>X</td>
                @else
                    <td>-</td>
                @endif
                @if($p->perishable)
                    <td>X</td>
                @else
                    <td>-</td>
                @endif
            </tr>
        @endforeach --}}
        <tr>
            <td>1</td>
            <td></td>
            <td>Courier Nacional</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        <tr>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank" style="text-align: right; font-size:0.9rem;">Subtotal: Q{{ $total-$total*0.12 }}</td>
        </tr>
        <tr>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank" style="text-align: right; font-size:0.9rem;">IVA 12%: Q{{ $total*0.12 }}</td>
        </tr>
        <tr>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank "></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank" style="text-align: right; font-size:0.9rem; font-weight: bold">Total: Q{{ $total }}</td>
        </tr>
    </table>

    <br><br><br>

</body>
</html>


{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CotizaciónNO#53454345</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <h3 class="text-2xl font-bold ml-auto">Cotización No. 4324234</h3>
    <h3 class="text-2xl font-bold ml-auto">Fecha: 1/8/2023</h3>
    <h3 class="text-2xl font-bold ml-auto">Origen : </h3>
    <h3 class="text-2xl font-bold ml-auto">Destino: </h3>
    <div>Paquetes</div>
    <div>Condiciones de Servicio</div>

</body>
</html> --}}
