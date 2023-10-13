@extends('layouts.app')

@section('content')
<section class="m-10 p-5 bg-white rounded-xl">
    <h3 class="text-2xl text-center">Formulario de Reembolso</h3>
    <div class=" w-full mx-auto p-10 rounded-lg flex justify-evenly">
        <div class="w-1/3 space-y-5">
            <div class="border-b-2">
                <h3 class="text-base">Nombre Completo de solicitante</h3>
                <input class="w-full border-transparent focus:border-transparent focus:ring-0" type="text" placeholder="">
            </div>
            <div class="border-b-2">
                <h3 class="text-base">Número de Identificación CUI</h3>
                <input class="w-full border-transparent focus:border-transparent focus:ring-0" type="text" placeholder="">
            </div>
            <div class="border-b-2">
                <h3 class="text-base">Empresa para la que labora</h3>
                <input class="w-full border-transparent focus:border-transparent focus:ring-0" type="text" placeholder="">
            </div>
            <div class="border-b-2">
                <h3 class="text-base">Puesto que desempeña</h3>
                <input class="w-full border-transparent focus:border-transparent focus:ring-0" type="text" placeholder="">
            </div>
            <div class="border-b-2">
                <h3 class="text-base">Numero de Pedido OSC</h3>
                <input class="w-full border-transparent focus:border-transparent focus:ring-0" type="text" placeholder="">
            </div>
            <div class="border-b">
                <h3>Describa El Tipo De Servicio:</h3>
                <select name="" id="" class="w-full border-gray-300 rounded-lg p-2 text-sm">
                    <option value="">Seleccione Una Opción</option>
                    <option value="">Aéreo</option>
                    <option value="">Courier</option>
                    <option value="">FCL</option>
                    <option value="">LCL</option>
                    <option value="">Terrestre</option>
                    <option value="">Aduana</option>
                    <option value="">Seguro</option>
                    <option value="">Brokerage</option>
                    <option value="">Tienda en línea</option>
                </select>
            </div>
            <div class="border-b-2">
                <h3 class="text-base">Describa el nombre de su asesor de ventas</h3>
                <input class="w-full border-transparent focus:border-transparent focus:ring-0" type="text" placeholder="">
            </div>
            <div class="border-b">
                <h3>Cargue la factura de su compra</h3>
                <input class=" text-white" type="file">
            </div>

            <div class="border-b">
                <h3>Cargue el packing slip</h3>
                <input class=" text-white" type="file">
            </div>

            <div class="border-b">
                <h3>Cargue la factura de cobro por SGL</h3>
                <input class=" text-white" type="file">
            </div>
            <div class="border-b">
                <h3>Su Reclamo Se Debe A:</h3>
                <select name="" id="" class="w-full border-gray-300 rounded-lg p-2 text-sm">
                    <option value="">Seleccione Una Opción</option>
                    <option value="">Seleccione Una Opción</option>
                    <option value="">Perdida parcial de mercancías</option>
                    <option value="">pérdida total</option>
                    <option value="">nunca recibí mi mercancía</option>
                    <option value="">se cobro mas de lo cotizado</option>
                    <option value="">no recibí deposito en garantía</option>
                </select>
            </div>
            <img src="../images/baloo con portapapeles.png" alt="">
        </div>
        <div class="w-1/3 space-y-1">

            <div class="border-b">
                <h3>Pago seguro de carga</h3>
                <select name="" id="" class="w-full border-gray-300 rounded-lg p-2 text-sm">
                    <option value="">Seleccione Una Opción</option>
                    <option value="">Sí</option>
                    <option value="">No</option>
                </select>
            </div>

            <div class="border-b">
                <h3>No recibió reintegro de pagos adicionales o depósitos en garantía</h3>
                <select name="" id="" class="w-full border-gray-300 rounded-lg p-2 text-sm">
                    <option value="">Seleccione Una Opción</option>
                    <option value="">Sí</option>
                    <option value="">No</option>
                </select>
            </div>

            <div class="border-b">
                <h3>Para compras dentro del servicio TODO INCLUIDO seleccione las fechas de compra y pago de servicio, método de pago utilizado </h3>
                <div class="flex p-5 space-x-1">
                    <input class="rounded-lg border-gray-300" type="date">
                    <select name="" id="" class="w-full border-gray-300 rounded-lg p-2 text-sm">
                        <option value="">Seleccione Una Opción</option>
                        <option value="">tarjeta de credito/debito</option>
                        <option value="">efectivo</option>
                        <option value="">transferencia bancaria</option>
                        <option value="">paypal</option>
                        <option value="">puntos bancarios</option>
                        <option value="">tarjetas prepago de regalo</option>
                    </select>
                </div>
                <button class="px-4 py-2 rounded-xl bg-blue-950 text-white ml-auto block">+</button>
            </div>


            <div class="border-b">
                <h3>Describa su reclamo: </h3>
                <textarea name="" id="" cols="50" rows="5"></textarea>
            </div>

            <div class="border-b">
                <h3>Ingrese nombre de comprador en Factura de SGL:</h3>
                <input class="w-full border-transparent focus:border-transparent focus:ring-0" type="text" placeholder="">
            </div>

            <div class="border-b">
                <h3>Ingrese numero de Nit:</h3>
                <input class="w-full border-transparent focus:border-transparent focus:ring-0" type="text" placeholder="">
            </div>

            <div class="border-b">
                <h3>Ingrese dirección fiscal:</h3>
                <input class="w-full border-transparent focus:border-transparent focus:ring-0" type="text" placeholder="">
            </div>

            <div class="border-b">
                <h3>Cargue Dpi de propietario o/y Representante Legal:</h3>
                <input class=" text-white" type="file">
            </div>


            <div class="border-b">
                <h3>Correo electrónico:</h3>
                <input class="w-full border-transparent focus:border-transparent focus:ring-0" type="text" placeholder="">
            </div>

            <div class="border-b">
                <h3>Seleccione el medio de pago para su Reintegro</h3>
                <select name="" id="" class="w-full border-gray-300 rounded-lg p-2 text-sm">
                    <option value="">Seleccione Una Opción</option>
                    <option value="">Transferencia bancaria</option>
                    <option value="">Cheque</option>
                </select>
            </div>

            <div class="border-b">
                <h3>Seleccione el tipo de moneda para reintegro:</h3>
                <select name="" id="" class="w-full border-gray-300 rounded-lg p-2 text-sm">
                    <option value="">Seleccione Una Opción</option>
                    <option value="">QTZ</option>
                    <option value="">USD</option>
                </select>
            </div>

            <div class="flex items-center space-x-2">
                <input type="checkbox">
                <h3>Seleccione la casilla para descuento del 5% por gastos administrativos:</h3>
            </div>

            <div class="py-10">
                <button class="bg-blue-950 text-white  px-3 py-2 rounded-xl ml-auto block text-lg">Enviar</button>
            </div>
        </div>
    </div>
</section>
@endsection
