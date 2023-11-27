<!DOCTYPE html>
<html>
<head>
    <title>OSC No.{{ $order_idorder }}</title>
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
    <div style="display: block">
        <div style=" float: left;">
            <img src="{{ public_path('images/main/sgl_express.jpg') }}" width="110" height="110">
        </div>
        <br>
        <p style="text-align: right;">
            Fecha: {{ $created_at }} <br>
            OSC No: {{ $order_idorder }}<br>
        </p>
    </div>
    <br><br><br>
    <div>
        <div>Grupo SGL</div>
        <div>5ª Avenida 15-45 Zona 10 Centro Empresarial torre 1 oficina 102</div>
        <div>Cda Guatemala, Guatemala</div>
        {{-- <div>email: sales11@gruposgl.com</div> --}}
        {{-- <div>Tel: +502 2379-0640</div> --}}
    </div>

    <div style="height: 150px;">
        <p style="float: left;">
            Facturar a: <br>
            NIT: {{$billing->nit}} <br>
            {{$billing->name}} <br>
            {{$billing->address}} <br>
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
        <tr>
          <td>{{ $weight }}</td>
          <td>AERCM1</td>
          <td>Courier Miami- Guatemala costo por Libra</td>
          <td>{{$currency}}{{ $transport-$transport*0.12 }}</td>
          <td>IVA</td>
          <td>{{$currency}}{{ $transport*0.12 }}</td>
          <td>{{$currency}}{{ $transport}}</td>
        </tr>
        <tr>
            <td>1</td>
            <td>DESCCC</td>
            <td>Gastos de desconsolidacion en origen <br> courier miami</td>
            {{-- clearance --}}
            <td>{{$currency}}{{ $clearance-$clearance*0.12 }}</td>
            <td>IVA</td>
            <td>{{$currency}}{{ $clearance*0.12 }}</td>
            <td>{{$currency}}{{ $clearance }}</td>
        </tr>
        <tr>
            <td>1</td>
            <td>INSURANCE</td>
            <td>SEGURO DE CARGA INTERNACIONAL</td>
            <td>{{$currency}}{{ ($insurance-$insurance*0.12) }}</td>
            <td>IVA</td>
            <td>{{$currency}}{{ $insurance*0.12 }}</td>
            <td>{{$currency}}{{ $insurance }}</td>
        </tr>
        <tr>
            <td>1</td>
            <td>DAI</td>
            <td>Pago de arancel</td>
            <td>{{$currency}}{{ $dai }}</td>
            <td>Ninguno</td>
            <td>{{$currency}}0.00</td>
            <td>{{$currency}}{{ $dai }}</td>
        </tr>
        <tr>
            <td>1</td>
            <td>IVA</td>
            <td>Pago de Impuestos</td>
            <td>{{$currency}}{{ $iva }}</td>
            <td>Ninguno</td>
            <td>{{$currency}}0.00</td>
            <td>{{$currency}}{{ $iva }}</td>
        </tr>
        @if ($duca)
        <tr>
            <td>1</td>
            <td>DUCA ID</td>
            <td>Pago de Impuestos</td>
            <td>{{$currency}}{{ $duca }}</td>
            <td>Ninguno</td>
            <td>{{$currency}}0.00</td>
            <td>{{$currency}}{{ $duca }}</td>
        </tr>
        @endif
        @if($sed)
        <tr>
            <td>1</td>
            <td>SED</td>
            <td>Pago de Impuestos</td>
            <td>{{$currency}}{{ $sed }}</td>
            <td>Ninguno</td>
            <td>{{$currency}}0.00</td>
            <td>{{$currency}}{{ $sed }}</td>
        </tr>
        @endif
        <tr>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td>Subtotal</td>
            <td>{{$currency}}{{ $total-$total*0.12 }}</td>
        </tr>
        <tr>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td>+ IVA 12%</td>
            <td>{{$currency}}{{ $total*0.12 }}</td>
        </tr>
        <tr>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td>Total</td>
            <td>{{$currency}}{{ number_format((float)$total, 2, '.', '')}}</td>
        </tr>
    </table>

</body>
</html>


