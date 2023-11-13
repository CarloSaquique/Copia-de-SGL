@extends('layouts.app')

@section('content')
    <section >
        <div class="ml-10 my-5">
            <a href="/tracking-index" class="underline">Inicio Tracking</a>
        </div>

        <div class="flex justify-evenly">
            <form action="/tracking-update-tracking" method="POST" autocomplete="off" >
                @csrf
                <div class="bg-white w-fit p-5 border rounded-lg mx-auto space-y-1">
                    <input name="tracking_id" type="text" value="{{$tracking->idtracking}}" hidden>
                    <h3>Servicio</h3>
                    <select name="service" class="bg-gray-300 rounded-3xl ring-0
                        border-none px-5 py-1 focus:ring-0">
                        <option value="0">Selecciona el servicio</option>
                        <option value="1" {{$tracking->service == 1? 'selected':false}}>Courier Nacional</option>
                        <option value="2" {{$tracking->service == 2? 'selected':false}}>Courier Miami</option>
                        <option value="3" {{$tracking->service == 3? 'selected':false}}>Courier China</option>
                    </select>
                    <h3>No. Tracking</h3>
                    <input name="tracking_number" type="text" class="bg-gray-300 rounded-3xl ring-0 border-none w-full focus:ring-0" value="{{$tracking->tracking_number}}">
                    <h3>HBL</h3>
                    <input name="hbl" type="text" class="bg-gray-300 rounded-3xl ring-0 border-none w-full focus:ring-0" value="{{$tracking->hbl}}">
                    <h3>MBL</h3>
                    <input name="mbl" type="text" class="bg-gray-300 rounded-3xl ring-0 border-none w-full focus:ring-0" value="{{$tracking->mbl}}">
                    <h3>AWB</h3>
                    <input name="awb" type="text" class="bg-gray-300 rounded-3xl ring-0 border-none w-full focus:ring-0" value="{{$tracking->awb}}">
                    <h3>No. Orden</h3>
                    <input name="order_number" type="text" class="bg-gray-300 rounded-3xl ring-0 border-none w-full focus:ring-0" value="{{$tracking->order_number}}">
                    <button type="submit" class="bg-blue-700 text-white flex
                        rounded-md px-3 py-2 hover:bg-blue-800 border border-gray-400">
                        Actualizar tracking</button>
                </div>
            </form>

            <form action="/tracking-update-status" method="POST" autocomplete="off" >
                @csrf
                <input name="tracking_id" type="text" value="{{$tracking->idtracking}}" hidden>
                <div>
                    <h3>Estado del tracking</h3>
                    <select name="tracking_state" class="bg-gray-300 rounded-3xl ring-0
                    border-none px-5 py-1 focus:ring-0">
                        @foreach ($tracking_states as $key=>$ts)
                            <option value="{{$key}}">
                                {{$ts}}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="bg-blue-700 text-white flex
                    rounded-md px-3 py-2 hover:bg-blue-800 border border-gray-400">
                    Añadir Estado</button>
            </form>

            <div class="bg-white w-fit h-fit p-5 border rounded-lg space-y-1">
                @foreach ($tracking_status as $ts)
                    <div>{{$ts->state}}</div>
                    <div>{{$ts->created_at}}</div>
                @endforeach
            </div>
        </div>

        <div class="mx-auto w-fit my-10">
            <form action="/tracking-delete" method="POST" autocomplete="off">
                @csrf
                <input name="tracking_id" type="text" value="{{$tracking->idtracking}}" hidden>
                <button type="submit" class="bg-red-700 text-white flex
                    rounded-md px-3 py-2 hover:bg-red-800">
                    Eliminar tracking</button>
            </form>
        </div>
    </section>
@endsection