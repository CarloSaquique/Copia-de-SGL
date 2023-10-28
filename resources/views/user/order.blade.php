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
        <div class="ml-auto ">
            <h3 class="bg-blue-950 rounded-md text-white px-3 py-2">En proceso</h3>
        </div>
    </div>

    {{-- Direcciones --}}
    <h3 class="font-bold text-xl">Direcciones</h3>
    <div class="flex space-x-1">
        @foreach ($address as $a)
            <div class="border-gray-300 border-2 rounded-xl w-1/2 p-5 space-x-5">
                @if($a->type == 1)
                    <h3 class="font-bold">Dirección Recolección</h3>
                @else
                    <h3 class="font-bold">Dirección Entrega</h3>
                @endif
                <div>
                    <h3 class="font-bold">{{$a->name}}</h3>
                    <h3>{{$a->municipio}} {{$a->departamento}}{{$a->address}}</h3>
                    <h3 class="font-bold">{{$a->phone}}</h3>
                    <h3>{{$a->email}}</h3>
                </div>
            </div>
        @endforeach

        <div class="border-gray-300 border-2 rounded-xl w-1/2 p-5 space-x-5">
            @if($order->type==2 && $quotation->service==1 && $packages[0]->bill==null)
                <form action="">
                    <h3 class="font-bold text-xl">Carga tu Factura</h3>
                    <h3 class="font-bold">Total a declarar: ${{ number_format((float)$packages[0]->price, 2, '.', '')}}</h3>
                    <div class="flex space-x-1 mt-5">
                        <input type="text" class="rounded-lg w-full" placeholder="Tracking Aereo">
                        <input type="text" class="rounded-lg w-full" placeholder="Palabra Clave">
                    </div>
                    <div class="flex py-5">
                        <div class="items-center bg-white">
                            <button type="button" class="upload bg-[rgb(0,100,255)] text-white flex mr-auto
                                rounded-md px-3 py-2 hover:bg-[rgb(0,200,255)] border border-gray-400">
                                Cargar Archivo
                                <svg class="w-6 h-6 mx-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="m14.707 4.793-4-4a1 1 0 0 0-1.416 0l-4 4a1 1 0 1 0 1.416 1.414L9 3.914V12.5a1 1 0 0 0 2 0V3.914l2.293 2.293a1 1 0 0 0 1.414-1.414Z"/>
                                    <path d="M18 12h-5v.5a3 3 0 0 1-6 0V12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                                </svg>
                            </button>
                            <input type="file" hidden>
                        </div>
                        <div class="ml-auto">
                            <button type="submit" class="bg-[rgb(0,100,255)] text-white
                                rounded-md px-3 py-2 h- hover:bg-[rgb(0,200,255)]">
                                Enviar
                            </button>
                        </div>
                    </div>
                </form>
            @endif
        </div>
    </div>

    {{-- Package --}}
    {{-- {{$packages}} --}}
    <h3 class="font-bold text-xl">Paquetes</h3>
    <div class="flex space-x-1">
            <div class="border-gray-300 border-2 rounded-xl w-1/2 p-5 space-x-5">
                @if($order->type == 1)
                    <h3 class="font-bold">Courier Nacional</h3>

                    @foreach ($packages as $p)
                    <div class="flex space-x-5">

                        <h3>Paquete #1</h3>
                        <h3>{{$p->size}}cm</h3>
                        <h3>{{$p->weight}}lb</h3>
                        <h3>
                            {{ $p->fragile == 0 ? '-' : 'X' }}
                        </h3>
                        <h3>
                            {{ $p->dangerous == 0 ? '-' : 'X' }}
                        </h3>
                        <h3>
                            {{ $p->perishable == 0 ? '-' : 'X' }}
                        </h3>
                    </div>
                    @endforeach
                @elseif($order->type == 2)
                    <h3 class="font-bold">Courier Miami</h3>

                    @foreach ($packages as $p)
                    <div class="flex space-x-5">
                        <h3>${{number_format((float)$p->shipping, 2, '.', '')}}</h3>
                        <h3>{{$p->weight}}lb</h3>
                        <h3>{{number_format((float)$p->price, 2, '.', '')}}</h3>
                        {{-- {{$quotation->currency == 'Q'? 'Q':'$'}} --}}
                    </div>
                    @endforeach
                @elseif($order->type == 3)
                    <h3 class="font-bold">Courier China</h3>
                    @foreach ($packages as $p)
                    <div class="flex space-x-5">
                        <h3>${{number_format((float)$p->shipping, 2, '.', '')}}</h3>
                        <h3>{{$p->weight}}lb</h3>
                        <h3>${{number_format((float)$p->price, 2, '.', '')}}</h3>
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
                    <button class="bg-blue-500 px-3 py-3 text-white rounded-lg text-base hover:bg-blue-400">
                        Orden De Servicio Al Cliente
                    </button>
                </a>
            </div>
    </div>
@endsection

