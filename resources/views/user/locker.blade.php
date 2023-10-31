@extends('user.base')

@section('user-content')
    <h3 class="font-bold text-xl">Mi Casillero</h3>
    <div class="mt-5 space-y-3">
        <div class="flex space-x-2 items-center">
            <img class="max-w-[40px]" src="{{asset('images/flags/'.$country->country.'.jpg')}}" alt="">
            <h3>{{$locker->number}}</h3>
        </div>
    </div>
    <h3 class="font-bold text-xl mt-10">Dirección de entrega</h3>
    <div class="grid grid-cols-2 space-x-1">
        <div class="w-full p-2 border rounded-lg">
            <div class="flex w-fit mx-auto space-x-1">
                {{-- <img class="max-w-[40px]" src="{{asset('images/flags/USA.jpg')}}" alt=""> --}}
                <h3 class="font-bold">USA</h3>
            </div>
            <div class="p-10 space-y-5">
                <h3>Address Line 1:</h3>
                <h3>Address Line 2:</h3>
                <h3>City:</h3>
                <h3>State Province Region:</h3>
                <h3>ZIP:</h3>
                <h3>Country:</h3>
                <h3>Phone Number:</h3>
            </div>
        </div>
        <div class="w-full p-2 border rounded-lg">
            <div class="flex w-fit mx-auto space-x-1">
                {{-- <img class="max-w-[40px] " src="{{asset('images/flags/China.png')}}" alt=""> --}}
                <h3 class="font-bold">China</h3>
            </div>
            <div class="p-10 space-y-5">
                <h3>Address Line 1:</h3>
                <h3>Address Line 2:</h3>
                <h3>City:</h3>
                <h3>State Province Region:</h3>
                <h3>ZIP:</h3>
                <h3>Country:</h3>
                <h3>Phone Number:</h3>
            </div>
        </div>
    </div>

@endsection