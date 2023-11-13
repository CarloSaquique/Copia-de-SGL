@extends('layouts.app')

@section('content')
    <section>
        <form action="/tracking-add" method="POST" autocomplete="off">
            @csrf
            <h3>Servicio</h3>
            <select name="service">
                <option value="0">Selecciona el servicio</option>
                <option value="1">Courier Nacional</option>
                <option value="2">Courier Miami</option>
                <option value="3">Courier China</option>
            </select>
            <h3>No. Tracking</h3>
            <input name="tracking_number" type="text">
            <h3>HBL</h3>
            <input name="hbl" type="text">
            <h3>MBL</h3>
            <input name="mbl" type="text">
            <h3>AWB</h3>
            <input name="awb" type="text">
            <h3>No. Orden</h3>
            <input name="order_number" type="text">
            <button type="submit">Añadir tracking</button>
        </form>
    </section>
@endsection