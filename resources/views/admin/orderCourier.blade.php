@extends('admin.base')

@section('admin-content')
    <section class="flex h-full text-black">
        {{-- Lateral Nav --}}
        <div class="border-2 border-gray-100 bg-gray-100 h-screen w-3/12 p-3 space-y-1">
            {{-- <div class="px-5cursor-pointer border-l-2 p-2">
                <a class="bg-blue-950 p-2 text-white rounded-xl" href="/national-quoter-admin-generate-pdf/{{$quotation->idquotation}}" target="_blank" >Ver OSC</a>
            </div> --}}
            <div class="px-5cursor-pointer border-l-2 p-2">
                @if($order->type == "1")
                    <a  href="/national-quoter-generate-osc/{{$quotation->idquotation}}" target="_blank" >
                        <button class="bg-blue-900 p-2 text-white rounded-xl text-sm">
                            Orden De Servicio Al Cliente
                        </button>
                    </a>
                @elseif($order->type == "2")
                    <a  href="/miami-quoter-generate-osc/{{$quotation->idquotation}}" target="_blank" >
                        <button class="bg-blue-900 p-2 text-white rounded-xl text-sm">
                            Orden De Servicio Al Cliente
                        </button>
                    </a>
                @elseif($order->type == "3")
                    <a  href="/china-quoter-generate-osc/{{$quotation->idquotation}}" target="_blank" >
                        <button class="bg-blue-900 p-2 text-white rounded-xl text-sm">
                            Orden De Servicio Al Cliente
                        </button>
                    </a>
                @endif
            </div>
            {{-- Link --}}
            @if($quotation->service == 2)
            <div class="px-5cursor-pointer border-l-2 p-2">
                <a  href="{{$order->packages[0]->link}}" target="_blank" >
                    <button class="bg-blue-900 p-2 text-white rounded-xl text-sm">
                        Ver Link del producto
                    </button>
                </a>
            </div>
            @endif
            {{-- Factura --}}
            @if($quotation->service == 1)
            <div class="px-5 p-2 items-center">
                <form id="test_form" action="/test-factura/{{$order->idorder}}" method="GET">
                    @csrf
                    {{-- <button id="test_btn" type="button" class="bg-blue-950 text-white p-2 rounded-xl">Ver Factura</button> --}}
                </form>
                <form id="test_delete" action="/test-delete" method="POST">
                    @csrf
                    <input type="text" value="{{$order->idorder}}" name="idquotation" hidden>
                </form>
            </div>
            @endif

            {{-- <div class="px-5 cursor-pointer border-l-2 p-2">
                <a class="bg-red-500 p-2 text-white rounded-xl"  href="#" onclick="window.print()">Imprimir Guia Operador</a>
            </div>
            <div class="px-5 cursor-pointer border-l-2 p-2">
                <a class="bg-red-500 p-2 text-white rounded-xl" href="#" onclick="window.print()">Imprimir Guia Cliente</a>
            </div> --}}
        </div>

        {{-- Orden --}}
        <div class="p-5 w-full text-justify">
            {{-- Order Data --}}
            <h3 class="text-2xl font-bold">Orden#{{$order->idorder}}</h3>
            <div class="flex">
                <h3>{{$order->type}}</h3>
                <h3 class="ml-auto">{{$order->created_at}}</h3>
            </div>
            <h3 class="font-bold">{{$payment->currency}}{{ number_format((float)$payment->total, 2, '.', '')}}</h3>

            {{-- Direcciones --}}
            <div class="flex mt-5 border ">
                {{-- Recolección --}}
                <div class="mx-auto w-1/2 p-2">
                    @if($order->type == 'Courier Nacional')
                        <div class="flex">
                            <h3 class="font-bold mx-auto">RECOLECTAR EN:</h3>
                            {{-- <h3>{{$order->sender->agency}}</h3> --}}
                        </div>
                        <div class="flex space-x-1">
                            <h3 class="font-bold">Dirección:</h3>
                            @if(isset($order->sender->address))
                                <h3>{{$order->sender->address}}</h3>
                            @endif
                        </div>
                        <div class="flex space-x-1">
                            <h3 class="font-bold">Nombre:</h3>
                            @if(isset($order->sender->address))
                            <h3>{{$order->sender->name}}</h3>
                            @endif
                        </div>
                        <div class="flex space-x-1">
                            <h3 class="font-bold">Telefono:</h3>
                            @if(isset($order->sender->address))
                            <h3>{{$order->sender->phone}}</h3>
                            @endif
                        </div>
                        <div class="flex space-x-1">
                            <h3 class="font-bold">Email:</h3>
                            @if(isset($order->sender->address))
                            <h3>{{$order->sender->email}}</h3>
                            @endif
                        </div>

                    @elseif($order->type == 'Courier Miami' || $order->type == 'Courier China')
                        @if($order->type == 'Courier Miami')
                            <h3 class="font-bold">Miami</h3>
                        @else
                            <h3 class="font-bold">China</h3>
                        @endif
                        <div class="flex space-x-2">
                            {{-- <h3 class="font-bold">Servicio:</h3> --}}
                            <h3>{{$quotation->service == 1? 'POBOX':'Todo Incluido';}}</h3>
                        </div>
                        <div class="flex space-x-2">
                            {{-- <h3 class="font-bold">Moneda:</h3> --}}
                            <h3>({{$payment->currency == 1? 'Q':'$';}})</h3>
                        </div>
                    @endif
                </div>
                {{-- Entrega --}}
                <div class="mx-auto w-1/2 p-2">
                    <div class="flex">
                        <h3 class="font-bold mx-auto">ENTREGAR EN:</h3>
                        {{-- <h3>{{$order->destination->agency}}</h3> --}}
                    </div>
                    <div class="flex space-x-1">
                        <h3 class="font-bold">Dirección:</h3>
                        <h3>{{$order->destination->address}}</h3>
                    </div>
                    <div class="flex space-x-1">
                        <h3 class="font-bold">Nombre:</h3>
                        <h3>{{$order->destination->name}}</h3>
                    </div>
                    <div class="flex space-x-1">
                        <h3 class="font-bold">Telefono:</h3>
                        <h3>{{$order->destination->phone}}</h3>
                    </div>
                    <div class="flex space-x-1">
                        <h3 class="font-bold">Email:</h3>
                        <h3>{{$order->destination->email}}</h3>
                    </div>
                </div>
            </div>

            {{-- Paquetes --}}
            <div class="h-36 p-2 text-sm w-fit mx-auto overflow-y-auto mt-10">
                <table>
                    @if($order->type == 'Courier Nacional')
                        <tr class="uppercase bg-blue-950 text-white">
                            <th class="px-6 py-3">no.</th>
                            <th class="px-6 py-3">tamaño</th>
                            <th class="px-6 py-3">peso</th>
                            <th class="px-6 py-3">fragil</th>
                            <th class="px-6 py-3">peligroso</th>
                            <th class="px-6 py-3">perecedero</th>
                        </tr>
                        @foreach ($order->packages as $key => $p)
                            <tr class="">
                                <th>{{$key}}</th>
                                <th>{{$p->size}}</th>
                                <th>{{$p->weight}}</th>
                                <th>{{$p->fragile}}</th>
                                <th>{{$p->dangerous}}</th>
                                <th>{{$p->perishable}}</th>
                            </tr>
                        @endforeach
                    @else
                        <tr class="uppercase bg-blue-900 text-white">
                            <th class="px-6 py-3">no.</th>
                            <th class="px-6 py-3">precio</th>
                            <th class="px-6 py-3">peso</th>
                            <th class="px-6 py-3">shipping</th>
                        </tr>
                        @foreach ($order->packages as $key => $p)
                        <tr class="text-center">
                            <th>{{$key+1}}</th>
                            <th>{{$payment->currency == 1? 'Q':'$';}}{{$p->price}}</th>
                            <th>{{$p->weight}}lb</th>
                            <th>{{$payment->currency == 1? 'Q':'$';}}{{$p->shipping}}</th>
                        @endforeach
                        </tr>
                    @endif
                </table>
            </div>

            {{-- Tracking --}}
            <div>
                @if(isset($order->tracking->tracking_number))
                    <div class="flex mb-5">
                        <h3 class="w-fit mr-auto px-44">No.Tracking: {{$order->tracking->tracking_number}}</h3>
                        {{-- <button class="w-fit ml-auto mr-40 p-2 bg-red-600 rounded-xl text-white" onclick="window.print()">Imprimir Guia</button> --}}
                    </div>
                @endif
                <div class="w-fit mx-auto flex items-center my-10 space-x-2">
                    @if(isset($order->tracking))
                    @foreach ($order->tracking_states as $key=>$status)
                    @if($status)
                        <div class="text-center text-xs">

                            <div class="bg-{{$order->tracking->$key == null ? 'gray-400':'blue-800';}} mx-auto rounded-full w-fit px-2 h-10 relative
                            text-white flex items-center">
                                <svg class="w-6 h-6 mx-1 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                    <path d="M19 0H1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1ZM2 6v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6H2Zm11 3a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8a1 1 0 0 1 2 0h2a1 1 0 0 1 2 0v1Z"/>
                                </svg>
                                {{$status}}
                            </div>
                            <h3>{{$order->tracking->$key == null ? '-':$order->tracking->$key;}}</h3>
                        </div>
                    @endif
                    @endforeach
                    @endif
                </div>

                @if(isset($order->tracking->status_1) && !isset($order->tracking->$last_status))
                <form action="/tracking-update" method="POST">
                    @csrf
                    <input type="text" name="idtracking" value="{{$order->tracking->idtracking}}" hidden>
                    <Button type="submit" class="text-white bg-blue-950 p-2
                        rounded-xl block mx-auto my-5">
                        Actualizar Tracking
                    </Button>
                </form>
                @endif
            </div>
        </div>

    </section>

    {{-- <script>
        $('#Guide').click(function(){
            var divToPrint= $('#Guide').parent().html();

            newWin= window.open("");
            newWin.document.write("<link rel='stylesheet' href='http://127.0.0.1:8000/css/app.css' type='text/css' media='print'/>" );
            // newWin.document.write('<link href="http://127.0.0.1:8000/css/app.css" rel="stylesheet">');
            newWin.document.write(divToPrint);
            newWin.document.close();
            newWin.print();
            // newWin.close();
        });
    </script> --}}

@endsection


@push('child-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>
    <script>
        $('#test_btn').click(function(){
            $('#test_form').ajaxSubmit({
                success: function(res, status, xhr, form) {
                    console.log(res);
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
            $('#test_delete').ajaxSubmit({
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


