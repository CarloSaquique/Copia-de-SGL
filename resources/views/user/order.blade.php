@extends('user.base')

@section('user-content')
{{-- {{$order}} --}}
    <h3 class="font-bold text-xl text-center">Resumen De Mi Orden</h3>
    <div class="px-5 py-5 cursor-pointer flex space-x-5">
        <div class="mr-auto ">
            <h3 class="font-bold">Pedido Courier Nacional#1212</h3>
            <h3 class="">{{$order->created_at}}</h3>
            <h3 class="font-bold">Total: {{$quotation->currency}}{{ number_format((float)$payment->total, 2, '.', '')}}</h3>
        </div>
        <div class="ml-auto ">
            <h3 class="bg-blue-950 rounded-lg text-white px-3 py-2">En proceso</h3>
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
    </div>

    {{-- Package --}}
    {{-- {{$packages}} --}}
    <h3 class="font-bold text-xl">Paquetes</h3>
    <div class=" space-x-1">
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
                        <h3>{{$p->weight}}lb</h3>
                        <h3>{{$quotation->currency == 1? 'Q':'$'}}{{number_format((float)$p->price, 2, '.', '')}}</h3>
                    </div>
                    @endforeach
                @elseif($order->type == 3)
                    <h3 class="font-bold">Courier China</h3>
                    @foreach ($packages as $p)
                    <div class="flex space-x-5">
                        <h3>{{$p->weight}}lb</h3>
                        <h3>{{$quotation->currency == 1? 'Q':'$'}}{{number_format((float)$p->price, 2, '.', '')}}</h3>
                    </div>
                    @endforeach
                @endif

            </div>

    </div>
@endsection
