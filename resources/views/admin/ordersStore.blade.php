@extends('layouts.app')

@section('content')
    <a href="/">Home</a><br>
    <a href="/admin-index">Admin</a><br>

    <div style="display: flex;">
        {{-- Billing --}}
        <div style="width:50%; display:block;">
            @if ($billing)
                @foreach ($billing as $b)
                    <div class="small-box">
                        <label for="">Factura</label>
                        <div>No.Factura : {{ $b->billing_number}}</div>
                        <div>Total : {{ 'Q.'.($b->total*8)}}</div>
                        <div>Fecha : {{ $b->created_at}}</div>
                    </div>
                @endforeach
            @endif
        </div>

        {{-- Tracking --}}
        <div  style="width:50%; display:block;">
            @if ($tracking)
                @foreach ($tracking as $t)
                    <div class="small-box">
                        <label for="">Tracking</label>
                        <div>No.Tracking : {{ $t->tracking_number}}</div>
                        <div>Estado : {{ $t->status}}</div>
                        <div>Fecha : {{ $t->created_at}}</div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
