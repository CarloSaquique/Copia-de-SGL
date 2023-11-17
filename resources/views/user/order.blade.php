@extends('user.base')

@section('user-content')

{{-- {{$order}} --}}
    <h3 class="font-bold text-xl text-center">Resumen De Mi Orden</h3>
    <div class="px-5 py-5 flex space-x-5">
        <div class="mr-auto ">
            @php
                $order->type==1? $courier_name='Courier Nacional':false;
                $order->type==2? $courier_name='Courier Miami':false;
                $order->type==3? $courier_name='Courier China':false;
            @endphp
            <h3 class="font-bold">Pedido {{$courier_name}} {{$order->order_number}}</h3>
            <h3 class="">{{$order->created_at}}</h3>
            <h3 class="font-bold">Total a pagar: {{$payment->currency}}{{ number_format((float)$payment->total, 2, '.', '')}}</h3>
        </div>
        <div class="ml-auto">
            @if (isset($tracking))
                <div class="text-center">
                    <h3>No.Tracking: {{$tracking->tracking_number}}</h3>
                </div>
                <form action="/track/" method="POST" class="flex items-center text-center w-fit mx-auto p-2 rounded-lg">
                    @csrf
                    <input name="tracking_number" type="text" value="{{$tracking->tracking_number}}" hidden>
                    <button type="submit" class="bg-blue-500 rounded-lg text-xs px-2
                    text-white py-2 mr-auto md:text-base md:py-2 align-middle flex
                    hover:bg-blue-400">{{$tracking_status->state}}</button>
                </form>
            @endif
        </div>
    </div>

    {{-- Direcciones --}}
    <div class="flex space-x-1">
        @foreach ($address as $a)
            <div class="border-gray-300 border-2 rounded-xl w-1/2 p-2 space-x-5">
                @if($a->type == 1)
                    <h3 class="font-bold">Dirección Recolección</h3>
                @else
                    <h3 class="font-bold">Dirección Entrega</h3>
                @endif
                <div>
                    <h3>Fecha de Recolección</h3>
                    <h3>{{$a->date}}</h3>
                    <h3 class="font-bold">{{$a->name}}</h3>
                    <h3>{{$a->municipio}} {{$a->departamento}}{{$a->address}}</h3>
                    <h3 class="font-bold">{{$a->phone}}</h3>
                    <h3>{{$a->email}}</h3>
                    @if($a->type == 2)
                        {{-- <input type="date"> --}}
                    @endif
                </div>
            </div>
        @endforeach


        @if($order->type && $quotation->service == 1)
            {{-- Invoice --}}
            <div class="border-gray-300 border-2 rounded-xl w-1/2 p-5 space-x-5">
                @if($quotation->service==1)
                    @if($invoice==null)
                        <h3 class="font-bold text-xl text-center">Carga tu Factura</h3>
                        <p class="text-sm text-center">
                            has click en el boton de abajo para cargar tu factura,
                            recuerda seguir las instrucciones brindadas en el enlace
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
        @endif
    </div>

    {{-- Package --}}
    {{-- {{$packages}} --}}
    <h3 class="font-bold text-lg">Datos Paquete(s)</h3>
    <div class="flex space-x-1">
            <div class="border-gray-300 border-2 rounded-xl w-1/2 p-5 space-x-">
                @if($order->type == 1)
                    <h3 class="font-bold">Courier Nacional</h3>

                    @foreach ($packages as $p)
                    <div class="flex justify-evenly text-sm text-center">
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
                @elseif($order->type == 2)
                    <h3 class="font-bold text-blue-900 text-center">Courier Miami</h3>

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

                        {{-- {{$quotation->currency == 'Q'? 'Q':'$'}} --}}
                    </div>
                    @endforeach
                @elseif($order->type == 3)
                    <h3 class="font-bold">Courier China</h3>
                    @foreach ($packages as $p)
                    <div class="">
                        <div>
                            <span class="w-fit rounded-md px-2
                                py-1 font-bold text-blue-900">Valor mercadería: </span>
                            <span class=" w-fit rounded-md px-2
                            py-1 font-bold text-black">${{number_format((float)$p->price, 2, '.', '')}}</span>
                        </div>
                        <div>
                            <span class="w-fit rounded-md px-2
                                py-1 font-bold text-blue-900">
                                Peso: </span>
                            <span class=" w-fit rounded-md px-2
                            py-1 font-bold text-black">{{$p->weight}}lb</span>
                        </div>
                        <div>
                            <span class="w-fit rounded-md px-2
                                py-1 font-bold text-blue-900">Shipping: </span>
                            <span class=" w-fit rounded-md px-2
                            py-1 font-bold text-black">${{number_format((float)$p->shipping, 2, '.', '')}}</span>
                        </div>
                    </div>
                    @endforeach
                @endif

            </div>
            <div class="border-gray-300 border-2 rounded-xl w-1/2 p-5 space-x-5">
                @php
                    $order->type == 1? $quoter ='national':false;
                    $order->type == 2? $quoter ='miami':false;
                    $order->type == 3? $quoter ='china':false;
                @endphp
                <a  href="/{{$quoter}}-quoter-generate-osc/{{$quotation->idquotation}}" target="_blank" >
                    <h3 class="font-bold text-xl text-center">Orden De Servicio Al Cliente</h3>
                    <p class="text-sm text-center">
                        Si deseas ver la orden de servicio al cliente
                        has click en el boton de abajo
                    </p>
                    <button  type="button" class="flex mx-auto mt-5 bg-blue-800 px-4 py-2
                        rounded-md text-white cursor-pointer" >Ver
                    </button>
                </a>
            </div>
    </div>
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