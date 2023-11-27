@extends('user.base')

@section('user-content')
<section class="min-h-screen max-w-7xl mx-auto">
    @php
        $order->type == 1? $courier='nacional':false;
        $order->type == 2? $courier='miami':false;
        $order->type == 3? $courier='china':false;
    @endphp
    <h3 class="font-bold text-lg text-center">Resumen De Mi Orden</h3>
    {{-- Header Data --}}
    <div class="px-2 py-5 space-y-1">

        <div class="space-y-1 max-w-2xs">
            @if (isset($tracking))
                <form action="/track/" method="POST" class="flex items-center text-center w-fit mx-auto p-2 rounded-lg">
                    @csrf
                    <input name="tracking_number" type="text" value="{{$tracking->tracking_number}}" hidden>
                    <button type="submit" class="bg-blue-900 rounded-lg text-sm px-2
                    text-white py-3 mr-auto align-middle flex
                    hover:bg-blue-400">{{$tracking_status->state}}</button>
                </form>
                <div class="text-center">
                    <h3 class="font-bold text-sm">No.Tracking: {{$tracking->tracking_number}}</h3>
                </div>
            @else
                <div class="flex space-x-2 items-center bg-blue-700 text-white py-1 px-1 rounded-lg ">
                    <svg class="w-4 h-4 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2h4a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4m6 0a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1m6 0v3H6V2M5 5h8m-8 5h8m-8 4h8"/>
                    </svg>
                    <h3 class="text-sm">Pendiente de Confirmar</h3>
                </div>
            @endif

            <div class="flex space-x-2 items-center bg-blue-200 text-blue-800 py-1 px-1 rounded-lg">
                <svg class="w-4 h-4 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                    <path d="M19 0H1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1ZM2 6v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6H2Zm11 3a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8a1 1 0 0 1 2 0h2a1 1 0 0 1 2 0v1Z"/>
                </svg>
                <h3 class="w-fit">{{$courier}}</h3>
            </div>

            <div class="flex space-x-2 items-center text-blue-700 py-1 px-1 rounded-lg">
                <svg class="w-3 h-3 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm14-7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm-5-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm-5-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4Z"/>
                </svg>
                <h3 class="text-sm">{{$order->created_at}}</h3>
            </div>

            <div class="flex space-x-2 items-center text-green-800 py-1 px-1 rounded-lg">
                <svg class="w-4 h-4 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 2a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1M2 5h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Zm8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"/>
                  </svg>
                <h3 class="font-bold text-sm">Total de esta orden: {{$payment->currency}}{{ number_format((float)$payment->total, 2, '.', '')}}</h3>
            </div>
        </div>
    </div>

    {{-- Direcciones --}}
    <div class="space-x-1 my-10 2xl:space-x-10 lg:flex">
        @foreach ($address as $a)
            <div class="max-w-xl">
                @if($a->type == 1)
                    <h3 class="font-bold text-base">Dirección Recolección</h3>
                @else
                    <h3 class="font-bold text-base">Dirección Entrega</h3>
                @endif
                <div class="border-gray-200 border rounded-lg p-5 space-y-3 text-sm h-full">
                    <h3 class="font-bold">{{$a->name}}</h3>
                    <h3>{{$a->municipio}} {{$a->departamento}}{{$a->address}}</h3>
                    <h3>{{$a->phone}}</h3>
                    <h3>{{$a->email}}</h3>
                    @if($a->date)
                        <h3>Fecha de Recolección</h3>
                        <span>A partir de: {{$a->date}}</span>
                    @endif
                </div>
            </div>
        @endforeach
    </div>

    {{-- Documentos pendientes --}}
    @if($order->type && $quotation->service == 1)
        <div class="max-w-xl">
            <h3 class="font-bold text-base">Documentos pendientes</h3>
            <div class="border-gray-200 border rounded-lg p-5 space-y-3 text-sm h-full">
                @if($quotation->service==1)
                    @if($invoice==null)
                        <h3 class="font-bold text-xl text-center">Carga Tu Factura(s) De Compra</h3>
                        <p class="text-sm text-center">
                            has click en el boton de abajo para cargar la factura(s) de tu compra,
                            recuerda seguir las instrucciones brindadas en el enlace.
                        </p>
                        <a href="/upload-invoice/{{$order->idorder}}">
                            <button id="upload_invoice_btn" type="button" class="flex mx-auto mt-5 bg-blue-800 px-4 py-2
                                rounded-md text-white cursor-pointer" >Enviar Factura
                            </button>
                        </a>
                    @else
                        <h3 class="font-bold text-xl text-center">Factura Recibida</h3>
                        <p class="text-sm text-center">
                            Si deseas reenviar la factura enviada
                            has click en el boton de abajo
                        </p>

                        <div class="flex justify-evenly">
                            <form id="user_order_show_invoice_form" action="/show-invoice/{{$order->idorder}}" method="GET">
                                @csrf
                                <button id="user_order_show_invoice_btn" type="button" class="flex mx-auto mt-5 bg-blue-800 px-4 py-2
                                    rounded-md text-white cursor-pointer" >Ver Factura
                                </button>
                            </form>

                            <a href="/upload-invoice/{{$order->idorder}}">
                                <button id="upload_invoice_btn" type="button" class="flex mx-auto mt-5 bg-blue-800 px-4 py-2
                                    rounded-md text-white cursor-pointer" >Reenviar Factura
                                </button>
                            </a>

                            <form id="user_order_delete_invoice_form" action="/delete-invoice" method="POST">
                                @csrf
                                <input type="text" value="{{$order->idorder}}" name="idorder" hidden>
                            </form>
                        </div>
                    @endif
                @endif
            </div>
        </div>
    @endif


    {{-- Package --}}
    <h3 class="font-bold text-base">Datos Paquete(s)</h3>
    <div class="space-x-1 my-10 2xl:space-x-10 lg:flex">
        <div class="max-w-xl max-h-44 overflow-y-auto overflow-x-hidden ">
            @if($order->type == 1)
                @foreach ($packages as $p)
                    <div class="grid grid-cols-3 space-x-1 justify-evenly text-sm md:grid-cols-6 md:space-x-3">
                        <div>
                            <h3 class="w-fit rounded-md px-1
                            py-1 font-bold text-blue-900">
                            No. </h3>
                            <h3>Paquete #1</h3>
                        </div>

                        <div>
                            <h3 class="w-fit rounded-md px-1
                            py-1 font-bold text-blue-900">
                            Tamaño. </h3>
                            <h3>{{$p->size}}cm</h3>
                        </div>

                        <div>
                            <h3 class="w-fit rounded-md px-1
                            py-1 font-bold text-blue-900">
                            Peso. </h3>
                            <h3>{{$p->weight}}lb</h3>
                        </div>

                        <div>
                            <h3 class="w-fit rounded-md px-1
                            py-1 font-bold text-blue-900">
                            Frágil. </h3>
                            <h3>
                                {{ $p->fragile == 0 ? '-' : 'X' }}
                            </h3>
                        </div>

                        <div>
                            <h3 class="w-fit rounded-md px-1
                            py-1 font-bold text-blue-900">
                            Peligroso. </h3>
                            <h3>
                                {{ $p->dangerous == 0 ? '-' : 'X' }}
                            </h3>
                        </div>

                        <div>
                            <h3 class="w-fit rounded-md px-1
                                py-1 font-bold text-blue-900">
                                Peligroso. </h3>
                            <h3>
                                {{ $p->perishable == 0 ? '-' : 'X' }}
                            </h3>
                        </div>
                    </div>
                @endforeach
            @elseif($order->type == 2 || $order->type == 3)
                @foreach ($packages as $p)
                <div class="flex justify-evenly  rounded-lg">
                    <div>
                        <h3 class="w-fit rounded-md px-2
                            py-1 font-bold text-blue-900">Valor mercadería: </h3>
                        <h3 class=" w-fit rounded-md px-2
                        py-1 font-bold text-black">${{number_format((float)$p->price, 2, '.', '')}}</h3>
                    </div>
                    <div>
                        <h3 class="w-fit rounded-md px-2
                            py-1 font-bold text-blue-900">
                            Peso: </h3>
                        <h3 class=" w-fit rounded-md px-2
                        py-1 font-bold text-black">{{$p->weight}}lb</h3>
                    </div>
                    <div>
                        <h3 class="w-fit rounded-md px-2
                            py-1 font-bold text-blue-900">Shipping: </h3>
                        <h3 class=" w-fit rounded-md px-2
                        py-1 font-bold text-black">${{number_format((float)$p->shipping, 2, '.', '')}}</h3>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>

    {{-- Datos de Facturación y Pago--}}
    <div class="space-x-1 space-y-2 my-10 2xl:space-x-10 lg:flex lg:space-x-0 lg:space-y-0">
        <div class="border rounded-xl p-5 space-x-5">
            <div class="text-sm space-y-3">
                <h3 class="font-bold text-base">Datos De Facturación</h3>
                <h3>NIT:{{$billing->nit}}</h3>
                <h3>{{$billing->name}}</h3>
                <h3>{{$billing->address}}</h3>
            </div>

            <a href="/{{$courier}}-quoter-generate-osc/{{$quotation->idquotation}}" target="_blank" >
                <h3 class="font-bold text-xl text-center">Orden De Servicio Al Cliente</h3>
                <p class="text-sm text-center">
                    Si deseas ver la orden de servicio al cliente
                    has click en el boton de abajo
                </p>
                <button  type="button" class="flex mx-auto mt-5 bg-blue-800 px-4 py-2
                    rounded-md text-white cursor-pointer hover:bg-blue-600" >Ver
                </button>
            </a>
        </div>
        <div class="border rounded-xl p-5 space-x-5">
            <div class="text-sm space-y-3">
                @php
                    $payment->type == 1? $payment_type ='Tarjeta de Credito/Debito':false;
                    $payment->type == 2? $payment_type ='Transferencia Bancaria':false;
                    $payment->type == 3? $payment_type ='Pago en Agencia':false;
                    $payment->type == 4? $payment_type ='Pago Contra Entrega':false;
                @endphp
                <h3 class="font-bold text-base">Datos De Pago</h3>
                <h3>{{isset($payment_type)? $payment_type:false}}</h3>
                <h3>Total a pagar: {{$payment->currency}}{{$payment->total}}</h3>
            </div>
        </div>
    </div>
</section>
@endsection

@push('child-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>
    <script>
        $('#user_order_show_invoice_btn').click(function(){
            $('#user_order_show_invoice_form').ajaxSubmit({
                success: function(res, status, xhr, form) {
                    var a = document.createElement('a');
                    a.href = res;
                    a.target = '_blank';
                    document.body.appendChild(a);
                    a.click();
                    asyncCall();
                }
            });
        });
        async function asyncCall(_res) {
            console.log('calling');
            const result = await resolveAfter2Seconds();
            console.log(result);
            $('#user_order_delete_invoice_form').ajaxSubmit({
                success: function(res, status, xhr, form) {
                    console.log(res);
                }
            });
        }
        function resolveAfter2Seconds() {
            return new Promise((resolve) => {
                setTimeout(() => {
                    resolve('resolved');
                }, 2000);
            });
        }
    </script>
@endpush