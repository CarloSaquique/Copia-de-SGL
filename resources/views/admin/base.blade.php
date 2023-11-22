@extends('layouts.app')

@section('content')
<section class="bg-white text-slate-800">
    {{-- TOP NAV --}}
    <nav class="p-1 border-b-2 border-gray-100">
        <div class="flex">
            {{-- Tabs --}}
            <ul class="px-5 flex font-bold items-center space-x-10">
                <li>
                    <a href="/admin-index" class="hover:text-blue-300">Ordenes</a>
                </li>
                <li>
                    <a href="/tracking-index" class="hover:text-blue-300">Tracking</a>
                </li>
                <li>
                    {{-- <a href="/admin-payment-index" class="hover:text-blue-300">Pagos</a> --}}
                </li>
            </ul>



            {{-- Button Responsive Navbar --}}
            <div class="ml-auto items-center flex md:hidden">
                <h3 class="items-center">
                    <svg class="w-6 h-6 text-blue-950" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </h3>
            </div>
        </div>
    </nav>

    <div class="">
        @yield('admin-content')
    </div>


</section>
@endsection

