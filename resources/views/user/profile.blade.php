@extends('user.base')

@section('user-content')

    <h3 class="font-bold text-xl">Mis Datos</h3>
    @if (isset($user))
        <div class="mt-5 space-y-3">
            <div class="flex space-x-1">
                <input class="border-gray-200 rounded-lg w-full" type="text" value="{{ $user->name }}">
                <input class="border-gray-200 rounded-lg w-full" type="text" value="{{ $user->last_name }}">
            </div>
            <input class="border-gray-200 rounded-lg w-full" type="text" value="{{ $user->email }}">
            <input class="border-gray-200 rounded-lg w-full" type="text" value="{{ $user->cui }}">
        </div>
        <button class="bg-blue-950 text-white px-3 py-2 rounded-xl mt-5 ml-auto block">
            Guardar Cambios
        </button>
    @endif



@endsection
