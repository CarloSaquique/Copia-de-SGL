@extends('admin.base')

@section('admin-content')
    <section class="flex h-full">
        <div class="border-2 border-gray-100 bg-gray-100 h-screen  w-2/12 p-3 space-y-1">
            <a href="/admin-index">
                <div class="px-5 hover:bg-gray-200 cursor-pointer border-l-2  border-blue-700">
                    Todas las ordenes
                </div>
            </a>
            <a href="/admin-orders-paginate/1/all/1?page=1">
                <div class="px-5 hover:bg-gray-200 cursor-pointer border-l-2  border-blue-700">
                    Courier Nacional
                </div>
            </a>
            <a href="/admin-orders-paginate/2/all/1?page=1">
                <div class="px-5 hover:bg-gray-200 cursor-pointer border-l-2  border-blue-700">
                    Courier Miami
                </div>
            </a>
            <a href="/admin-orders-paginate/3/all/1?page=1">
                <div class="px-5 hover:bg-gray-200 cursor-pointer border-l-2  border-blue-700">
                    Courier China
                </div>
            </a>
        </div>
        <div class="w-full p-5 relative">
            <nav class="border-b-2 border-gray-100 flex my-3">
                <div class="space-x-3 py-2">
                    @if(isset($courier))
                        <a href="/admin-orders-paginate/{{$courier}}/all/1?page=1" class="{{$status == 'all' ? 'py-1 border-b-2 border-blue-600':false}}">Todas</a>
                        <a href="/admin-orders-paginate/{{$courier}}/confirmed/1?page=1" class="{{$status == 3 ? 'py-1 border-b-2 border-blue-600':false}}">Confirmadas</a>
                        <a href="/admin-orders-paginate/{{$courier}}/pending/1?page=1" class="{{$status == 2 ? 'py-1 border-b-2 border-blue-600':false}}">Pendientes</a>
                        <a href="/admin-orders-paginate/{{$courier}}/completed/1?page=1" class="{{$status == 4 ? 'py-1 border-b-2 border-blue-600':false}}">Completas</a>
                        <a href="/admin-orders-paginate/{{$courier}}/canceled/1?page=1" class="{{$status == 0 ? 'py-1 border-b-2 border-blue-600':false}}">Canceladas</a>
                    @else
                        <a href="/admin-orders-paginate/all/all/1?page=1" class=" border-b-2 border-blue-600 py-1">Todas</a>
                        <a href="/admin-orders-paginate/all/confirmed/1?page=1" class="">Confirmadas</a>
                        <a href="/admin-orders-paginate/all/pending/1?page=1" class="">Pendientes</a>
                        <a href="/admin-orders-paginate/all/completed/1?page=1" class="">Completas</a>
                        <a href="/admin-orders-paginate/all/canceled/1?page=1" class="">Canceladas</a>
                    @endif
                </div>
                {{-- {{$orders->total()}} --}}
                <div class="ml-auto">
                    {{-- <input class="bg-gray-50 border border-gray-300 text-sm rounded-xl" type="date">
                    <input class="bg-gray-50 border border-gray-300 text-sm rounded-xl" type="text" placeholder="Filter"> --}}
                </div>
            </nav>

            <div class="overflow-y-auto">
                @if(isset($orders))
                {{-- NO. de identificación personal --}}
                    @foreach ($orders as $order)
                        <div class="border-b-2 flex py-5">
                                @if($order->status == 2)
                                    <div class="py-3 px-3 text-blue-800 bg-blue-500 rounded-xl text-center">SGL</div>
                                @else
                                    <div class="py-3 px-3 text-blue-800 bg-blue-500 rounded-xl text-center">SGL</div>
                                @endif
                                <div class="items-center flex space-x-3 ml-3">
                                    <h3 class="hover:text-blue-400 font-bold cursor-pointer">Orden#{{$order->order_number}}</h3>
                                    <h3>
                                        {{$order->type == 1 ? 'Courier Nacional':false}}
                                        {{$order->type == 2 ? 'Courier Miami':false}}
                                        {{$order->type == 3 ? 'Courier China':false}}
                                    </h3>
                                    <h3>{{$order->created_at}}</h3>
                                </div>
                                <div class="ml-auto flex space-x-2 items-center">
                                    @if($today->diff($order->created_at)->d == 0)
                                        @if($today->diff($order->created_at)->h == 0)
                                            <h3>Hace menos de una hora</h3>
                                        @else
                                            <h3>Hace {{$today->diff($order->created_at)->h <= 24 ? $today->diff($order->created_at)->h.' horas':$today->diff($order->created_at)->d.' días'}}</h3>
                                        @endif
                                    @else
                                        <h3>{{'Hace '.$today->diff($order->created_at)->d.' días'}}</h3>
                                    @endif
                                    <a href="/admin-order/{{$order->idorder}}" class="p-2 border-2" target="blank">
                                        Detalle
                                    </a>

                                    @if($order->status == 2)
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

