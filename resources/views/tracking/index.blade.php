@extends('layouts.app')

@section('content')
    <section class="px-32 py-10 min-h-screen">
        <h3 class="font-bold text-xl text-center">Tracking</h3>
        <a href="/tracking-add">
            <button type="button" class=" bg-blue-700 text-white
                rounded-md px-3 py-2 hover:bg-blue-500 border border-gray-400">
                Añadir Tracking
            </button>
        </a>
        <div class="p-3 border rounded-lg my-10">
        @foreach ($tracking as $t)
            <div class="flex py-3">
                <h3 class="font-bold mx-5">{{$t->service == 1? 'Courier Nacional':false}}</h3>
                <h3 class="font-bold mx-5">{{$t->service == 2? 'Courier Miami':false}}</h3>
                <h3 class="font-bold mx-5">{{$t->service == 3? 'Courier China':false}}</h3>
                <h3 class="mx-5">No.Tracking: <span class="font-bold">{{$t->tracking_number}}</span></h3>
                <h3 class="mx-5">No.Orden: <span class="font-bold">{{$t->order_number}}</span></h3>
                <div class="ml-auto">
                    <a href="/tracking-update/{{$t->idtracking}}">
                        <button type="button" class=" bg-blue-700 text-white
                            rounded-md px-3 py-2 hover:bg-blue-500 border border-gray-400">
                            Ver Detalle
                        </button>
                    </a>
                </div>
            </div>
            <hr class="bg-gray-200">
        @endforeach
    </section>
@endsection