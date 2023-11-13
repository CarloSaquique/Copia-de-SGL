@extends('layouts.app')

@section('content')
    <section>
        <form action="/tracking-update" method="POST" autocomplete="off">
            @csrf
            <input name="tracking_id" type="text" value="{{$tracking->idtracking}}" hidden>
            <h3>Servicio</h3>
            <select name="service">
                <option value="0">Selecciona el servicio</option>
                <option value="1" {{$tracking->service == 1? 'selected':false}}>Courier Nacional</option>
                <option value="2" {{$tracking->service == 2? 'selected':false}}>Courier Miami</option>
                <option value="3" {{$tracking->service == 3? 'selected':false}}>Courier China</option>
            </select>
            <h3>No. Tracking</h3>
            <input name="tracking_number" type="text" value="{{$tracking->tracking_number}}">
            <h3>HBL</h3>
            <input name="hbl" type="text" value="{{$tracking->hbl}}">
            <h3>MBL</h3>
            <input name="mbl" type="text" value="{{$tracking->mbl}}">
            <h3>AWB</h3>
            <input name="awb" type="text" value="{{$tracking->awb}}">
            <h3>No. Orden</h3>
            <input name="order_number" type="text" value="{{$tracking->order_number}}">

            <div>
                <select name="tracking_state">
                    @foreach ($tracking_states as $key=>$ts)
                        <option value="{{$key}}">
                            {{$ts}}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit">Actualizar tracking</button>
        </form>

        <div>
            @foreach ($tracking_status as $ts)
                <div>{{$ts->state}}</div>
                <div>{{$ts->created_at}}</div>
            @endforeach
        </div>
    </section>
@endsection