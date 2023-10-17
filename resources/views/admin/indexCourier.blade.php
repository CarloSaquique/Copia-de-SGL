@extends('admin.base')

@section('admin-content')
    <section class="flex h-full">
        <div class="border-2 border-gray-100 bg-gray-100 h-screen  w-2/12 p-3 space-y-1">
            <div class="px-5 hover:bg-gray-200 cursor-pointer border-l-2  border-blue-700">
                Todas las ordenes
            </div>
            <div class="px-5 hover:bg-gray-200 cursor-pointer border-l-2  border-blue-700">
                Courier Nacional
            </div>
            <div class="px-5 hover:bg-gray-200 cursor-pointer border-l-2  border-blue-700">
                Courier Miami
            </div>
            <div class="px-5 hover:bg-gray-200 cursor-pointer border-l-2  border-blue-700">
                Courier China
            </div>
        </div>
        <div class="w-full p-5 relative">
            <nav class="border-b-2 border-gray-100 flex my-3">
                <div class="space-x-3 py-2">
                    <a href="" class=" border-b-2 border-blue-600 py-1">Todas(234)</a>
                    <a href="" class="">Completas(12)</a>
                    <a href="" class="">Pendientes(5)</a>
                    <a href="" class="">Canceladas(2)</a>

                </div>
                <div class="ml-auto">
                    <input class="bg-gray-50 border border-gray-300 text-sm rounded-xl" type="date">
                    <input class="bg-gray-50 border border-gray-300 text-sm rounded-xl" type="text" placeholder="Filter">
                </div>
            </nav>

            <div class="overflow-y-auto">
                @if(isset($orders))
                    @foreach ($orders as $order)
                        <div class="border-b-2 flex py-5">
                                @if(!isset($order->tracking))
                                    <div class="py-3 px-5 text-red-800 bg-red-400 rounded-xl text-center">P</div>
                                @else
                                    <div class="py-3 px-5 text-yellow-800 bg-yellow-400 rounded-xl text-center">T</div>
                                @endif
                                <div class="items-center flex space-x-3 ml-3">
                                    <h3 class="hover:text-blue-400 font-bold cursor-pointer">Orden#{{$order->idorder}}</h3>
                                    <h3>{{$order->type}}</h3>
                                    <h3>{{$order->created_at}}</h3>
                                </div>
                                <div class="ml-auto flex space-x-2 items-center">
                                    @if($today->diff($order->created_at)->h == 0)
                                        <h3>Hace menos de una hora</h3>
                                    @else
                                        <h3>Hace {{$today->diff($order->created_at)->h <= 24 ? $today->diff($order->created_at)->h.' horas':$today->diff($order->created_at)->d.' días'}}</h3>
                                    @endif
                                    <a href="/admin-order-courier/{{$order->idorder}}" class="p-2 border-2" target="blank">
                                        Detalle
                                    </a>

                                    @if(!isset($order->tracking))
                                        <form action="/admin-order-confirm" method="POST" class="p-2 border-2">
                                            @csrf
                                            <button type="submit" class="">
                                                Confirmar
                                                <input type="text" value="{{$order->idorder}}" name="idorder" hidden>
                                            </button>
                                        </form>
                                    @endif

                                </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

    </section>

@endsection

