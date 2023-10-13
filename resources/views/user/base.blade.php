@extends('layouts.app')

@section('content')
<section class="flex h-full p-5">
    <div class="border-2 w-96 border-gray-100 bg-white h-screen rounded-xl py-5">
        <a href="/profile">
            <div class="px-5 py-1 cursor-pointer whitespace-nowrap">
                Mis Datos
            </div>
        </a>
        <hr class="border-gray-300 w-5/6 mx-auto">
        <a href="/user-orders">
            <div class="px-5 py-1 cursor-pointer whitespace-nowrap">
                Mis Ordenes
            </div>
        </a>
        <hr class="border-gray-300 w-5/6 mx-auto">
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <div class="p-2 text-center font-bold">
                {{ __('Cerrar Sesión') }}
            </div>
        </a>
        <hr class="border-gray-300 w-5/6 mx-auto">
    </div>
    <div class="bg-white w-full p-5 rounded-xl">
        @yield('user-content')
    </div>
</section>
@endsection