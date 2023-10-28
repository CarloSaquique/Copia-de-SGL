@extends('user.base')

@section('user-content')
    <h3 class="font-bold text-xl">Mi Membresia</h3>
    <div class="mt-5 space-y-3">
        <div class="space-x-2">
            {{$membership_table->name}}
            <h3>Fecha de Expiración: {{$membership->finish_at}}</h3>
        </div>
    </div>

@endsection