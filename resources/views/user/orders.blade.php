@extends('user.base')

@section('user-content')
<section class="min-h-screen xl:px-32">
    <h3 class="font-bold text-xl">Mis Ordenes</h3>
    @if(isset($orders))
        <div class="overflow-auto  border-r border-l  rounded-md p-1">
            @foreach ($orders as $order)
            @php
                $order->type == 1? $courier='Nacional':false;
                $order->type == 2? $courier='Miami':false;
                $order->type == 3? $courier='China':false;
            @endphp
            <a href="/user-order/{{$order->idorder}}">
                <div class="py-1 cursor-pointer flex">
                    <div class="mr-auto ml-5 text-xs md:text-sm lg:text-base">
                        <div class="flex space-x-2 items-center bg-blue-200 text-blue-800 py-1 px-1 rounded-lg w-24 md:w-28">
                            <svg class="w-3 h-3 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                <path d="M19 0H1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1ZM2 6v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6H2Zm11 3a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8a1 1 0 0 1 2 0h2a1 1 0 0 1 2 0v1Z"/>
                            </svg>
                            <h3 class="w-fit">{{$courier}}</h3>
                        </div>
                        <h3 class="font-bold">Orden {{$order->order_number}}</h3>
                        <h3 class="text-2xs md:text-xs">{{$order->created_at}}</h3>
                    </div>

                    <div class="ml-auto text-xs md:text-sm lg:text-lg">
                        <h3 class="font-mono">{{$order->currency}}{{ number_format((float)$order->total, 2, '.', '')}}</h3>
                        {{-- <h3 class="bg-blue-950 rounded-lg text-white text-xs py-1 px-3">En proceso</h3> --}}
                    </div>
                </div>
            </a>
            <hr class="border-gray-300 w-11/12 mx-auto">
            @endforeach
        </div>
    @endif
</section>
@endsection
