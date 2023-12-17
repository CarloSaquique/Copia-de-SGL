@extends('layouts.app')

@section('content')

<div class="md:flex justify-between py-5 md:py-20 px-10">
<div class="content-center md:w-1/2 mb-10 md:mb-0">

  <h2 class="text-center sm:text-base md:text-5xl lg:text-6xl text-blue-900 mb-3 font-bold"> Tienda 
    <span class="text-blue-400">en línea</span> 
    próximamente!</h2>

</div>

<div class="md:w-1/2">
<img src="{{ asset('images/1.jpg') }}" alt="" class=" rounded-lg">
</div>
</div>

@push('child-scripts')

@endpush


@endsection