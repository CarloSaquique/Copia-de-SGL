@extends('user.base')

@section('user-content')
<section>
    <h3 class="font-bold text-xl">Mis Ordenes</h3>
    <div class="overflow-auto  border-r border-l  rounded-md p-1">
        @foreach ($orders as $order)
        <a href="/user-order/{{$order->idorder}}">
            <div class="px-5 py-1 cursor-pointer flex">
                @if($order->type == 1)
                    <div class="py-3 px-5 text-blue-900 bg-blue-500 rounded-xl text-center">N</div>
                    <div class="mr-auto ml-5">
                        <h3 class="">Orden {{$order->order_number}} Courier Nacional</h3>
                        <h3 class="text-sm">{{$order->created_at}}</h3>
                    </div>
                @elseif($order->type == 2)
                    <div class="py-3 px-5 text-green-900 bg-green-500 rounded-xl text-center">M</div>
                    <div class="mr-auto ml-5">
                        <h3 class="">Orden {{$order->order_number}} Courier Miami</h3>
                        <h3 class="text-sm">{{$order->created_at}}</h3>
                    </div>
                @elseif($order->type == 3)
                    <div class="py-3 px-5 text-red-900 bg-red-500 rounded-xl text-center">C</div>
                    <div class="mr-auto ml-5">
                        <h3 class="">Orden {{$order->order_number}} Courier China</h3>
                        <h3 class="text-sm">{{$order->created_at}}</h3>
                    </div>
                @endif

                <div class="ml-auto">
                    <h3 class="text-center">{{$order->currency}}{{ number_format((float)$order->total, 2, '.', '')}}</h3>
                    {{-- <h3 class="bg-blue-950 rounded-lg text-white text-xs py-1 px-3">En proceso</h3> --}}
                </div>
            </div>
        </a>
        <hr class="border-gray-300 w-11/12 mx-auto">
        @endforeach
    </div>
</section>
@endsection
