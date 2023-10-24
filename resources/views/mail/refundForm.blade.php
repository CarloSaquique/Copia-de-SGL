@extends('layouts.app')

@section('content')
<section class="m-10 p-5 bg-white rounded-xl">
    <form action="/refund-form" method="POST" autocomplete="off" enctype="multipart/form-data">
        @csrf
        <h3 class="text-2xl text-center">Formulario de Reembolso</h3>
        <div class=" w-full mx-auto p-10 rounded-lg flex justify-evenly">
            <div class="w-1/3 space-y-5">
                <div class="border-b-2">
                    <h3 class="text-base">Nombre Completo de solicitante</h3>
                    <input name="full_name" class="w-full border-transparent focus:border-transparent focus:ring-0" type="text" value="Nombre Completo">
                </div>
                <div class="border-b-2">
                    <h3 class="text-base">Número de Identificación CUI</h3>
                    <input name="cui" class="w-full border-transparent focus:border-transparent focus:ring-0" type="text" value="3506674320101">
                </div>
                <div class="border-b-2">
                    <h3 class="text-base">Empresa para la que labora</h3>
                    <input name="company" class="w-full border-transparent focus:border-transparent focus:ring-0" type="text" value="Nombre Empresa">
                </div>
                <div class="border-b-2">
                    <h3 class="text-base">Puesto que desempeña</h3>
                    <input name="position" class="w-full border-transparent focus:border-transparent focus:ring-0" type="text" value="Nombre Puesto">
                </div>
                <div class="border-b-2">
                    <h3 class="text-base">Numero de Pedido OSC</h3>
                    <input name="osc_number" class="w-full border-transparent focus:border-transparent focus:ring-0" type="text" value="4321">
                </div>
                <div class="border-b">
                    <h3>Describa El Tipo De Servicio:</h3>
                    <select name="service_type" class="w-full border-gray-300 rounded-lg p-2 text-sm">
                        <option value="0">Seleccione Una Opción</option>
                        <option value="1">Aéreo</option>
                        <option value="2" selected>Courier</option>
                        <option value="3">FCL</option>
                        <option value="4">LCL</option>
                        <option value="5">Terrestre</option>
                        <option value="6">Aduana</option>
                        <option value="7">Seguro</option>
                        <option value="8">Brokerage</option>
                        <option value="9">Tienda en línea</option>
                    </select>
                </div>
                <div class="border-b-2">
                    <h3 class="text-base">Describa el nombre de su asesor de ventas</h3>
                    <input name="consultant_name" class="w-full border-transparent focus:border-transparent focus:ring-0" type="text" value="Nombre Consultor">
                </div>
                <div class="border-b">
                    <h3>Cargue la factura de su compra</h3>
                    <input name="invoice" class=" text-white" type="file">
                </div>

                <div class="border-b">
                    <h3>Cargue el packing slip</h3>
                    <input name="package_slip" class=" text-white" type="file">
                </div>

                <div class="border-b">
                    <h3>Cargue la factura de cobro por SGL</h3>
                    <input name="sgl_invoice" class=" text-white" type="file">
                </div>
                <div class="border-b">
                    <h3>Su Reclamo Se Debe A:</h3>
                    <select name="claim_type"  class="w-full border-gray-300 rounded-lg p-2 text-sm">
                        <option value="0">Seleccione Una Opción</option>
                        <option value="1">Pérdida parcial de mercancías</option>
                        <option value="2">Pérdida total</option>
                        <option value="3">Nunca recibí mi mercancía</option>
                        <option value="4" selected>Se cobro mas de lo cotizado</option>
                        <option value="5">No recibí deposito en garantía</option>
                    </select>
                </div>
            </div>
            <div class="w-1/3 space-y-1">

                <div class="border-b">
                    <h3>Pago seguro de carga</h3>
                    <select name="secure_payment" class="w-full border-gray-300 rounded-lg p-2 text-sm">
                        <option value="0">Seleccione Una Opción</option>
                        <option value="1" selected>Sí</option>
                        <option value="2">No</option>
                    </select>
                </div>

                <div class="border-b">
                    <h3>No recibió reintegro de pagos adicionales o depósitos en garantía</h3>
                    <select name="refund_received" class="w-full border-gray-300 rounded-lg p-2 text-sm">
                        <option value="0">Seleccione Una Opción</option>
                        <option value="1">Sí</option>
                        <option value="2" selected>No</option>
                    </select>
                </div>

                <div class="border-b">
                    <h3>Para compras dentro del servicio TODO INCLUIDO seleccione las fechas de compra y pago de servicio, método de pago utilizado </h3>
                    <div class="flex p-5 space-x-1">
                        <input name="purchase_date" class="rounded-lg border-gray-300" type="date">
                        <select name="payment_type" class="w-full border-gray-300 rounded-lg p-2 text-sm">
                            <option value="0">Seleccione Una Opción</option>
                            <option value="1">tarjeta de credito/debito</option>
                            <option value="2" selected>efectivo</option>
                            <option value="3">transferencia bancaria</option>
                            <option value="4">paypal</option>
                            <option value="5">puntos bancarios</option>
                            <option value="6">tarjetas prepago de regalo</option>
                        </select>
                    </div>
                    <button class="px-4 py-2 rounded-xl bg-blue-950 text-white ml-auto block">+</button>
                </div>


                <div class="border-b">
                    <h3>Describa su reclamo:</h3>
                    <textarea name="claim_description" id="" cols="50" rows="5"></textarea>
                </div>

                <div class="border-b">
                    <h3>Ingrese nombre de comprador en Factura de SGL:</h3>
                    <input name="buyer_name" class="w-full border-transparent focus:border-transparent focus:ring-0" type="text" value="Nombre Comprador">
                </div>

                <div class="border-b">
                    <h3>Ingrese numero de Nit:</h3>
                    <input name="nit" class="w-full border-transparent focus:border-transparent focus:ring-0" type="text" value="85322593">
                </div>

                <div class="border-b">
                    <h3>Ingrese dirección fiscal:</h3>
                    <input name="fiscal_address" class="w-full border-transparent focus:border-transparent focus:ring-0" type="text" value="10a avenida 12-23 zona 2 de Guatemala">
                </div>

                <div class="border-b">
                    <h3>Cargue Dpi de propietario o/y Representante Legal:</h3>
                    <input name="legal_dpi" class=" text-white" type="file">
                </div>


                <div class="border-b">
                    <h3>Correo electrónico:</h3>
                    <input name="buyer_email" class="w-full border-transparent focus:border-transparent focus:ring-0" type="text" value="email@email.com">
                </div>

                <div class="border-b">
                    <h3>Seleccione el medio de pago para su Reintegro</h3>
                    <select name="refund_type" class="w-full border-gray-300 rounded-lg p-2 text-sm">
                        <option value="0">Seleccione Una Opción</option>
                        <option value="1" selected>Transferencia bancaria</option>
                        <option value="2">Cheque</option>
                    </select>
                </div>

                <div class="border-b">
                    <h3>Seleccione el tipo de moneda para reintegro:</h3>
                    <select name="refund_currency" class="w-full border-gray-300 rounded-lg p-2 text-sm">
                        <option value="0">Seleccione Una Opción</option>
                        <option value="1" selected>QTZ</option>
                        <option value="2">USD</option>
                    </select>
                </div>

                <div class="flex items-center space-x-2">
                    <input name="discount" type="checkbox">
                    <h3>Seleccione la casilla para descuento del 5% por gastos administrativos:</h3>
                </div>

                <div class="py-10">
                    <button type="submit" class="bg-blue-950 text-white  px-3 py-2 rounded-xl ml-auto block text-lg">Enviar</button>
                </div>
            </div>
        </div>
    </form>
</section>
@endsection
