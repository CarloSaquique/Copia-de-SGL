@extends('layouts.app')

@section('content')
    <section>

        <div data-modal-target="UpdatesModal"></div>
        <!-- Condiciones Modal -->
        <div id="UpdatesModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class=" relative w-full max-w-xl max-h-full mx-auto mt-[8%]">
                <!-- Modal content -->
                <div class="relative bg-gray-100 border-2 border-gray-300">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between px-4 py-2 rounded-t">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 ">
                                Información Destacada
                            </h3>
                        </div>
                        <button type="button" class="text-black bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center " data-modal-hide="UpdatesModal">
                            <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <hr class="border-gray-300 w-11/12 mx-auto">
                    <!-- Modal body -->
                    <div class="p-6 h-[60vh]">
                        <img src="{{asset('images/footer/nuestra_historia.jpg')}}" alt="">
                        <h3 class="mt-5 font-bold">Fase de Desarrollo v2.0</h3>
                        <div class="mt-5 space-y-1">
                            <h3 class="text-sm">- Página Web En Construcción</h3>
                        </div>
                        <img class="absolute bottom-5 right-5 max-w-[56px]" src="{{asset('images/main/logo.png')}}" alt="">
                    </div>

                </div>
            </div>
        </div>

        {{-- Rastrea tu producto --}}
        @if(!Session::has('tracking'))
        <div>
            <form action="/track" method="POST" class="flex items-center text-center w-fit mx-auto p-2 rounded-lg mt-3">
                @csrf
                <span class="hidden ml-auto text-sm text-blue-950/90 font-bold md:text-base
                    sm:block">Rastrea tu servicio:</span>
                <input name="tracking_number" class="text-sm mx-1 sm:mx-1 md:mx-5 text-gray-900 border
                border-gray-300 rounded-full bg-gray-50 focus:ring-blue-500
                focus:border-blue-500 px-4 sm:w-96" type="text" placeholder="No. de Tracking">
                <button type="submit" class="bg-blue-950/90 rounded-full text-xs px-2
                text-white py-2 mr-auto md:text-base md:py-2 align-middle flex">Rastrear</button>
            </form>
        </div>
        @endif
        {{-- Rastreo --}}
        <div>
            @if(Session::has('tracking'))
            <div class="mt-8 mb-5 w-fit mx-auto grid grid-cols-5 gap-10 items-center">
                <div class="text-center text-xs">
                    @if(isset(Session::get('tracking')->status_1))
                        <div class="bg-blue-950 mx-auto rounded-full w-fit px-2 h-10 relative
                        text-white flex items-center">
                            <svg class="w-6 h-6 mx-1 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                <path d="M19 0H1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1ZM2 6v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6H2Zm11 3a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8a1 1 0 0 1 2 0h2a1 1 0 0 1 2 0v1Z"/>
                            </svg>
                            Orden en Proceso

                            <hr class="border-blue-950 border-4 absolute top-1/2" style="width:30%; left:95%">
                        </div>
                        <h3>{{Session::get('tracking')->status_1}}</h3>
                    @else
                        <div class="bg-gray-400 mx-auto rounded-full w-fit px-2 h-10 relative
                        text-white flex items-center">
                            <svg class="w-6 h-6 mx-1 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                <path d="M19 0H1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1ZM2 6v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6H2Zm11 3a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8a1 1 0 0 1 2 0h2a1 1 0 0 1 2 0v1Z"/>
                            </svg>
                            Orden en Proceso

                            <hr class="border-gray-400 border-4 absolute top-1/2" style="width:30%; left:95%">
                        </div>
                        <h3>-</h3>
                    @endif
                </div>

                <div class="text-center text-xs">
                    @if(isset(Session::get('tracking')->status_2))
                        <div class="bg-blue-950 mx-auto rounded-full w-fit px-2 h-10 relative
                        text-white  flex items-center">
                            <svg class="w-6 h-6 mx-1 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                <path d="M19 0H1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1ZM2 6v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6H2Zm11 3a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8a1 1 0 0 1 2 0h2a1 1 0 0 1 2 0v1Z"/>
                            </svg>
                            En Ruta De Recolección
                            <hr class=" border-blue-950 border-4 absolute top-1/2" style="width:30%; right:95%">

                            <hr class=" border-blue-950 border-4 absolute top-1/2" style="width:30%; left:95%">
                        </div>
                        <h3>{{Session::get('tracking')->status_2}}</h3>
                    @else
                        <div class="bg-gray-400 mx-auto rounded-full w-fit px-2 h-10 relative
                        text-white  flex items-center">
                            <svg class="w-6 h-6 mx-1 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                <path d="M19 0H1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1ZM2 6v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6H2Zm11 3a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8a1 1 0 0 1 2 0h2a1 1 0 0 1 2 0v1Z"/>
                            </svg>
                            En Ruta De Recolección
                            <hr class=" border-gray-400 border-4 absolute top-1/2" style="width:30%; right:95%">

                            <hr class=" border-gray-400 border-4 absolute top-1/2" style="width:30%; left:95%">
                        </div>
                        <h3>-</h3>
                    @endif
                </div>

                <div class="text-center text-xs">
                    @if(isset(Session::get('tracking')->status_3))
                        <div class="bg-blue-950 mx-auto rounded-full w-fit px-2 h-10 relative
                        text-white  flex items-center">
                            <svg class="w-6 h-6 mx-1 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                <path d="M19 0H1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1ZM2 6v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6H2Zm11 3a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8a1 1 0 0 1 2 0h2a1 1 0 0 1 2 0v1Z"/>
                            </svg>
                            Paquete Recolectado
                            <hr class=" border-blue-950 border-4 absolute top-1/2" style="width:30%; right:95%">

                            <hr class=" border-blue-950 border-4 absolute top-1/2" style="width:30%; left:95%">
                        </div>

                        <h3>{{Session::get('tracking')->status_3}}</h3>
                    @else
                        <div class="bg-gray-400 mx-auto rounded-full w-fit px-2 h-10 relative
                        text-white  flex items-center">
                            <svg class="w-6 h-6 mx-1 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                <path d="M19 0H1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1ZM2 6v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6H2Zm11 3a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8a1 1 0 0 1 2 0h2a1 1 0 0 1 2 0v1Z"/>
                            </svg>
                            Paquete Recolectado
                            <hr class=" border-gray-400 border-4 absolute top-1/2" style="width:30%; right:95%">

                            <hr class=" border-gray-400 border-4 absolute top-1/2" style="width:30%; left:95%">
                        </div>

                        <h3>-</h3>
                    @endif
                </div>

                <div class="text-center text-xs">
                    @if(isset(Session::get('tracking')->status_4))
                        <div class="bg-blue-950 mx-auto rounded-full w-fit px-2 h-10 relative
                        text-white  flex items-center">
                            <svg class="w-6 h-6 mx-1 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                <path d="M19 0H1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1ZM2 6v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6H2Zm11 3a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8a1 1 0 0 1 2 0h2a1 1 0 0 1 2 0v1Z"/>
                            </svg>
                            En Ruta De Entrega
                            <hr class=" border-blue-950 border-4 absolute top-1/2" style="width:40%; right:95%">

                            <hr class=" border-blue-950 border-4 absolute top-1/2" style="width:55%; left:95%">
                        </div>

                        <h3>{{Session::get('tracking')->status_4}}</h3>
                    @else
                        <div class="bg-gray-400 mx-auto rounded-full w-fit px-2 h-10 relative
                        text-white  flex items-center">
                            <svg class="w-6 h-6 mx-1 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                <path d="M19 0H1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1ZM2 6v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6H2Zm11 3a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8a1 1 0 0 1 2 0h2a1 1 0 0 1 2 0v1Z"/>
                            </svg>
                            En Ruta De Entrega
                            <hr class=" border-gray-400 border-4 absolute top-1/2" style="width:40%; right:95%">

                            <hr class=" border-gray-400 border-4 absolute top-1/2" style="width:55%; left:95%">
                        </div>

                        <h3>-</h3>
                    @endif
                </div>

                <div class="text-center text-xs">
                    @if(isset(Session::get('tracking')->status_5))
                        <div class="bg-blue-950 mx-auto rounded-full w-fit px-2 h-10 relative
                        text-white  flex items-center">
                            <svg class="w-6 h-6 mx-1 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                <path d="M19 0H1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1ZM2 6v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6H2Zm11 3a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8a1 1 0 0 1 2 0h2a1 1 0 0 1 2 0v1Z"/>
                            </svg>
                            Paquete Entregado
                            <hr class=" border-blue-950 border-4 absolute top-1/2" style="width:25%; right:95%">
                        </div>

                        <h3>{{Session::get('tracking')->status_5}}</h3>
                    @else
                        <div class="bg-gray-400 mx-auto rounded-full w-fit px-2 h-10 relative
                        text-white  flex items-center">
                            <svg class="w-6 h-6 mx-1 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                <path d="M19 0H1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1ZM2 6v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6H2Zm11 3a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8a1 1 0 0 1 2 0h2a1 1 0 0 1 2 0v1Z"/>
                            </svg>
                            Paquete Entregado
                            <hr class=" border-gray-400 border-4 absolute top-1/2" style="width:25%; right:95%">
                        </div>

                        <h3>-</h3>
                    @endif
                </div>
            </div>
            <div class="mx-auto w-fit my-5">
                <a href="/" class="bg-blue-950 text-white p-2 rounded-xl">Rastrear Otro Paquete</a>
            </div>
            @endif
        </div>

        {{-- Imagen 1--}}
        <div class="flex relative p-5 ">
            <img class="rounded-xl" src="{{ asset('images/home/home-1.jpg') }}" alt="">

            @guest
                <div id="home_login" class="border-solid absolute hidden top-0 left-0 right-0 p-10 xl:block  xl:left-auto">
                    <div class="mx-auto w-72 rounded-2xl bg-white text-center border-gray-500 border-2">
                        <form action="/login" method="POST">
                            @csrf
                            <p class="font-bold text-blue-950 text-2xl py-5">Acceder</p>
                            <input class="w-10/12 mt-12 p-2 text-sm text-gray-900 border
                            border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-400
                            focus:border-blue-400" name="email" type="email" placeholder="Email">

                            <input class="w-10/12 mt-5 p-2 text-sm text-gray-900 border
                            border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-400
                            focus:border-blue-400" name="password" type="password" placeholder="Password">

                            @if(count($errors) > 0)
                                <div class="text-red-600 text-xs py-1">
                                    @foreach ($errors->all() as $error)
                                        <h3>{{$error}}</h3>
                                    @endforeach
                                </div>
                            @endif

                            <div class="py-5 px-3">
                                <button class="bg-blue-950 rounded-full text-white
                                px-10 py-1">Iniciar Sesión</button>
                                <div class="flex text-xs mt-3">
                                    <div class="flex items-center">
                                        <input type="checkbox" name="remember">
                                        <h3 class="ml-1 text-blue-950">Recordar</h3>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a class="ml-auto text-blue-950 underline" href="{{ route('password.request') }}" >
                                            Recuperar Contraseña</a>
                                    @endif

                                </div>
                            </div>
                        </form>

                        <div class="py-5 px-3 text-xs">
                            <h3 class="ml-auto text-blue-950">Aún no tienes cuenta?</h3>
                            <a href="/register">
                                <button id="#home_register_btn" class="text-blue-950 underline" >Registrarme</button>
                            </a>
                        </div>

                    </div>
                </div>

                <div id="home_register" class="border-solid absolute hidden top-0 left-0 right-0 p-10  xl:left-auto">
                    <div class="mx-auto w-72 rounded-2xl bg-white text-center border-gray-500 border-2">
                        <p class="font-bold text-blue-950 text-2xl py-3">Registrar</p>
                        <form id="form-reg" method='POST' action='/#' accept-charset='UTF-8'  autocomplete='off'>
                            @csrf
                            <input class="w-10/12 mt-1 p-2 text-sm text-gray-900 border
                            border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-400
                            focus:border-blue-400" type="text" name="name" placeholder="Nombre"/>

                            <input class="w-10/12 mt-5 p-2 text-sm text-gray-900 border
                            border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-400
                            focus:border-blue-400" type="text" name="last_name" placeholder="Apellido"/>

                            <input class="w-10/12 mt-5 p-2 text-sm text-gray-900 border
                            border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-400
                            focus:border-blue-400" type="email" name="email" placeholder="Email">

                            {{-- <input class="w-10/12 mt-5 p-2 text-sm text-gray-900 border
                            border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-400
                            focus:border-blue-400" type="phone" placeholder="Phone"> --}}

                            <input class="w-10/12 mt-5 p-2 text-sm text-gray-900 border
                            border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-400
                            focus:border-blue-400" type="password" name="password" placeholder="Password">

                            <input class="w-10/12 mt-5 p-2 text-sm text-gray-900 border
                            border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-400
                            focus:border-blue-400" type="password" name="password_confirmation" placeholder="Confirm Password">

                            @if(Session::has('error'))
                                <p class="errors py-1 text-xs text-red-600 dark:text-red-400"><span class="font-medium">
                                    @foreach (Session::get('error')  as $e)
                                        <div>{{ $e }}</div>
                                    @endforeach
                                </p>
                            @endif

                            <div class="py-5 px-3">
                                <button type="submit" class="bg-blue-950 rounded-full text-white
                                px-10 py-1">Registrar</button>
                            </div>
                        </form>
                            <div class="py-5 px-3 text-xs">
                                <h3 class="ml-auto text-blue-950">Ya tienes Cuenta?</h3>
                                <button id='home_login_btn' class="text-blue-950 underline" href="#">Iniciar Sesión</button>
                            </div>
                    </div>
                </div>
            @endguest
        </div>

        {{-- Cotizadores --}}
        <div class="w-full">
            {{--Title Cotiza Aquí--}}
            <div class="w-11/12 mx-auto bg-blue-950 rounded-xl">
                <h3 class="text-lg text-white ml-10 sm:text-xl md:text-3xl">Cotiza Aquí</h3>
            </div>

            {{-- Nav --}}
            <div class="mx-auto w-fit my-2 sm:p-4">
                <span id="home_cn_title" class="text-blue-100 text-xs font-bold
                p-1 rounded-xl hover:cursor-pointer hover:text-blue-100 bg-blue-500
                hover:bg-blue-500 sm:p-2 sm:mx-1 sm:text-sm">Courier Nacional</span>

                <span id="home_mg_title" class="text-green-700 text-xs font-bold
                p-1 rounded-xl hover:cursor-pointer hover:text-green-100
                hover:bg-green-500 sm:p-2 sm:mx-1 sm:text-sm">Courier Miami</span>

                <span id="home_cg_title" class="text-red-700 text-xs font-bold
                p-1 rounded-xl hover:cursor-pointer hover:text-red-100
                hover:bg-red-500 sm:p-2 sm:mx-1 sm:text-sm">Courier China</span>
                {{-- <span class="text-red-100 bg-red-500" hidden></span> --}}
                {{-- <span class="text-green-100 bg-green-500" hidden></span> --}}
            </div>

            {{-- National --}}
            <div id="home_cn_base_div" class="home_quoters_base mb-10">

                {{-- Location  Packages -> Quotation --}}
                <div id="home_cn_location_package_div" class="home_quoters_base h-auto">
                    <form id="home_cn_packages_form" action="/national-quoter-quotation" method="POST">
                        @csrf
                        {{-- Location --}}
                        <div class="bg-white w-11/12 mx-auto
                            rounded-t-lg items-center py-1 sm:flex">

                            <select id="home_cn_origin_select" name="sender" class="h-8 text-gray-500 text-center text-sm w-full
                                border-none outline-none focus:ring-0 sm:w-[46%] sm:text-xs md:text-lg mx-auto">
                                <option value="0">Seleccione el punto de origen</option>
                                <option value="1">Dirección Ciudad Capital</option>
                                <option value="2">Agencia Zona 10</option>
                                <option value="3">Agencia El Dorado</option>
                                <option value="4">Agencia Chiquimula</option>
                                <option value="5">Agencia Quetzaltenango</option>
                            </select>

                            {{-- Horizontal --}}
                            <svg class="hidden mx-2 w-3 h-3 text-green-500 sm:block md:w-5 md:h-5 "  fill="none" viewBox="0 0 12 10"
                                style="animation-name: animate-color;
                                animation-duration: 0.5s;
                                animation-iteration-count: infinite;
                                animation-direction: alternate;">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                            </svg>

                            {{-- Vertical --}}
                            <svg class="mx-auto w-3 h-3 text-green-500 rotate-90 sm:hidden"  fill="none" viewBox="0 0 12 10"
                                style="animation-name: animate-color;
                                animation-duration: 0.5s;
                                animation-iteration-count: infinite;
                                animation-direction: alternate;">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                            </svg>

                            <select id="home_cn_destination_select" name="destination" class="h-8 text-gray-500 text-center text-sm w-full
                                border-none outline-none focus:ring-0 sm:w-[46%] sm:text-xs md:text-lg mx-auto" >
                                <option value="0">Seleccione el punto de destino</option>
                                <option value="1">Dirección Ciudad Capital</option>
                                <option value="2">Agencia Zona 10</option>
                                <option value="3">Agencia El Dorado</option>
                                <option value="4">Agencia Chiquimula</option>
                                <option value="5">Agencia Quetzaltenango</option>
                            </select>

                        </div>

                        <div id="home_cn_package_div" class="home_quoters_base hidden">
                            {{-- Packages Cotizador Nacional--}}
                            <div id="home_cn_package_add" class="max-h-56 w-11/12 mx-auto overflow-y-auto">
                                <div class="bg-white border-t h-fit p-5">
                                    <h3 class="text-blue-600 font-bold">Paquete # 1</h3>
                                    <div class="lg:flex">
                                    <div class="mx-auto grid gap-4 grid-cols-2 sm:gap-x-10 md:grid-cols-4">
                                        <div class="text-center">
                                            <img class="w-14 h-10 mx-auto" src="{{ asset('images/quoter/box1.png')}}" alt="">
                                            <div class="items-center xl:grid xl:grid-cols-3 xl:gap-0 ">
                                                <h3 class="text-blue-900 text-sm font-bold lg:text-md whitespace-nowrap">Paquete</h3>
                                                <h3 class="text-blue-900 text-sm font-bold lg:text-md whitespace-nowrap">(28-36cm)</h3>
                                                <h3 class="text-blue-900 text-sm font-bold lg:text-md whitespace-nowrap">(1-10lb)</h3>
                                            </div>
                                            <input name="pk_1_1" class="rounded-sm" type="checkbox" checked>
                                        </div>

                                        <div class="text-center">
                                            <img class="w-14 h-10 mx-auto" src="{{ asset('images/quoter/box2.png')}}" alt="">
                                            <div class="items-center xl:grid xl:grid-cols-3 xl:gap-0">
                                                <h3 class="text-blue-900 text-sm font-bold whitespace-nowrap">Paquete</h3>
                                                <h3 class="text-blue-900 text-sm font-bold whitespace-nowrap">(36-47cm)</h3>
                                                <h3 class="text-blue-900 text-sm font-bold whitespace-nowrap">(20.1-40lb)</h3>
                                            </div>
                                            <input name="pk_1_2" class="rounded-sm" type="checkbox">
                                        </div>

                                        <div class="text-center">
                                            <img class="w-14 h-10 mx-auto" src="{{ asset('images/quoter/box3.png')}}" alt="">
                                            <div class="items-center xl:grid xl:grid-cols-3 xl:gap-0">
                                                <h3 class="text-blue-900 text-sm font-bold whitespace-nowrap">Paquete</h3>
                                                <h3 class="text-blue-900 text-sm font-bold whitespace-nowrap">(47-51cm)</h3>
                                                <h3 class="text-blue-900 text-sm font-bold whitespace-nowrap">(40.1-50lb)</h3>
                                            </div>
                                            <input name="pk_1_3" class="rounded-sm" type="checkbox">
                                        </div>

                                        <div class="text-center">
                                            <img class="w-14 h-10 mx-auto" src="{{ asset('images/quoter/box4.png')}}" alt="">
                                            <div class="items-center xl:grid xl:grid-cols-3 xl:gap-0">
                                                <h3 class="text-blue-900 text-sm font-bold whitespace-nowrap">Paquete</h3>
                                                <h3 class="text-blue-900 text-sm font-bold whitespace-nowrap">(+51cm)</h3>
                                                <h3 class="text-blue-900 text-sm font-bold whitespace-nowrap">(+50.1lb)</h3>
                                            </div>
                                            <input name="pk_1_4" class="rounded-sm" type="checkbox">
                                        </div>
                                    </div>
                                    <div class="mx-auto mt-5 font-bold ml-5 grid grid-cols-3 lg:grid-cols-1
                                        text-center items-end text-sm lg:mt-0">
                                        <div class="lg:flex">
                                            <h3 class="lg:hidden">Fragil</h3>
                                            <input name="fr_1" type="checkbox">
                                            <h3 class="hidden lg:grid lg:ml-4 whitespace-nowrap">Fragil</h3>
                                        </div>
                                        <div class="lg:flex">
                                            <h3 class="lg:hidden">Contenido Peligroso</h3>
                                            <input name="dg_1" type="checkbox">
                                            <h3 class="hidden lg:grid lg:ml-4 whitespace-nowrap">Contenido Peligroso</h3>
                                        </div>
                                        <div class="lg:flex">
                                            <h3 class="lg:hidden">Perecedero</h3>
                                            <input name="ps_1" type="checkbox">
                                            <h3 class="hidden lg:grid lg:ml-4 whitespace-nowrap">Perecedero</h3>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Add Quotation --}}
                            <div class="bg-white border-t rounded-b-lg w-11/12 mx-auto h-fit
                                p-5">
                                <button id="home_cn_btn_add_package" type="button" class="block  bg-blue-950 px-4 py-2 mr-auto rounded-xl text-white">+</button>
                                <button id="home_cn_btn_quotation" type="button" class="wait flex bg-blue-950 px-4 py-2 ml-auto  rounded-xl text-white">Cotizar</button>
                            </div>
                        </div>
                    </form>
                </div>

                {{-- Quotation -> Order --}}
                <div id="home_cn_quotation" class="home_quoters_base flex bg-white border rounded-lg
                    w-11/12 h-[450px] mx-auto p-5 lg:h-96 items-center" style="display:none;">
                    {{-- CN Set Packages  --}}
                    <form id="home_cn_form_quotation_order" action="/national-quoter-order" class="w-fit mx-auto text-center" method="POST">
                        @csrf
                        <div class="md:flex mx-auto w-fit">
                            <div class="text-justify text-lg md:text-sm font-bold p-10 md:p-5 w-fit mx-auto ">
                                <h3 id="home_cn_span_subtotal" class="">Subtotal: Q.0.00</h3>
                                <h3 id="home_cn_span_iva" class="">IVA: Q.0.00</h3>
                                <hr class="border border-blue-600">
                                <h3 id="home_cn_span_total" class="font-bold">Total: Q.0.00</h3>
                            </div>
                        @auth
                            <div class="items-center flex space-x-2 mx-auto w-fit mt-5">
                                <input id="home_cn_chk_terms" type="checkbox" name="terms">
                                <span class="text-sm">
                                    ACEPTO LAS CONDICIONES DE SERVICIO</span>
                            </div>
                            <h3 class="underline cursor-pointer text-sm mt-5 sm:mt-0 hover:text-blue-600" data-modal-target="defaultModalCn" data-modal-toggle="defaultModalCn">
                                VER CONDICIONES DE SERVICIO</h3>

                            <button id="home_cn_btn_quotation_order" type="button" class="wait flex mx-auto mt-5 bg-blue-950 px-4 py-2
                                rounded-xl text-white cursor-pointer opacity-70" disabled>Realizar Orden</button>
                        @else
                            <div class="text-justify text-blue-700 font-bold md:p- w-fit ">
                                <h3 class="text-3xl">Contáctanos</h3>
                                <h3 class="text-sm md:text-base px-11 sm:px-5 lg:px-0">para solicitar tu servicio y con gusto uno de</h3>
                                <h3 class="text-sm md:text-base px-11 sm:px-5 lg:px-0">nuestros asesores se comunicara contigo.</h3>
                                <h3 class="text-blue-500 font-bold my-5">customerservice@gruposgl.com</h3>
                                <div class="flex my-10">
                                    <img class="max-w-[40px]" src="{{asset('images/main/logo.png')}}" alt="">
                                    <div class="text-lg px-10 bg-white font-bold">
                                        <h3 class="text-left">We Are </h3>
                                        <h3>The Blue Wave</h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                            {{-- <a href="/login" id="home_cn_btn_quotation_order" class="block mx-auto mt-5 w-fit bg-blue-950 px-4 py-2
                            rounded-xl text-white cursor-pointer">Iniciar Sesión</a> --}}
                        @endauth
                    </form>
                </div>

                {{-- Order -> OSC --}}
                <div id="home_cn_order" class="home_quoters_base hidden bg-white border rounded-lg
                    w-11/12 h-auto mx-auto py-5 lg:min-h-96 lg:max-h-fit">
                    <div class="mx-auto rounded-xl">
                        <form id="home_cn_form_order_osc" action="/national-quoter-osc" method="POST">
                            @csrf
                            <div class="w-fit mx-auto px-2 lg:flex ">
                                {{-- Recoger --}}
                                <div id="home_cn_order_sender" class="space-y-1 max-w-[470px]">
                                        {{-- City Section --}}
                                        {{-- <h3 class="font-bold text-center">Entregar</h3>
                                        <div class="items-center lg:flex lg:space-x-1">
                                            <h3 class="mr-auto">Cda. Guatemala, Guatemala: </h3>
                                            <input name="address_'+_location+'" class="rounded-lg h-10 w-full border-gray-200" type="text"  placeholder="Dirección">
                                        </div>
                                        <div class="items-center space-y-2 sm:flex sm:space-x-1 sm:space-y-0">
                                            <input name="name_'+_location+'" class="rounded-lg h-10 w-full border-gray-200" type="text"  placeholder="Nombre">
                                            <input name="phone_'+_location+'" class="rounded-lg h-10 w-full border-gray-200" type="text"  placeholder="Telefono">
                                        </div>
                                        <div class="items-center lg:flex lg:space-x-1">
                                            <input name="email_'+_location+'" class="rounded-lg h-10 w-full border-gray-200" type="text" placeholder="Email">
                                        </div>
                                        <div class="items-center lg:flex lg:space-x-1">
                                            <textarea name="comments_'+_location+'"  class="rounded-lg w-full p-1 border-gray-200" placeholder="Comentarios"></textarea>
                                        </div>
                                        <span class="">Fecha de Recolección</span>
                                        <input name="date_'+_location+'" class="rounded-lg h-10 mx-1 border-gray-200" type="date">
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input name="time_'+_location+'" type="checkbox" class="sr-only peer" checked>
                                            <div class="flex px-2 w-20 h-6 bg-blue-600 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-transparent rounded-lg peer peer-checked:after:translate-x-full peer-checked:after:border-gray-400  after:absolute after:top-[0px] after:left-[0px] after:bg-white after:border-gray-400 after:border after:rounded-full after:h-6 after:w-10 after:transition-all  peer-checked:bg-blue-600">
                                                <span class="mr-auto text-white">AM</span>
                                                <span class="ml-auto text-white">PM</span>
                                            </div>
                                        </label> --}}

                                </div>
                                {{-- Animación Horizontal --}}
                                <div class="hidden items-center lg:grid">
                                    <svg class="mx-5 w-5 h-5 text-green-500"  fill="none" viewBox="0 0 12 10"
                                        style="  animation-name: animate-color;
                                        animation-duration: 0.5s;
                                        animation-iteration-count: infinite;
                                        animation-direction: alternate;">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                                    </svg>
                                </div>
                                {{-- Animación Vertical --}}
                                <div class="lg:hidden">
                                    <svg class="mx-auto my-3 w-5 h-5 text-green-500 rotate-90"  fill="none" viewBox="0 0 12 10"
                                        style="  animation-name: animate-color;
                                        animation-duration: 0.5s;
                                        animation-iteration-count: infinite;
                                        animation-direction: alternate;">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                                    </svg>
                                </div>

                                {{-- Entregar --}}
                                <div id="home_cn_order_destination" class="space-y-1 max-w-[470px]">
                                    {{-- Agency Section --}}

                                        {{-- <h3 class="font-bold">'+location+'</h3>
                                        <div class="flex space-x-1 items-center">
                                            <h3 class="mr-auto">'+_municipio+', '+_departamento+': '+_address+'</h3>
                                        </div>
                                        <div class="items-center space-y-2 sm:flex sm:space-x-1 sm:space-y-0">
                                            <input name="name_'+_location+'" class="rounded-lg h-10 w-full border-gray-200" type="text"  placeholder="Nombre">
                                            <input name="phone_'+_location+'" class="rounded-lg h-10 w-full border-gray-200" type="text"  placeholder="Telefono">
                                        </div>
                                        <div class="flex my-2 space-x-1">
                                            <input name="email_'+_location+'" class="rounded-lg h-10 mx-auto w-full border-gray-200" type="text"  placeholder="Email">
                                        </div> --}}
                                </div>
                            </div>
                            <button id="home_cn_btn_order" type="button" class="flex bg-blue-950
                                px-3 py-1 mt-3 mx-auto rounded-xl text-white">Siguiente</button>
                        </form>
                    </div>
                </div>

                <!-- Condiciones Modal -->
                <div id="defaultModalCn" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow ">
                            <!-- Modal header -->
                            <div class="flex items-start justify-between p-4 border-b rounded-t ">
                                <h3 class="text-xl font-semibold text-gray-900 ">
                                    Condiciones de Servicio POBOX
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center " data-modal-hide="defaultModalCn">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-6 space-y-6">
                                <p class="text-base leading-relaxed text-gray-500 px-3">
                                    a) Todas nuestras tarifas incluyen IVA. <br>
                                    b) El embalaje y empaque es responsabilidad de cliente y proveedor. <br>
                                    c)Las entregas se realizan en oficinas de destino únicamente. <br>
                                    d) GRUPO SGL (y su corporativo) no se responsabilizan por daños ocurridos en el transito debido a mal empaque o embalaje de la misma. <br>
                                    e) En caso de extravió de mercadería el cliente deberá de ingresar un reclamo por medio de FORMULARIO DE RECLAMOS COURIER, en un tiempo máximo de 3 días hábiles, después de notificado el mismo por servicio al cliente. <br>
                                    f) La cobertura por reclamos únicamente aplican a un valor máximo del 70% de la mercadería declarada al momento de despacho con soporte de factura contable y documentos requeridos en FORMULARIO DE RECLAMOS COURIER. <br>
                                    g) Los productos con baterías están sujetos a restricción de vuelo por normas internacionales. <br>
                                    g.1) Los paquetes están sujetos a aceptación de aerolínea, por lo que de no cumplir con las normas de vuelo pueden ser retenidos o retornados a nuestras oficinas de origen. <br>
                                    h) Los tiempos de tránsito ofertados pueden variar por disposición de vuelo de aerolínea en las cuales GRUPO SGL, no es responsable de las mismas. <br>
                                    i)GRUPO SGL, no se responsabiliza por el mal funcionamiento o calidad de los productos transportados. <br>
                                    i.1) GRUPO SGL, podrá notificar los daños visuales de paquetes que presenten daños, sin embargo, no se revisar ni abren los paquetes previos a vuelos. <br>
                                    i.2) Los paquetes con contrabando o mercaderías no declaradas podrán ser confiscados por las autoridades. <br>
                                    j) GRUPO SGL, no se responsabiliza por las demoras ocasionadas por huelgas, disposiciones gubernamentales y autoridades de aduana en origen y destino. <br>
                                    k) El cliente acepta las condiciones al momento de requerir el servicio. <br>
                                    l)Tarifa valida por 8 días. <br>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                {{-- CN OSC -> Finish --}}
                <div id="home_cn_osc" class="home_quoters_base hidden bg-white border
                    mx-auto h-auto w-11/12 lg:h-96">
                    <form id="home_cn_form_osc" action="/national-quoter-finish" method="POST" class="mx-auto">
                        @csrf
                        <div class="lg:flex">
                            <div class="bg-white p-1 lg:p-2 lg:w-2/3">
                                {{-- Ver OSC --}}
                                <div class="flex">
                                    <a  href="/national-quoter-generate-osc" class="underline text-sm lg:text-base" target="_blank">Ver el OSC de mi Orden</a>
                                    <span class="home_cn_osc_total block ml-auto">$0.00</span>
                                </div>
                                <hr class="h-px my-2 bg-gray-300 border-0">
                                {{-- Select --}}
                                <div class="text-center mb-10">
                                    <select id="home_cn_payment_type" name="payment" class="p-2 border-transparent rounded-lg text-gray-400">
                                        <option value="0">Selecciona el Tipo de Pago</option>
                                        <option value="1">Tarjeta de Credito/Debito</option>
                                        <option value="2">Transferencia Bancaria</option>
                                        <option value="3">Pago en Agencia</option>
                                        <option value="4">Pago Contra Entrega</option>
                                    </select>
                                </div>

                                {{-- Tarjeta --}}
                                <div id="home_cn_payment_cc" class="hidden w-11/12  py-5 px-3
                                    space-y-3 bg-white mx-auto rounded-md">
                                    <img width="50" height="30" src="{{ asset('images/icons/ICONO VISA.svg')}}" alt="">
                                    <div class="flex justify-start space-x-1 border-b">
                                        <input class="w-full h-10 rounded-md border-transparent focus:border-transparent focus:ring-0 uppercase" name="card_name" type="text" placeholder="Nombre"  autocomplete="off">
                                        <input class="w-full h-10 rounded-md border-transparent focus:border-transparent focus:ring-0 uppercase" name="card_last_name" type="text" placeholder="Apellido"  autocomplete="off">
                                    </div>
                                    <div class="flex border-b items-center h-12 rounded-sm">
                                        <input type="text" name="card_number" class="w-8/12 text-xs font-bold text-gray-500 border-transparent focus:border-transparent focus:ring-0" placeholder="Card Number"  autocomplete="off">
                                        <input type="text" name="card_csv" class="text-2xs text-center font-bold text-gray-500 p-0 w-2/12 border-transparent focus:border-transparent focus:ring-0" placeholder="CSV"  autocomplete="off">
                                        <input type="text" name="card_month" class="text-2xs text-center font-bold text-gray-500 p-0 w-1/12 border-transparent focus:border-transparent focus:ring-0" placeholder="MM"  autocomplete="off">
                                        <span class="text-2xs font-bold text-gray-400">/</span>
                                        <input type="text" name="card_year" class="text-2xs text-center font-bold text-gray-500 p-0 w-1/12 border-transparent focus:border-transparent focus:ring-0" placeholder="YY"  autocomplete="off">
                                    </div>
                                </div>

                                {{-- Transferencia --}}
                                <div id="home_cn_payment_bt" class="hidden">
                                    <div class="w-11/12  py-5 px-5 rounded-lg
                                        space-y-2  bg-white mx-auto">
                                        <div class="flex border-b">
                                            <input class="w-full h-8 text-xs md:text-sm rounded-md border-transparent focus:border-transparent focus:ring-0 uppercase" name="bank_note" type="text" placeholder="No.Boleta" autocomplete="off">
                                            <input class="w-full h-8 text-2xs md:text-sm rounded-md border-transparent focus:border-transparent focus:ring-0 uppercase" name="bank_reference" type="text" placeholder="No.Referencia"  autocomplete="off">
                                        </div>
                                        <div class="flex border-b w-fit">
                                            <input class="w-full h-8 text-xs md:text-sm rounded-md border-transparent focus:border-transparent focus:ring-0 uppercase" name="bank_amount" type="text" placeholder="Monto" autocomplete="off">
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-sm md:text-base">Subir Boleta de Pago</h3>
                                            <input id="home_cn_transfer_file" class="my-3 rounded-xl bg-blue-950 text-white" name="bank_file" type="file">
                                        </div>
                                    </div>

                                    {{-- <div class="py-5">
                                        <div class="mr-auto">
                                            <h3 class="font-bold">Banco Destino</h3>
                                            <h3 class="">Banco GyT</h3>
                                        </div>
                                        <div class="mx-auto">
                                            <h3 class="font-bold">Nombre</h3>
                                            <h3 class="">Grupo SGL</h3>
                                        </div>
                                        <div class="ml-auto">
                                            <h3 class="font-bold">No.Cuenta Destino</h3>
                                            <h3 class="">GTQ 12321423423 Monetarios</h3>
                                        </div>
                                    </div> --}}
                                </div>

                                {{-- Pago en agencia --}}
                                <div id="home_cn_payment_agency" class="w-11/12 hidden  p-5
                                    rounded-lg  bg-white mx-auto">
                                    {{-- <img class="w-56 mx-auto" src="{{asset('images/baloo/baloo_pago_en_agencia.png')}}" alt=""> --}}
                                </div>

                                {{-- Pago Contra Entrega --}}
                                <div id="home_cn_payment_cod" class="w-11/12 hidden p-5
                                    rounded-lg  bg-white mx-auto">
                                    {{-- <img class="w-56 mx-auto" src="{{asset('images/payment/pago_contra_entrega.png')}}" alt=""> --}}
                                </div>
                            </div>

                            {{-- Resumen Orden --}}
                            <div class="border p-1 lg:p-2 lg:w-1/3">
                                {{-- Facturacion --}}
                                <div class="mx-auto py-1  space-y-1 grid px-1">
                                    <h3 class="text-base">Datos de Facturación: </h3>
                                    <input class="rounded-lg h-10 border-gray-200 "
                                        name="bill_name"  type="text" placeholder="Nombre">
                                    <input class="rounded-lg h-10 border-gray-200"
                                        name="bill_address" type="text" placeholder="Dirección">
                                    <input class="rounded-lg h-10 border-gray-200"
                                        name="bill_nit" type="text" placeholder="NIT/DPI">
                                    <div class="flex items-center space-x-1">
                                        <input class="rounded-md" name="bill_cf" type="checkbox">
                                        <span class="text-sm font-bold">CF</span>
                                    </div>
                                </div>

                                <hr class="h-px my-5 bg-gray-300 border-0">

                                <h3 class="">Resumen de Orden</h3>
                                <span class="home_cn_osc_total">Total:$0.00</span>
                                <button id="home_cn_btn_osc" type="button" class="wait flex justify-center bg-blue-600 rounded-lg
                                    py-3 w-11/12 text-white hover:bg-blue-900 my-3
                                    mx-auto text-sm font-bold">
                                    Pagar<span class="home_cn_osc_total mx-1">$0.00</span></button>

                            </div>
                        </div>
                    </form>
                </div>

                {{-- Success --}}
                <div id="home_cn_success" class="home_quoters_base hidden bg-white border-2 rounded-xl
                    w-11/12 mx-auto p-5">
                    <div class="bg-white w-11/12 mx-auto rounded-xl p-10 font-bold text-center">
                        <h3 id="home_cn_order_success" class="text-lg"></h3>
                        <h3 class="text-lg mt-5">Revisa tus ordenes</h3>
                        <a href="/user-orders">
                            <button class="text-white bg-blue-600
                            px-3 py-2 rounded-lg my-2">Mis Ordenes</button>
                        </a>
                    </div>
                </div>

            </div>

            {{-- Miami --}}
            <div id="home_mg_base_div" class="home_quoters_base ">
                {{-- Location  Packages -> Quotation -> Order--}}
                <div id="home_mg_location_package_div" class="home_quoters_base hidden">
                    {{-- Location --}}
                    <div class="flex bg-white w-11/12 mx-auto h-12 rounded-t-lg
                        items-center py-1 relative">
                        <img class="w-6 h-4 ml-5 mr-5 lg:w-8
                        lg:h-6" src="{{asset('images/flags/USA.jpg')}}" alt="">

                        <span class="h-12 text-gray-500 text-center text-xs w-5/12
                        grid items-center
                        sm:text-xl">
                        Miami</span>

                        <svg class="mx-1 w-5 h-5 text-green-500"  fill="none" viewBox="0 0 12 10"
                            style="animation-name: animate-color;
                            animation-duration: 0.5s;
                            animation-iteration-count: infinite;
                            animation-direction: alternate;">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                        </svg>

                        <img class="w-6 h-4 ml-5 mr-5 lg:w-8
                        lg:h-6" src="{{asset('images/flags/Guatemala.jpg')}}" alt="">
                        <span class="h-12 text-gray-500 text-center text-xs w-5/12
                        grid items-center
                        sm:text-xl px-2">
                        Guatemala</span>
                    </div>

                    <form id="home_mg_form_packages" action="/miami-quoter-quotation" method="POST" autocomplete="off">
                        @csrf
                        {{-- Packages Miami  Guatemala--}}
                        <div id="home_mg_package_div" class="home_quoters_base hidden bg-white border rounded-b-lg w-11/12 mx-auto h-fit shadow-xl
                            p-5">
                            <div class="md:grid md:gap-8 md:grid-cols-2">
                                <div>
                                    <div class="text-center p-3">
                                        <span>Seleccione el Servicio:</span>
                                        <select id="home_mg_service_select" name="service" class="py-1 px-2 rounded-2xl h-10 border-none bg-gray-200
                                            text-gray-500 text-sm">
                                            <option class="" value="1" selected>P.O. BOX</option>
                                            <option class="" value="2">Todo Incluido</option>
                                        </select>
                                    </div>
                                    <div class="text-center p-1 relative hidden ">
                                        <input id="home_mg_link" name="link" class=" left-28 bottom-7 home_quotation_keyup h-10 rounded-2xl border-none bg-gray-200" type="text" placeholder="Pasame Tu Link">
                                    </div>

                                    <div class="grid grid-cols-1 lg:grid-cols-2">
                                        <div class="text-center">
                                            <h3 class="text-sm">Valor de mercadería en US$:</h3>
                                            <input id="home_mg_price" name="price" class="home_quotation_keyup lg:w-11/12 xl:w-auto rounded-2xl h-10 border-none bg-gray-200" type="text" placeholder="Precio">
                                        </div>
                                        <div class="text-center">
                                            <h3 class="text-sm">Shipping en US$:</h3>
                                            <input id="home_mg_shipping" name="shipping" class="home_quotation_keyup lg:w-11/12 xl:w-auto rounded-2xl h-10 border-none bg-gray-200" type="text" placeholder="Shipping">
                                        </div>
                                        <div class="text-center">
                                            <h3 class="text-sm">Peso en libras: </h3>
                                            <input id="home_mg_weight" name="weight" class="home_quotation_keyup lg:w-11/12 xl:w-auto rounded-2xl h-10 border-none bg-gray-200" type="text" placeholder="Peso">
                                        </div>
                                        <div class="text-center ">
                                            <h3 class="text-sm">Descripción:</h3>
                                            <select id="home_mg_description" name="description" class="home_quotation_change max-w-[226px] lg:w-11/12 xl:w-auto rounded-2xl h-10 border-none bg-gray-200  text-center text-sm text-gray-500">
                                                <option value="-" selected="selected">Selecciona Descripción</option>
                                                <option value="15">Accesorio de Aseo Personal: 15%</option>
                                                <option value="15">Accesorio de Cámara: 15%</option>
                                                <option value="15">Accesorio de Carro: 15%</option>
                                                <option value="15">Accesorio de Cocina: 15%</option>
                                                <option value="15">Accesorio de Computacion: 15%</option>
                                                <option value="15">Accesorio de Musica: 15%</option>
                                                <option value="15">Accesorio de Oficina: 15%</option>
                                                <option value="15">Accesorio de Telefonia: 15%</option>
                                                <option value="15">Accesorio Deportivo: 15%</option>
                                                <option value="0">Accesorio Electrico: 0%</option>
                                                <option value="15">Articulos de Cuero: 15%</option>
                                                <option value="15">Articulos de Fiesta: 15%</option>
                                                <option value="15">Bateria de Carro: 15%</option>
                                                <option value="15">Bicicleta: 15%</option>
                                                <option value="0">Bocinas de Carro: 0%</option>
                                                <option value="15">Bolsas: 15%</option>
                                                <option value="10">Cables: 10%</option>
                                                <option value="0">Camara Fotografica: 0%</option>
                                                <option value="10">Cartucho de tinta (Simple): 10%</option>
                                                <option value="0">Cartucho de Tinta C/Chip: 0%</option>
                                                <option value="15">Catalogos: 15%</option>
                                                <option value="13">CD´s: 10% +3% IPSA</option>
                                                <option value="0">Celulares: 0%</option>
                                                <option value="5">Cinta de Impresora: 5%</option>
                                                <option value="0">Computadoras: 0%</option>
                                                <option value="15">Consola de Videojuegos: 15%</option>
                                                <option value="15">Cosmeticos: 15%</option>
                                                <option value="15">Cuadernos: 15%</option>
                                                <option value="0">Discos Duros Vacios: 0%</option>
                                                <option value="18">DVD Player: 15% +3% IPSA</option>
                                                <option value="15">Edredon: 15%</option>
                                                <option value="15">Electrodomesticos: 15%</option>
                                                <option value="0">Equipo Medico: 0%</option>
                                                <option value="15">Estuche de Cuero: 15%</option>
                                                <option value="15">Estuche Partes Plasticas: 15%</option>
                                                <option value="15">Etiquetas de Papel o Carton: 15%</option>
                                                <option value="15">Etiquetas de Tela: 15%</option>
                                                <option value="15">Grabadoras: 15%</option>
                                                <option value="0">Herramientas de Mano: 0%</option>
                                                <option value="0">Impresoras: 0%</option>
                                                <option value="15">Joyeria/Bisuteria: 15%</option>
                                                <option value="15">Juguetes: 15%</option>
                                                <option value="0">Laptop: 0%</option>
                                                <option value="15">Lentes: 15%</option>
                                                <option value="0">Lentes (solo aro): 0%</option>
                                                <option value="5">Lentes de Contacto: 5%</option>
                                                <option value="15">Lentes de Sol: 15%</option>
                                                <option value="0">Libros: 0%</option>
                                                <option value="5">Llaves: 5%</option>
                                                <option value="15">Luces Navideñas: 15%</option>
                                                <option value="15">Mascarillas: 15%</option>
                                                <option value="15">Material Impreso: 15%</option>
                                                <option value="15">Material Promocional: 15%</option>
                                                <option value="15">Medicamentos: 15%</option>
                                                <option value="15">MP3 (iPod): 15%</option>
                                                <option value="15">Muebles de Casa: 15%</option>
                                                <option value="10">Partes de Bicicleta: 10%</option>
                                                <option value="10">Partes Industriales: 10%</option>
                                                <option value="15">Poster: 15%</option>
                                                <option value="15">Radio de Carro: 15%</option>
                                                <option value="15">Reloj de Pulsera/Pared: 15%</option>
                                                <option value="10">Repuestos de Carro: 10%</option>
                                                <option value="0">Repuestos de Helicoptero: 0%</option>
                                                <option value="0">Repuestos de Motor de Carro: 0%</option>
                                                <option value="0">Repuestos Electronicos: 0%</option>
                                                <option value="15">Ropa: 15%</option>
                                                <option value="0">Scanner: 0%</option>
                                                <option value="0">Software de PC: 0%</option>
                                                <option value="0">Tablets (iPad): 0%</option>
                                                <option value="15">Tarjetas de Invitaciones: 15%</option>
                                                <option value="0">Videocamara: 0%</option>
                                                <option value="18">Videocintas: 15% +3% IPSA</option>
                                                <option value="3">Videojuegos CD/DVD/BlueRay- 0% +3% IPSA</option>
                                                <option value="18">Videojuegos Cassette: 15% +3% IPSA</option>
                                                <option value="15">Zapatos: 15%</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mt-2 flex text-center w-fit mx-auto">
                                        {{-- <div class="mx-2 font-bold">
                                            <h3>Premier Club</h3>
                                            <input id="home_mg_premier" name="premier" class="home_quotation_change" type="checkbox">
                                        </div>
                                        <div class="mx-2 font-bold">
                                            <h3>Prepago</h3>
                                            <input id="home_mg_prepaid" name="prepaid" class="home_quotation_change" type="checkbox" name="">
                                        </div> --}}
                                    </div>
                                </div>

                                <div class="p-2">
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input id="home_mg_exchange_btn" name="currency" type="checkbox" class="sr-only peer" checked>
                                        <div class="flex px-2 w-11 h-6  bg-yellow-400 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-transparent rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-gray-300 after:content-[''] after:absolute after:top-[0px] after:left-[1px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-5 after:transition-all  peer-checked:bg-green-500">
                                            <span class="mr-auto font-bold text-green-800">$</span>
                                            <span class="ml-auto font-bold text-yellow-600">Q</span>
                                        </div>
                                    </label>
                                    <h3>Flete SGL: <span id="home_mg_transport">0.00</span></h3>
                                    <h3>Desaduanaje SGL: <span id="home_mg_desaduanaje">0.00</span></h3>
                                    <h3 class="font-bold">Servicios SGL: <span id="home_mg_services">0.00</span></h3>
                                    <h3>DAI: <span id="home_mg_dai">0.00</span></h3>
                                    <h3>IVA: <span id="home_mg_iva">0.00</span></h3>
                                    <h3 class="font-bold">Impuestos: <span id="home_mg_taxes">0.00</span></h3>
                                    <h3 class="font-bold">Total P.O. BOX: Servicio SGL + Impuestos: <span id="home_mg_total_pobox">0.00</span></h3>
                                    <hr class="border-gray-300">
                                    <h3 class="font-bold hidden">Comisión: <span id="home_mg_commission">0.00</span></h3>
                                    <h3 class="font-bold hidden">Total Todo Incluido: Mercadería + Comisión + Servicio SGL + Impuestos: <span id="home_mg_total_include">0.00</span></h3>
                                </div>
                            </div>

                            <div id="home_mg_conditions_order_div" class="home_quoters text-center mt-5 hidden">
                                @auth
                                    <div class="items-center flex w-fit mx-auto" >
                                        <input id="home_mg_chk_terms" class="mx-2" type="checkbox" name="terms">
                                        <span class="text-sm">
                                            ACEPTO LAS CONDICIONES DE SERVICIO</span>
                                    </div>
                                    <span data-modal-target="defaultModalMg" data-modal-toggle="defaultModalMg" class="underline text-sm mt-5 sm:mt-0 cursor-pointer hover:text-blue-700">
                                        VER CONDICIONES DE SERVICIO</span>
                                    <button id="home_mg_btn_quotation_order" type="button" class="flex mx-auto mt-5 bg-blue-950 px-4 py-2
                                        rounded-xl text-white cursor-pointer opacity-70" disabled>Realizar Orden</button>
                                @else
                                <div class="my-10 mx-auto w-fit text-blue-700">
                                    <div class="flex">
                                        <img class="max-w-[40px]" src="{{asset('images/main/logo.png')}}" alt="">
                                        <div class="text-lg px-10 bg-white font-bold">
                                            <h3 class="text-left">We Are </h3>
                                            <h3>The Blue Wave</h3>
                                        </div>
                                    </div>
                                    <h3>Contáctanos</h3>
                                    <h3 class="text-blue-800">customerservice@gruposgl.com</h3>
                                </div>
                                    {{-- <a href="/login" class="block mx-auto w-fit mt-5 bg-blue-950 px-4 py-2
                                    rounded-xl text-white cursor-pointer">Iniciar Sesión</a> --}}
                                @endauth
                            </div>
                        </div>

                    </form>
                </div>

                <!-- Condiciones Modal -->
                <div id="defaultModalMg" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow ">
                            <!-- Modal header -->
                            <div class="flex items-start justify-between p-4 border-b rounded-t ">
                                <h3 class="text-xl font-semibold text-gray-900 ">
                                    Condiciones de Servicio POBOX
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center " data-modal-hide="defaultModalMg">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-6 space-y-6">
                                <div class="text-base leading-7 text-gray-800 px-3">
                                    <span class="font-bold">a)</span> Todas nuestras tarifas incluyen IVA. <br>
                                    <span class="font-bold">b)</span>  El embalaje y empaque es responsabilidad de cliente y proveedor. <br>
                                    <span class="font-bold">c)</span>  Las entregas se realizan en oficinas de destino únicamente. <br>
                                    <span class="font-bold">d)</span>  GRUPO SGL (y su corporativo) no se responsabilizan por daños ocurridos en el transito debido a mal empaque o embalaje de la misma. <br>
                                    <span class="font-bold">e)</span>  En caso de extravió de mercadería el cliente deberá de ingresar un reclamo por medio de FORMULARIO DE RECLAMOS COURIER, en un tiempo máximo de 3 días hábiles, después de notificado el mismo por servicio al cliente. <br>
                                    <span class="font-bold">f)</span>  La cobertura por reclamos únicamente aplican a un valor máximo del 70% de la mercadería declarada al momento de despacho con soporte de factura contable y documentos requeridos en FORMULARIO DE RECLAMOS COURIER. <br>
                                    <span class="font-bold">g)</span>  Los productos con baterías están sujetos a restricción de vuelo por normas internacionales. <br>
                                    <span class="font-bold ml-3">g.1)</span>  Los paquetes están sujetos a aceptación de aerolínea, por lo que de no cumplir con las normas de vuelo pueden ser retenidos o retornados a nuestras oficinas de origen. <br>
                                    <span class="font-bold">h)</span>  Los tiempos de tránsito ofertados pueden variar por disposición de vuelo de aerolínea en las cuales GRUPO SGL, no es responsable de las mismas. <br>
                                    <span class="font-bold">i)</span>  GRUPO SGL, no se responsabiliza por el mal funcionamiento o calidad de los productos transportados. <br>
                                    <span class="font-bold ml-3">i.1)</span>  GRUPO SGL, podrá notificar los daños visuales de paquetes que presenten daños, sin embargo, no se revisar ni abren los paquetes previos a vuelos. <br>
                                    <span class="font-bold ml-3">i.2)</span>  Los paquetes con contrabando o mercaderías no declaradas podrán ser confiscados por las autoridades. <br>
                                    <span class="font-bold">j)</span>  GRUPO SGL, no se responsabiliza por las demoras ocasionadas por huelgas, disposiciones gubernamentales y autoridades de aduana en origen y destino. <br>
                                    <span class="font-bold">k)</span>  El cliente acepta las condiciones al momento de requerir el servicio. <br>
                                    <span class="font-bold">l)</span>  Tarifa valida por 8 días. <br>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                {{-- Order -> OSC --}}
                <div id="home_mg_order" class="home_quoters_base bg-white  border rounded-b-lg
                    w-11/12 min-h-[384px] max-h-auto mx-auto py-5 items-center flex" style="display:none;">
                    <div class="mx-auto rounded-xl">
                        <form id="home_mg_form_order_osc" action="/miami-quoter-osc" method="POST" autocomplete="off">
                            @csrf
                            <div class="w-fit mx-auto px-2 lg:flex">
                                {{-- Recoger --}}
                                <div class="w-fit items-center flex text-center mx-auto">
                                    {{-- <div class="flex bg-gray-100 w-11/12 mx-auto h-12 rounded-xl
                                    items-center py-1 relative"> --}}
                                    <img class="w-6 h-4 ml-5 mr-5 lg:w-8
                                    lg:h-6" src="{{asset('images/flags/USA.jpg')}}" alt="">

                                    <span class="h-12 text-gray-500 text-center text-lg w-5/12
                                    rounded-xl border-none outline-none grid items-center
                                    sm:text-xl">
                                    Miami</span>
                                    {{-- </div> --}}
                                </div>
                                {{-- Animación --}}
                                <div class="flex items-center">
                                    {{-- Horizontal --}}
                                    <svg class="hidden mx-5 w-5 h-5 text-green-500 lg:block"  fill="none" viewBox="0 0 12 10"
                                        style="  animation-name: animate-color;
                                        animation-duration: 0.5s;
                                        animation-iteration-count: infinite;
                                        animation-direction: alternate;">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                                    </svg>
                                    {{-- Vertical --}}
                                    <svg class="block mx-auto w-5 h-5 text-green-500 rotate-90 lg:hidden"  fill="none" viewBox="0 0 12 10"
                                        style="  animation-name: animate-color;
                                        animation-duration: 0.5s;
                                        animation-iteration-count: infinite;
                                        animation-direction: alternate;">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                                    </svg>
                                </div>
                                {{-- Entregar --}}
                                <div class="text-center">
                                    <h3 class="font-bold">Entregar En:</h3>
                                    {{-- Select Destination --}}
                                    <select name="destination" id="home_mg_destination_select" class="p-2 mt-1 mb-1 rounded-lg
                                    border-gray-200">
                                        <option value="0">Seleccione punto de entrega</option>
                                        <option value="1">Ciudad de Guatemala</option>
                                        <option value="2">Agencia Zona 10</option>
                                        <option value="3">Agencia El Dorado</option>
                                        <option value="4">Agencia Chiquimula</option>
                                        <option value="5">Agencia Quetzaltenango</option>
                                    </select>
                                    {{-- Destination Form --}}
                                    <div id="home_mg_order_destination">

                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                {{-- OSC -> Finish --}}
                <div id="home_mg_osc" class="home_quoters_base hidden bg-white border
                    mx-auto h-auto w-11/12 lg:h-96">

                    <form id="home_mg_form_osc" action="/miami-quoter-finish" method="POST" class="mx-auto" enctype="multipart/form-data">
                        @csrf
                        <div class="lg:flex">
                            <div class="bg-white p-1 lg:p-2 lg:w-2/3">
                                {{-- Ver OSC --}}
                                <div class="flex">
                                    <a href="/miami-quoter-generate-osc" class="underline text-sm lg:text-base" target="_blank">Ver el OSC de mi Orden</a>
                                    <span class="home_mg_osc_total block ml-auto">$0.00</span>
                                </div>
                                <hr class="h-px my-2 bg-gray-300 border-0">
                                {{-- Select --}}
                                <div class="text-center mb-10">
                                    <select id="home_mg_payment_type" name="payment" class="p-2 border-transparent rounded-lg text-gray-400">
                                        <option value="0">Selecciona el Tipo de Pago</option>
                                        <option value="1">Tarjeta de Credito/Debito</option>
                                        <option value="2">Transferencia Bancaria</option>
                                        <option value="3">Pago en Agencia</option>
                                        <option value="4">Pago Contra Entrega</option>
                                    </select>
                                </div>

                                {{-- Tarjeta --}}
                                <div id="home_mg_payment_cc" class="hidden w-11/12  py-5 px-3
                                space-y-3 bg-white mx-auto rounded-md">
                                    <img width="50" height="30" src="" alt="">
                                    <div class="flex justify-start space-x-1 border-b">
                                        <input class="w-full h-10 rounded-md border-transparent focus:border-transparent focus:ring-0 uppercase" name="card_name" type="text" placeholder="Nombre"  autocomplete="off">
                                        <input class="w-full h-10 rounded-md border-transparent focus:border-transparent focus:ring-0 uppercase" name="card_last_name" type="text" placeholder="Apellido"  autocomplete="off">
                                    </div>
                                    <div class="flex border-b items-center h-12 rounded-sm">
                                        <input type="text" name="card_number" class="w-8/12 text-xs font-bold text-gray-500 border-transparent focus:border-transparent focus:ring-0" placeholder="Card Number"  autocomplete="off">
                                        <input type="text" name="card_csv" class="text-2xs text-center font-bold text-gray-500 p-0 w-2/12 border-transparent focus:border-transparent focus:ring-0" placeholder="CSV"  autocomplete="off">
                                        <input type="text" name="card_month" class="text-2xs text-center font-bold text-gray-500 p-0 w-1/12 border-transparent focus:border-transparent focus:ring-0" placeholder="MM"  autocomplete="off">
                                        <span class="text-2xs font-bold text-gray-400">/</span>
                                        <input type="text" name="card_year" class="text-2xs text-center font-bold text-gray-500 p-0 w-1/12 border-transparent focus:border-transparent focus:ring-0" placeholder="YY"  autocomplete="off">
                                    </div>
                                </div>

                                {{-- Transferencia --}}
                                <div id="home_mg_payment_bt" class="hidden">
                                    <div class="w-11/12  py-5 px-5 rounded-lg
                                        space-y-2  bg-white mx-auto">
                                        <div class="flex border-b">
                                            <input class="w-full h-8 text-xs md:text-sm rounded-md border-transparent focus:border-transparent focus:ring-0 uppercase" name="bank_note" type="text" placeholder="No.Boleta" autocomplete="off">
                                            <input class="w-full h-8 text-2xs md:text-sm rounded-md border-transparent focus:border-transparent focus:ring-0 uppercase" name="bank_reference" type="text" placeholder="No.Referencia"  autocomplete="off">
                                        </div>
                                        <div class="flex border-b w-fit">
                                            <input class="w-full h-8 text-xs md:text-sm rounded-md border-transparent focus:border-transparent focus:ring-0 uppercase" name="bank_amount" type="text" placeholder="Monto" autocomplete="off">
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-sm md:text-base">Subir Boleta de Pago</h3>
                                            {{-- <div class="h-24 rounded-lg cursor-pointer
                                                border-2 border-dotted border-gray-300 p-0.5 text-gray-400"> --}}
                                                {{-- <div class="border-2 border-dotted h-full border-gray-300
                                                    rounded-lg"> --}}
                                                    {{-- <label for="home_mg_transfer_file" class="
                                                        w-full h-full items-center flex">
                                                        <svg class="w-6 h-6 mx-auto text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 20 20">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 19H1.933A.97.97 0 0 1 1 18V5.828a2 2 0 0 1 .586-1.414l2.828-2.828A2 2 0 0 1 5.828 1h8.239A.97.97 0 0 1 15 2v4M6 1v4a1 1 0 0 1-1 1H1m11 8h4m-2 2v-4m5 2a5 5 0 1 1-10 0 5 5 0 0 1 10 0Z"/>
                                                        </svg>
                                                    </label> --}}

                                                {{-- </div> --}}
                                            {{-- </div> --}}
                                            <input id="home_mg_transfer_file" class="my-3 rounded-xl bg-blue-950 text-white" name="bank_file" type="file">
                                        </div>
                                    </div>

                                    {{-- <div class="py-5">
                                        <div class="mr-auto">
                                            <h3 class="font-bold">Banco Destino</h3>
                                            <h3 class="">Banco GyT</h3>
                                        </div>
                                        <div class="mx-auto">
                                            <h3 class="font-bold">Nombre</h3>
                                            <h3 class="">Grupo SGL</h3>
                                        </div>
                                        <div class="ml-auto">
                                            <h3 class="font-bold">No.Cuenta Destino</h3>
                                            <h3 class="">GTQ 12321423423 Monetarios</h3>
                                        </div>
                                    </div> --}}
                                </div>

                                {{-- Pago en agencia --}}
                                <div id="home_mg_payment_agency" class="w-11/12 hidden  p-5
                                    rounded-lg  bg-white mx-auto">
                                    {{-- <img class="w-56 mx-auto" src="{{asset('images/baloo/baloo_pago_en_agencia.png')}}" alt=""> --}}
                                </div>

                                {{-- Pago Contra Entrega --}}
                                <div id="home_mg_payment_cod" class="w-11/12 hidden p-5
                                    rounded-lg  bg-white mx-auto">
                                    {{-- <img class="w-56 mx-auto" src="{{asset('images/payment/pago_contra_entrega.png')}}" alt=""> --}}
                                </div>
                            </div>

                            {{-- Resumen Orden --}}
                            <div class="border p-1 lg:p-2 lg:w-1/3">
                                {{-- Facturacion --}}
                                <div class="mx-auto py-1  space-y-1 grid px-1">
                                    <h3 class="text-base">Datos de Facturación: </h3>
                                    <input class="rounded-lg h-10 border-gray-200 "
                                        name="bill_name"  type="text" placeholder="Nombre">
                                    <input class="rounded-lg h-10 border-gray-200"
                                        name="bill_address" type="text" placeholder="Dirección">
                                    <input class="rounded-lg h-10 border-gray-200"
                                        name="bill_nit" type="text" placeholder="NIT/DPI">
                                    <div class="flex items-center space-x-1">
                                        <input class="rounded-md" name="bill_cf" type="checkbox">
                                        <span class="text-sm font-bold">CF</span>
                                    </div>
                                </div>

                                <hr class="h-px my-5 bg-gray-300 border-0">

                                <h3 class="">Resumen de Orden</h3>
                                <h3 class="home_mg_osc_total">Total:$0.00</h3>
                                <button id="home_mg_btn_osc" type="button" class="wait flex justify-center bg-blue-600 rounded-lg
                                    py-3 w-11/12 text-white hover:bg-blue-900 my-3
                                    mx-auto text-sm font-bold">
                                    Pagar <span class="home_mg_osc_total mx-1">$0.00</span></button>
                            </div>
                        </div>
                    </form>
                </div>

                {{-- Success --}}
                <div id="home_mg_success" class="home_quoters_base hidden bg-white border-2 rounded-xl
                    w-11/12 mx-auto p-5">
                    <div class="bg-white w-11/12 mx-auto rounded-xl p-10 font-bold text-center">
                        <h3 id="home_mg_order_success" class="text-lg"></h3>
                        <h3 class="text-lg mt-5">Revisa tus ordenes</h3>
                        <a href="/user-orders">
                            <button class="text-white bg-blue-600
                            px-3 py-2 rounded-lg my-2">Mis Ordenes</button>
                        </a>
                    </div>
                </div>
            </div>

            {{-- China --}}
            <div id="home_cg_base_div" class="home_quoters_base ">

                {{-- Location  Packages -> Quotation -> Order --}}
                <div id="home_cg_location_package_div" class="home_quoters_base hidden">
                    {{-- Location --}}
                    <div class="flex bg-white w-11/12 mx-auto h-12 rounded-t-lg
                        items-center py-1 relative">
                        <img class="w-6 h-4 ml-5 mr-5 lg:w-8
                        lg:h-6" src="{{asset('images/flags/China.png')}}" alt="">

                        <span class="h-12 text-gray-500 text-center text-xs w-5/12
                        grid items-center
                        sm:text-xl">
                        China</span>

                        <svg class="mx-0 w-5 h-5 text-green-500"  fill="none" viewBox="0 0 12 10"
                            style="  animation-name: animate-color;
                            animation-duration: 0.5s;
                            animation-iteration-count: infinite;
                            animation-direction: alternate;">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                        </svg>

                        <img class="w-6 h-4 ml-5 mr-5 lg:w-8
                        lg:h-6" src="{{asset('images/flags/Guatemala.jpg')}}" alt="">
                        <span class="h-12 text-gray-500 text-center text-xs w-5/12
                        grid items-center
                        sm:text-xl">
                        Guatemala</span>

                    </div>

                    <form id="home_cg_form_packages" action="/china-quoter-quotation" method="POST" autocomplete="off">
                        @csrf
                        {{-- Packages China  Guatemala--}}
                        <div id="home_cg_package_div" class="home_quoters_base hidden  bg-white border rounded-b-lg w-11/12 mx-auto h-fit shadow-xl
                            p-5">
                            <div class="md:grid md:gap-8 md:grid-cols-2">
                                <div>
                                    <div class="text-center p-5">
                                        <span>Seleccione el Servicio: </span>
                                        <select id="home_cg_service_select" name="service" class="py-1 px-2 rounded-2xl h-10 border-none bg-gray-200
                                        text-gray-500 text-sm">
                                            <option class="font-bold" value="1" selected>P.O. BOX</option>
                                            <option class="font-bold text-blue-500" value="2">Todo Incluido</option>
                                        </select>
                                    </div>
                                    <div class="text-center p-1 hidden">
                                        <input id="home_cg_link" name="link" class="home_quotation_keyup rounded-lg h-10 border-gray-200 placeholder-blue-500" type="text" placeholder="Pasame Tu Link">
                                    </div>

                                    <div class="grid grid-cols-1 lg:grid-cols-2">
                                        <div class="text-center">
                                            <h3 class="text-sm">Valor de mercadería en US$:</h3>
                                            <input id="home_cg_price" name="price" class="home_quotation_keyup lg:w-11/12 xl:w-auto rounded-2xl h-10 border-none bg-gray-200" type="text" placeholder="Precio">
                                        </div>
                                        <div class="text-center">
                                            <h3 class="text-sm">Shipping en US$:</h3>
                                            <input id="home_cg_shipping" name="shipping" class="home_quotation_keyup lg:w-11/12 xl:w-auto rounded-2xl h-10 border-none bg-gray-200" type="text" placeholder="Shipping">
                                        </div>
                                        <div class="text-center">
                                            <h3 class="font-bold text-sm">Peso en libras: </h3>
                                            <input id="home_cg_weight" name="weight" class="home_quotation_keyup lg:w-11/12 xl:w-auto rounded-2xl h-10 border-none bg-gray-200" type="text" placeholder="Peso">
                                        </div>
                                        <div class="text-center ">
                                            <h3 class="font-bold text-sm">Descripción:</h3>
                                            <select id="home_cg_description" name="description" class="home_quotation_change max-w-[226px] lg:w-11/12 xl:w-auto rounded-2xl h-10 border-none bg-gray-200 text-center text-sm text-gray-500">
                                                <option value="-" selected="selected">Seleccione Descripción</option>
                                                <option value="15">Accesorio de Aseo Personal: 15%</option>
                                                <option value="15">Accesorio de Cámara: 15%</option>
                                                <option value="15">Accesorio de Carro: 15%</option>
                                                <option value="15">Accesorio de Cocina: 15%</option>
                                                <option value="15">Accesorio de Computacion: 15%</option>
                                                <option value="15">Accesorio de Musica: 15%</option>
                                                <option value="15">Accesorio de Oficina: 15%</option>
                                                <option value="15">Accesorio de Telefonia: 15%</option>
                                                <option value="15">Accesorio Deportivo: 15%</option>
                                                <option value="0">Accesorio Electrico: 0%</option>
                                                <option value="15">Articulos de Cuero: 15%</option>
                                                <option value="15">Articulos de Fiesta: 15%</option>
                                                <option value="15">Bateria de Carro: 15%</option>
                                                <option value="15">Bicicleta: 15%</option>
                                                <option value="0">Bocinas de Carro: 0%</option>
                                                <option value="15">Bolsas: 15%</option>
                                                <option value="10">Cables: 10%</option>
                                                <option value="0">Camara Fotografica: 0%</option>
                                                <option value="10">Cartucho de tinta (Simple): 10%</option>
                                                <option value="0">Cartucho de Tinta C/Chip: 0%</option>
                                                <option value="15">Catalogos: 15%</option>
                                                <option value="13">CD´s: 10% +3% IPSA</option>
                                                <option value="0">Celulares: 0%</option>
                                                <option value="5">Cinta de Impresora: 5%</option>
                                                <option value="0">Computadoras: 0%</option>
                                                <option value="15">Consola de Videojuegos: 15%</option>
                                                <option value="15">Cosmeticos: 15%</option>
                                                <option value="15">Cuadernos: 15%</option>
                                                <option value="0">Discos Duros Vacios: 0%</option>
                                                <option value="18">DVD Player: 15% +3% IPSA</option>
                                                <option value="15">Edredon: 15%</option>
                                                <option value="15">Electrodomesticos: 15%</option>
                                                <option value="0">Equipo Medico: 0%</option>
                                                <option value="15">Estuche de Cuero: 15%</option>
                                                <option value="15">Estuche Partes Plasticas: 15%</option>
                                                <option value="15">Etiquetas de Papel o Carton: 15%</option>
                                                <option value="15">Etiquetas de Tela: 15%</option>
                                                <option value="15">Grabadoras: 15%</option>
                                                <option value="0">Herramientas de Mano: 0%</option>
                                                <option value="0">Impresoras: 0%</option>
                                                <option value="15">Joyeria/Bisuteria: 15%</option>
                                                <option value="15">Juguetes: 15%</option>
                                                <option value="0">Laptop: 0%</option>
                                                <option value="15">Lentes: 15%</option>
                                                <option value="0">Lentes (solo aro): 0%</option>
                                                <option value="5">Lentes de Contacto: 5%</option>
                                                <option value="15">Lentes de Sol: 15%</option>
                                                <option value="0">Libros: 0%</option>
                                                <option value="5">Llaves: 5%</option>
                                                <option value="15">Luces Navideñas: 15%</option>
                                                <option value="15">Mascarillas: 15%</option>
                                                <option value="15">Material Impreso: 15%</option>
                                                <option value="15">Material Promocional: 15%</option>
                                                <option value="15">Medicamentos: 15%</option>
                                                <option value="15">MP3 (iPod): 15%</option>
                                                <option value="15">Muebles de Casa: 15%</option>
                                                <option value="10">Partes de Bicicleta: 10%</option>
                                                <option value="10">Partes Industriales: 10%</option>
                                                <option value="15">Poster: 15%</option>
                                                <option value="15">Radio de Carro: 15%</option>
                                                <option value="15">Reloj de Pulsera/Pared: 15%</option>
                                                <option value="10">Repuestos de Carro: 10%</option>
                                                <option value="0">Repuestos de Helicoptero: 0%</option>
                                                <option value="0">Repuestos de Motor de Carro: 0%</option>
                                                <option value="0">Repuestos Electronicos: 0%</option>
                                                <option value="15">Ropa: 15%</option>
                                                <option value="0">Scanner: 0%</option>
                                                <option value="0">Software de PC: 0%</option>
                                                <option value="0">Tablets (iPad): 0%</option>
                                                <option value="15">Tarjetas de Invitaciones: 15%</option>
                                                <option value="0">Videocamara: 0%</option>
                                                <option value="18">Videocintas: 15% +3% IPSA</option>
                                                <option value="3">Videojuegos CD/DVD/BlueRay- 0% +3% IPSA</option>
                                                <option value="18">Videojuegos Cassette: 15% +3% IPSA</option>
                                                <option value="15">Zapatos: 15%</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mt-2 flex text-center w-fit mx-auto">
                                        <div class="mx-2 font-bold">
                                            <h3>Premier Club</h3>
                                            <input id="home_cg_premier" name="premier" class="home_quotation_change" type="checkbox">
                                        </div>
                                        <div class="mx-2 font-bold">
                                            <h3>Prepago</h3>
                                            <input id="home_cg_prepaid" name="prepaid" class="home_quotation_change" type="checkbox" name="">
                                        </div>
                                    </div>
                                </div>

                                <div class="p-2">
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input id="home_cg_exchange_btn" name="currency" type="checkbox" class="sr-only peer" checked>
                                        <div class="flex px-2 w-11 h-6  bg-yellow-400 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-transparent rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-gray-300 after:content-[''] after:absolute after:top-[0px] after:left-[1px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-5 after:transition-all  peer-checked:bg-green-500">
                                            <span class="mr-auto font-bold text-green-800">$</span>
                                            <span class="ml-auto font-bold text-yellow-600">Q</span>
                                        </div>
                                    </label>
                                    <h3>Flete SGL: <span id="home_cg_transport">0.00</span></h3>
                                    <h3>Desaduanaje SGL: <span id="home_cg_desaduanaje">0.00</span></h3>
                                    <h3 class="font-bold">Servicios SGL: <span id="home_cg_services">0.00</span></h3>
                                    <h3>DAI: <span id="home_cg_dai">0.00</span></h3>
                                    <h3>IVA: <span id="home_cg_iva">0.00</span></h3>
                                    <h3 class="font-bold">Impuestos: <span id="home_cg_taxes">0.00</span></h3>
                                    <h3 class="font-bold">Total P.O. BOX: Servicio SGL + Impuestos: <span id="home_cg_total_pobox">0.00</span></h3>
                                    <hr class="border-gray-300">
                                    <h3 class="font-bold hidden">Comisión: <span id="home_cg_commission">0.00</span></h3>
                                    <h3 class="font-bold hidden">Total Todo Incluido: Mercadería + Comisión + Servicio SGL + Impuestos: <span id="home_cg_total_include">0.00</span></h3>
                                </div>
                            </div>

                            <div id="home_cg_conditions_order_div" class="home_quoters text-center mt-5 hidden">
                                @auth
                                    <div class="items-center flex w-fit mx-auto" >
                                        <input id="home_cg_chk_terms" class="mx-2" type="checkbox" name="terms">
                                        <span class="text-sm cursor-pointer">
                                            ACEPTO LAS CONDICIONES DE SERVICIO</span>
                                    </div>
                                    <span data-modal-target="defaultModalCg" data-modal-toggle="defaultModalCg" class="underline text-sm mt-5 sm:mt-0 cursor-pointer hover:text-blue-700">
                                        VER CONDICIONES DE SERVICIO</span>
                                    <button id="home_cg_btn_quotation_order" type="button" class="flex mx-auto mt-5 bg-blue-950 px-4 py-2
                                        rounded-xl text-white cursor-pointer opacity-70" disabled>Realizar Orden</button>
                                @else
                                    <div class="my-10 mx-auto w-fit text-blue-700">
                                        <div class="flex">
                                            <img class="max-w-[40px]" src="{{asset('images/main/logo.png')}}" alt="">
                                            <div class="text-lg px-10 bg-white font-bold">
                                                <h3 class="text-left">We Are </h3>
                                                <h3>The Blue Wave</h3>
                                            </div>
                                        </div>
                                        <h3>Contáctanos</h3>
                                        <h3 class="text-blue-800">customerservice@gruposgl.com</h3>
                                    </div>
                                    {{-- <a href="/login" class="block mx-auto w-fit mt-5 bg-blue-950 px-4 py-2
                                    rounded-xl text-white cursor-pointer">Iniciar Sesión</a> --}}
                                @endauth
                            </div>
                        </div>

                    </form>
                </div>

                <!-- Condiciones Modal -->
                <div id="defaultModalCg" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow ">
                            <!-- Modal header -->
                            <div class="flex items-start justify-between p-4 border-b rounded-t ">
                                <h3 class="text-xl font-semibold text-gray-900 ">
                                    Condiciones de Servicio POBOX
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center " data-modal-hide="defaultModalCg">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-6 space-y-6">
                                <div class="text-base leading-7 text-gray-800 px-3">
                                    <span class="font-bold">a)</span> Todas nuestras tarifas incluyen IVA. <br>
                                    <span class="font-bold">b)</span>  El embalaje y empaque es responsabilidad de cliente y proveedor. <br>
                                    <span class="font-bold">c)</span>  Las entregas se realizan en oficinas de destino únicamente. <br>
                                    <span class="font-bold">d)</span>  GRUPO SGL (y su corporativo) no se responsabilizan por daños ocurridos en el transito debido a mal empaque o embalaje de la misma. <br>
                                    <span class="font-bold">e)</span>  En caso de extravió de mercadería el cliente deberá de ingresar un reclamo por medio de FORMULARIO DE RECLAMOS COURIER, en un tiempo máximo de 3 días hábiles, después de notificado el mismo por servicio al cliente. <br>
                                    <span class="font-bold">f)</span>  La cobertura por reclamos únicamente aplican a un valor máximo del 70% de la mercadería declarada al momento de despacho con soporte de factura contable y documentos requeridos en FORMULARIO DE RECLAMOS COURIER. <br>
                                    <span class="font-bold">g)</span>  Los productos con baterías están sujetos a restricción de vuelo por normas internacionales. <br>
                                    <span class="font-bold ml-3">g.1)</span>  Los paquetes están sujetos a aceptación de aerolínea, por lo que de no cumplir con las normas de vuelo pueden ser retenidos o retornados a nuestras oficinas de origen. <br>
                                    <span class="font-bold">h)</span>  Los tiempos de tránsito ofertados pueden variar por disposición de vuelo de aerolínea en las cuales GRUPO SGL, no es responsable de las mismas. <br>
                                    <span class="font-bold">i)</span>  GRUPO SGL, no se responsabiliza por el mal funcionamiento o calidad de los productos transportados. <br>
                                    <span class="font-bold ml-3">i.1)</span>  GRUPO SGL, podrá notificar los daños visuales de paquetes que presenten daños, sin embargo, no se revisar ni abren los paquetes previos a vuelos. <br>
                                    <span class="font-bold ml-3">i.2)</span>  Los paquetes con contrabando o mercaderías no declaradas podrán ser confiscados por las autoridades. <br>
                                    <span class="font-bold">j)</span>  GRUPO SGL, no se responsabiliza por las demoras ocasionadas por huelgas, disposiciones gubernamentales y autoridades de aduana en origen y destino. <br>
                                    <span class="font-bold">k)</span>  El cliente acepta las condiciones al momento de requerir el servicio. <br>
                                    <span class="font-bold">l)</span>  Tarifa valida por 8 días. <br>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                {{-- Order -> OSC --}}
                <div id="home_cg_order" class="home_quoters_base bg-white  border rounded-b-lg
                    w-11/12 min-h-[384px] max-h-auto mx-auto py-5 items-center flex" style="display:none;">
                    <div class="mx-auto rounded-xl">
                        <form id="home_cg_form_order_osc" action="/china-quoter-osc" method="POST" autocomplete="off">
                            @csrf
                            <div class="w-fit mx-auto px-2 lg:flex">
                                {{-- Recoger --}}
                                <div class="w-fit items-center flex text-center mx-auto">
                                    <img class="w-6 h-4 ml-5 mr-5 lg:w-8
                                    lg:h-6" src="{{asset('images/flags/China.png')}}" alt="">

                                    <span class="h-12 text-gray-500 text-center text-lg w-5/12
                                    rounded-xlborder-none outline-none grid items-center
                                    sm:text-xl">
                                    China</span>
                                </div>
                                {{-- Animación --}}
                                <div class="flex items-center">
                                    {{-- Horizontal --}}
                                    <svg class="hidden mx-5 w-5 h-5 text-green-500 lg:block"  fill="none" viewBox="0 0 12 10"
                                        style="  animation-name: animate-color;
                                        animation-duration: 0.5s;
                                        animation-iteration-count: infinite;
                                        animation-direction: alternate;">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                                    </svg>
                                    {{-- Vertical --}}
                                    <svg class="block mx-auto w-5 h-5 text-green-500 rotate-90 lg:hidden"  fill="none" viewBox="0 0 12 10"
                                        style="  animation-name: animate-color;
                                        animation-duration: 0.5s;
                                        animation-iteration-count: infinite;
                                        animation-direction: alternate;">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                                    </svg>
                                </div>
                                {{-- Entregar --}}
                                <div class="text-center">
                                    <h3 class="font-bold">Entregar En:</h3>
                                    {{-- Select Destination --}}
                                    <select name="destination" id="home_cg_destination_select" class="p-2 mt-1 mb-1 rounded-lg
                                    border-gray-200">
                                        <option value="0">Seleccione punto de entrega</option>
                                        <option value="1">Ciudad de Guatemala</option>
                                        <option value="2">Agencia Zona 10</option>
                                        <option value="3">Agencia El Dorado</option>
                                        <option value="4">Agencia Chiquimula</option>
                                        <option value="5">Agencia Quetzaltenango</option>
                                    </select>
                                    {{-- Destination Form --}}
                                    <div id="home_cg_order_destination">

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                {{--  OSC -> Finish --}}
                <div id="home_cg_osc" class="home_quoters_base hidden bg-white border
                    mx-auto h-auto w-11/12 lg:h-96">

                    <form id="home_cg_form_osc" action="/china-quoter-finish" method="POST" class="mx-auto" enctype="multipart/form-data">
                        @csrf
                        <div class="lg:flex">
                            <div class="bg-white p-1 lg:p-2 lg:w-2/3">
                                {{-- Ver OSC --}}
                                <div class="flex">
                                    <a href="/china-quoter-generate-osc" class="underline text-sm lg:text-base" target="_blank">Ver el OSC de mi Orden</a>
                                    <span class="home_cn_osc_total block ml-auto">$0.00</span>
                                </div>
                                <hr class="h-px my-2 bg-gray-300 border-0">
                                {{-- Select --}}
                                <div class="text-center mb-10">
                                    <select id="home_cg_payment_type" name="payment" class="p-2 border-transparent rounded-lg text-gray-400">
                                        <option value="0">Selecciona el Tipo de Pago</option>
                                        <option value="1">Tarjeta de Credito/Debito</option>
                                        <option value="2">Transferencia Bancaria</option>
                                        <option value="3">Pago en Agencia</option>
                                        <option value="4">Pago Contra Entrega</option>
                                    </select>
                                </div>

                                {{-- Tarjeta --}}
                                <div id="home_cg_payment_cc" class="hidden w-11/12  py-5 px-3
                                space-y-3 bg-white mx-auto rounded-md">
                                    <img width="50" height="30" src="" alt="">
                                    <div class="flex justify-start space-x-1 border-b">
                                        <input class="w-full h-10 rounded-md border-transparent focus:border-transparent focus:ring-0 uppercase" name="card_name" type="text" placeholder="Nombre"  autocomplete="off">
                                        <input class="w-full h-10 rounded-md border-transparent focus:border-transparent focus:ring-0 uppercase" name="card_last_name" type="text" placeholder="Apellido"  autocomplete="off">
                                    </div>
                                    <div class="flex border-b items-center h-12 rounded-sm">
                                        <input type="text" name="card_number" class="w-8/12 text-xs font-bold text-gray-500 border-transparent focus:border-transparent focus:ring-0" placeholder="Card Number"  autocomplete="off">
                                        <input type="text" name="card_csv" class="text-2xs text-center font-bold text-gray-500 p-0 w-2/12 border-transparent focus:border-transparent focus:ring-0" placeholder="CSV"  autocomplete="off">
                                        <input type="text" name="card_month" class="text-2xs text-center font-bold text-gray-500 p-0 w-1/12 border-transparent focus:border-transparent focus:ring-0" placeholder="MM"  autocomplete="off">
                                        <span class="text-2xs font-bold text-gray-400">/</span>
                                        <input type="text" name="card_year" class="text-2xs text-center font-bold text-gray-500 p-0 w-1/12 border-transparent focus:border-transparent focus:ring-0" placeholder="YY"  autocomplete="off">
                                    </div>
                                </div>

                                {{-- Transferencia --}}
                                <div id="home_cg_payment_bt" class="hidden">
                                    <div class="w-11/12 border-2 py-5 px-5 rounded-lg
                                        space-y-2  bg-white mx-auto">
                                        <div class="flex border-b">
                                            <input class="w-full h-8 text-xs md:text-sm rounded-md border-transparent focus:border-transparent focus:ring-0 uppercase" name="bank_note" type="text" placeholder="No.Boleta" autocomplete="off">
                                            <input class="w-full h-8 text-2xs md:text-sm rounded-md border-transparent focus:border-transparent focus:ring-0 uppercase" name="bank_reference" type="text" placeholder="No.Referencia"  autocomplete="off">
                                        </div>
                                        <div class="flex border-b w-fit">
                                            <input class="w-full h-8 text-xs md:text-sm rounded-md border-transparent focus:border-transparent focus:ring-0 uppercase" name="bank_amount" type="text" placeholder="Monto" autocomplete="off">
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-sm md:text-base">Subir Boleta de Pago</h3>
                                            <div class="h-24 rounded-lg cursor-pointer
                                                border-2 border-dotted border-gray-300 p-0.5 text-gray-400">
                                                <div class="border-2 border-dotted h-full border-gray-300
                                                    rounded-lg">
                                                    <label for="home_cg_transfer_file" class="
                                                        w-full h-full items-center flex">
                                                        <svg class="w-6 h-6 mx-auto text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 20 20">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 19H1.933A.97.97 0 0 1 1 18V5.828a2 2 0 0 1 .586-1.414l2.828-2.828A2 2 0 0 1 5.828 1h8.239A.97.97 0 0 1 15 2v4M6 1v4a1 1 0 0 1-1 1H1m11 8h4m-2 2v-4m5 2a5 5 0 1 1-10 0 5 5 0 0 1 10 0Z"/>
                                                        </svg>
                                                    </label>
                                                    <input id="home_cg_transfer_file"  name="bank_file" type="file" class="hidden">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Pago en agencia --}}
                                <div id="home_cg_payment_agency" class="w-11/12 hidden
                                    rounded-lg  bg-white mx-auto">fixed miami-china quoter style-total
                                    {{-- <img class="w-56 mx-auto" src="{{asset('images/baloo/baloo_pago_en_agencia.png')}}" alt=""> --}}
                                </div>

                                {{-- Pago Contra Entrega --}}
                                <div id="home_cg_payment_cod" class="w-11/12 hidden
                                    rounded-lg bg-white mx-auto">
                                    {{-- <img class="w-56 mx-auto" src="{{asset('images/payment/pago_contra_entrega.png')}}" alt=""> --}}
                                </div>
                            </div>

                            {{-- Resumen Orden --}}
                            <div class="border p-1 lg:p-2 lg:w-1/3">
                                {{-- Facturacion --}}
                                <div class="mx-auto py-1  space-y-1 grid px-1">
                                    <h3 class="text-base">Datos de Facturación: </h3>
                                    <input class="rounded-lg h-10 border-gray-200 "
                                        name="bill_name"  type="text" placeholder="Nombre">
                                    <input class="rounded-lg h-10 border-gray-200"
                                        name="bill_address" type="text" placeholder="Dirección">
                                    <input class="rounded-lg h-10 border-gray-200"
                                        name="bill_nit" type="text" placeholder="NIT/DPI">
                                    <div class="flex items-center space-x-1">
                                        <input class="rounded-md" name="bill_cf" type="checkbox">
                                        <span class="text-sm font-bold">CF</span>
                                    </div>
                                </div>

                                <hr class="h-px my-5 bg-gray-300 border-0">

                                <h3 class="">Resumen de Orden</h3>
                                <h3 class="home_cg_osc_total">Total:$0.00</h3>
                                <button id="home_cg_btn_osc" type="button" class="wait flex justify-center bg-blue-600 rounded-lg
                                    py-3 w-11/12 text-white hover:bg-blue-900 my-3
                                    mx-auto text-sm font-bold">
                                    Pagar <span class="home_cg_osc_total mx-1">$0.00</span></button>
                            </div>
                        </div>
                    </form>
                </div>

                {{-- Success --}}
                <div id="home_cg_success" class="home_quoters_base hidden bg-white border-2 rounded-xl
                    w-11/12 mx-auto p-5">
                    <div class="bg-white w-11/12 mx-auto rounded-xl p-10 font-bold text-center">
                        <h3 id="home_cg_order_success" class="text-lg"></h3>
                        <h3 class="text-lg mt-5">Revisa tus ordenes</h3>
                        <a href="/user-orders">
                            <button class="text-white bg-blue-600
                            px-3 py-2 rounded-lg my-2">Mis Ordenes</button>
                        </a>
                    </div>
                </div>

            </div>

            {{--Costo envio Q.25 --}}
        </div>

        {{-- Banner Horizontal --}}
        <div class="mt-16  px-5 w-full mx-auto  text-center items-center">
            <div class="w-full  rounded-xl">
                <img class="rounded-xl w-full" src="{{asset('images/home/horizontal-1.jpg')}}" alt="">
            </div>
        </div>

        {{-- Rate Us --}}
        @auth
            <div class="lg:p-10">
                <h3 class="font-bold text-center text-xl sm:text-4xl lg:text-6xl text-blue-950 px-10  py-5 lg:px-32">Comparte tu opinión con nosotros</h3>
                <form id="home_rate_us_form" action="/rate-us" method="POST" autocomplete="off" class="text-center">
                    @csrf
                    <div class="flex mx-auto w-fit mb-5">
                        <div>
                            <label for="rate_1">
                                <svg class="star w-10 h-10 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                </svg>
                            </label>
                            <input id="rate_1" name="rate_1" type="checkbox" hidden>
                        </div>
                        <div>
                            <label for="rate_2">
                                <svg class="star w-10 h-10 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                </svg>
                            </label>
                            <input id="rate_2" name="rate_2" type="checkbox" hidden>
                        </div>
                        <div>
                            <label for="rate_3">
                                <svg class="star w-10 h-10 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                </svg>
                            </label>
                            <input id="rate_3" name="rate_3" type="checkbox" hidden>
                        </div>
                        <div>
                            <label for="rate_4">
                                <svg class="star w-10 h-10 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                </svg>
                            </label>
                            <input id="rate_4" name="rate_4" type="checkbox" hidden>
                        </div>
                        <div>
                            <label for="rate_5">
                                <svg class="star w-10 h-10 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                </svg>
                            </label>
                            <input id="rate_5" name="rate_5" type="checkbox" hidden>
                        </div>
                    </div>
                    <textarea name="commentary"  cols="50" rows="10" class="rounded-lg w-10/12 sm:w-auto"  maxlength="498"></textarea>
                    <br>
                    <button type="submit" class="rounded-lg text-white bg-blue-600 px-3 py-2">Enviar</button>
                </form>
            </div>
        @endauth
        {{-- Imagen 2--}}
        <div class="flex relative mt-5 mb-10 p-5">
            <img class="rounded-xl " src="{{asset('images/home/home-2.jpg')}}" alt="">
        </div>

        {{-- Mas Populares --}}
        {{-- <div class="w-11/12 mx-auto p-5 flex border-2 border-gray-300 overflow-x-auto">
            <h3 class="w-fit mx-auto font-bold text-xl">Mas Populares</h3>
            <div class="flex mx-auto ">
                <div class=" relative w-44 h-fit mx-1 mt-5 rounded-md border-2 shadow-2xl text-center">
                    <img  class=" " src="../images/test.jpeg" alt="">
                    <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                    <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                    <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                    <div class="flex px-2">
                        <div class="ml-auto w-fit text-green-700 font-bold">
                            <span class="">-20%</span>
                        </div>
                        <div class="ml-auto w-fit font-bold">
                            <span style="text-decoration:line-through;">Q9,500.00</span>
                        </div>
                    </div>
                    <div class="flex font-bold">
                        <div class="w-fit ml-2  items-center grid">
                            <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                              </svg>
                        </div>
                        <div class="w-fit ml-auto mr-2 text-center py-2.5">
                            <span class="">Q5,700.00</span>
                        </div>
                    </div>
                </div>
                <div class=" relative w-44 h-fit mx-1 mt-5 rounded-md border-2 shadow-2xl text-center">
                    <img  class=" " src="../images/test.jpeg" alt="">
                    <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                    <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                    <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                    <div class="flex px-2">
                        <div class="ml-auto w-fit text-green-700 font-bold">
                            <span class="">-20%</span>
                        </div>
                        <div class="ml-auto w-fit font-bold">
                            <span style="text-decoration:line-through;">Q9,500.00</span>
                        </div>
                    </div>
                    <div class="flex font-bold">
                        <div class="w-fit ml-2  items-center grid">
                            <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                              </svg>
                        </div>
                        <div class="w-fit ml-auto mr-2 text-center py-2.5">
                            <span class="">Q5,700.00</span>
                        </div>
                    </div>
                </div>
                <div class=" relative w-44 h-fit mx-1 mt-5 rounded-md border-2 shadow-2xl text-center">
                    <img  class=" " src="../images/test.jpeg" alt="">
                    <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                    <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                    <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                    <div class="flex px-2">
                        <div class="ml-auto w-fit text-green-700 font-bold">
                            <span class="">-20%</span>
                        </div>
                        <div class="ml-auto w-fit font-bold">
                            <span style="text-decoration:line-through;">Q9,500.00</span>
                        </div>
                    </div>
                    <div class="flex font-bold">
                        <div class="w-fit ml-2  items-center grid">
                            <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                              </svg>
                        </div>
                        <div class="w-fit ml-auto mr-2 text-center py-2.5">
                            <span class="">Q5,700.00</span>
                        </div>
                    </div>
                </div>
                <div class=" relative w-44 h-fit mx-1 mt-5 rounded-md border-2 shadow-2xl text-center">
                    <img  class=" " src="../images/test.jpeg" alt="">
                    <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                    <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                    <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                    <div class="flex px-2">
                        <div class="ml-auto w-fit text-green-700 font-bold">
                            <span class="">-20%</span>
                        </div>
                        <div class="ml-auto w-fit font-bold">
                            <span style="text-decoration:line-through;">Q9,500.00</span>
                        </div>
                    </div>
                    <div class="flex font-bold">
                        <div class="w-fit ml-2  items-center grid">
                            <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                              </svg>
                        </div>
                        <div class="w-fit ml-auto mr-2 text-center py-2.5">
                            <span class="">Q5,700.00</span>
                        </div>
                    </div>
                </div>
                <div class=" relative w-44 h-fit mx-1 mt-5 rounded-md border-2 shadow-2xl text-center">
                    <img  class=" " src="../images/test.jpeg" alt="">
                    <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                    <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                    <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                    <div class="flex px-2">
                        <div class="ml-auto w-fit text-green-700 font-bold">
                            <span class="">-20%</span>
                        </div>
                        <div class="ml-auto w-fit font-bold">
                            <span style="text-decoration:line-through;">Q9,500.00</span>
                        </div>
                    </div>
                    <div class="flex font-bold">
                        <div class="w-fit ml-2  items-center grid">
                            <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                              </svg>
                        </div>
                        <div class="w-fit ml-auto mr-2 text-center py-2.5">
                            <span class="">Q5,700.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- Categorias --}}
        {{-- <div class="w-full p-5 flex">
            <div class="flex mx-auto">
                <div class="w-36 h-fit mx-10 rounded-lg shadow-2xl border-gray-300 border-2 text-center ">
                    <img class="rounded-lg h-28 mx-auto" src="../images/brands/amazon.jpg" alt="">
                    <span class="font-bold "></span>
                </div>
                <div class="w-36 h-fit mx-10 rounded-lg shadow-2xl border-gray-300 border-2 text-center ">
                    <img class="rounded-lg h-28 mx-auto" src="../images/brands/ebay.jpg" alt="">
                    <span class="font-bold "></span>
                </div>
                <div class="w-36 h-fit mx-10 rounded-lg shadow-2xl border-gray-300 border-2 text-center ">
                    <img class="rounded-lg  h-28 mx-auto" src="../images/brands/alibaba.jpg" alt="">
                    <span class="font-bold "></span>
                </div>
                <div class="w-36 h-fit mx-10 rounded-lg shadow-2xl border-gray-300 border-2 text-center ">
                    <img class="rounded-lg h-28 mx-auto" src="../images/brands/aliexpress.jpg" alt="">
                    <span class="font-bold "></span>
                </div>

            </div>
        </div> --}}


        {{-- Productos --}}
        {{-- <div class="w-full mx-auto">
            <div class="w-fit mx-auto flex ">
                    <div class="ml-2.5 mr-16 w-40">
                        <img class="rounded-xl" src="../images/home/lateral-1.jpg" alt="">
                    </div>
                    <div class="mx-1">
                        <div class="border-2 relative w-44 h-fit mx-1 mt-5 rounded-md  shadow-2xl text-center">
                            <img  class=" " src="../images/test.jpeg" alt="">
                            <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                            <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                            <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                            <div class="flex px-2">
                                <div class="ml-auto w-fit text-green-700 font-bold">
                                    <span class="">-20%</span>
                                </div>
                                <div class="ml-auto w-fit font-bold">
                                    <span style="text-decoration:line-through;">Q9,500.00</span>
                                </div>
                            </div>
                            <div class="flex font-bold">
                                <div class="w-fit ml-2  items-center grid">
                                    <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                                      </svg>
                                </div>
                                <div class="w-fit ml-auto mr-2 text-center py-2.5">
                                    <span class="">Q5,700.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="border-2 relative w-44 h-fit mx-1 mt-5 rounded-md  shadow-2xl text-center">
                            <img  class=" " src="../images/test.jpeg" alt="">
                            <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                            <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                            <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                            <div class="flex px-2">
                                <div class="ml-auto w-fit text-green-700 font-bold">
                                    <span class="">-20%</span>
                                </div>
                                <div class="ml-auto w-fit font-bold">
                                    <span style="text-decoration:line-through;">Q9,500.00</span>
                                </div>
                            </div>
                            <div class="flex font-bold">
                                <div class="w-fit ml-2  items-center grid">
                                    <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                                      </svg>
                                </div>
                                <div class="w-fit ml-auto mr-2 text-center py-2.5">
                                    <span class="">Q5,700.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-1">
                        <div class="border-2 relative w-44 h-fit mx-1 mt-5 rounded-md  shadow-2xl text-center">
                            <img  class=" " src="../images/test.jpeg" alt="">
                            <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                            <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                            <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                            <div class="flex px-2">
                                <div class="ml-auto w-fit text-green-700 font-bold">
                                    <span class="">-20%</span>
                                </div>
                                <div class="ml-auto w-fit font-bold">
                                    <span style="text-decoration:line-through;">Q9,500.00</span>
                                </div>
                            </div>
                            <div class="flex font-bold">
                                <div class="w-fit ml-2  items-center grid">
                                    <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                                      </svg>
                                </div>
                                <div class="w-fit ml-auto mr-2 text-center py-2.5">
                                    <span class="">Q5,700.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="border-2 relative w-44 h-fit mx-1 mt-5 rounded-md  shadow-2xl text-center">
                            <img  class=" " src="../images/test.jpeg" alt="">
                            <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                            <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                            <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                            <div class="flex px-2">
                                <div class="ml-auto w-fit text-green-700 font-bold">
                                    <span class="">-20%</span>
                                </div>
                                <div class="ml-auto w-fit font-bold">
                                    <span style="text-decoration:line-through;">Q9,500.00</span>
                                </div>
                            </div>
                            <div class="flex font-bold">
                                <div class="w-fit ml-2  items-center grid">
                                    <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                                      </svg>
                                </div>
                                <div class="w-fit ml-auto mr-2 text-center py-2.5">
                                    <span class="">Q5,700.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-1">
                        <div class="border-2 relative w-44 h-fit mx-1 mt-5 rounded-md  shadow-2xl text-center">
                            <img  class=" " src="../images/test.jpeg" alt="">
                            <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                            <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                            <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                            <div class="flex px-2">
                                <div class="ml-auto w-fit text-green-700 font-bold">
                                    <span class="">-20%</span>
                                </div>
                                <div class="ml-auto w-fit font-bold">
                                    <span style="text-decoration:line-through;">Q9,500.00</span>
                                </div>
                            </div>
                            <div class="flex font-bold">
                                <div class="w-fit ml-2  items-center grid">
                                    <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                                      </svg>
                                </div>
                                <div class="w-fit ml-auto mr-2 text-center py-2.5">
                                    <span class="">Q5,700.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="border-2 relative w-44 h-fit mx-1 mt-5 rounded-md  shadow-2xl text-center">
                            <img  class=" " src="../images/test.jpeg" alt="">
                            <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                            <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                            <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                            <div class="flex px-2">
                                <div class="ml-auto w-fit text-green-700 font-bold">
                                    <span class="">-20%</span>
                                </div>
                                <div class="ml-auto w-fit font-bold">
                                    <span style="text-decoration:line-through;">Q9,500.00</span>
                                </div>
                            </div>
                            <div class="flex font-bold">
                                <div class="w-fit ml-2  items-center grid">
                                    <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                                      </svg>
                                </div>
                                <div class="w-fit ml-auto mr-2 text-center py-2.5">
                                    <span class="">Q5,700.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-1">
                        <div class="border-2 relative w-44 h-fit mx-1 mt-5 rounded-md  shadow-2xl text-center">
                            <img  class=" " src="../images/test.jpeg" alt="">
                            <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                            <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                            <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                            <div class="flex px-2">
                                <div class="ml-auto w-fit text-green-700 font-bold">
                                    <span class="">-20%</span>
                                </div>
                                <div class="ml-auto w-fit font-bold">
                                    <span style="text-decoration:line-through;">Q9,500.00</span>
                                </div>
                            </div>
                            <div class="flex font-bold">
                                <div class="w-fit ml-2  items-center grid">
                                    <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                                      </svg>
                                </div>
                                <div class="w-fit ml-auto mr-2 text-center py-2.5">
                                    <span class="">Q5,700.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="border-2 relative w-44 h-fit mx-1 mt-5 rounded-md  shadow-2xl text-center">
                            <img  class=" " src="../images/test.jpeg" alt="">
                            <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                            <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                            <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                            <div class="flex px-2">
                                <div class="ml-auto w-fit text-green-700 font-bold">
                                    <span class="">-20%</span>
                                </div>
                                <div class="ml-auto w-fit font-bold">
                                    <span style="text-decoration:line-through;">Q9,500.00</span>
                                </div>
                            </div>
                            <div class="flex font-bold">
                                <div class="w-fit ml-2  items-center grid">
                                    <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                                      </svg>
                                </div>
                                <div class="w-fit ml-auto mr-2 text-center py-2.5">
                                    <span class="">Q5,700.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-auto ml-16 mr-2 w-40">
                        <img class="rounded-xl" src="../images/home/lateral-2.jpg" alt="">
                    </div>
            </div>
        </div> --}}

        {{-- Image Store--}}
        {{-- <div class="flex relative p-5">
            <div class="w-11/12 mx-auto ">
                <img width="100%" class="rounded-xl" src="../images/home/home-3.jpg" alt="">
            </div>
        </div> --}}

        {{-- Mejores Ofertas--}}
        {{-- <div class="w-11/12 mx-auto p-5 flex border-2 border-gray-300 ">
            <h3 class="w-fit mx-auto font-bold text-xl">Mejores Ofertas</h3>
            <div class="flex mx-auto ">
                <div class=" relative w-44 h-fit mx-1 mt-5 rounded-md border-2 shadow-2xl text-center">
                    <img  class=" " src="../images/test.jpeg" alt="">
                    <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                    <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                    <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                    <div class="flex px-2">
                        <div class="ml-auto w-fit text-green-700 font-bold">
                            <span class="">-20%</span>
                        </div>
                        <div class="ml-auto w-fit font-bold">
                            <span style="text-decoration:line-through;">Q9,500.00</span>
                        </div>
                    </div>
                    <div class="flex font-bold">
                        <div class="w-fit ml-2  items-center grid">
                            <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                              </svg>
                        </div>
                        <div class="w-fit ml-auto mr-2 text-center py-2.5">
                            <span class="">Q5,700.00</span>
                        </div>
                    </div>
                </div>
                <div class=" relative w-44 h-fit mx-1 mt-5 rounded-md border-2 shadow-2xl text-center">
                    <img  class=" " src="../images/test.jpeg" alt="">
                    <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                    <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                    <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                    <div class="flex px-2">
                        <div class="ml-auto w-fit text-green-700 font-bold">
                            <span class="">-20%</span>
                        </div>
                        <div class="ml-auto w-fit font-bold">
                            <span style="text-decoration:line-through;">Q9,500.00</span>
                        </div>
                    </div>
                    <div class="flex font-bold">
                        <div class="w-fit ml-2  items-center grid">
                            <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                              </svg>
                        </div>
                        <div class="w-fit ml-auto mr-2 text-center py-2.5">
                            <span class="">Q5,700.00</span>
                        </div>
                    </div>
                </div>
                <div class=" relative w-44 h-fit mx-1 mt-5 rounded-md border-2 shadow-2xl text-center">
                    <img  class=" " src="../images/test.jpeg" alt="">
                    <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                    <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                    <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                    <div class="flex px-2">
                        <div class="ml-auto w-fit text-green-700 font-bold">
                            <span class="">-20%</span>
                        </div>
                        <div class="ml-auto w-fit font-bold">
                            <span style="text-decoration:line-through;">Q9,500.00</span>
                        </div>
                    </div>
                    <div class="flex font-bold">
                        <div class="w-fit ml-2  items-center grid">
                            <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                              </svg>
                        </div>
                        <div class="w-fit ml-auto mr-2 text-center py-2.5">
                            <span class="">Q5,700.00</span>
                        </div>
                    </div>
                </div>
                <div class=" relative w-44 h-fit mx-1 mt-5 rounded-md border-2 shadow-2xl text-center">
                    <img  class=" " src="../images/test.jpeg" alt="">
                    <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                    <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                    <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                    <div class="flex px-2">
                        <div class="ml-auto w-fit text-green-700 font-bold">
                            <span class="">-20%</span>
                        </div>
                        <div class="ml-auto w-fit font-bold">
                            <span style="text-decoration:line-through;">Q9,500.00</span>
                        </div>
                    </div>
                    <div class="flex font-bold">
                        <div class="w-fit ml-2  items-center grid">
                            <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                              </svg>
                        </div>
                        <div class="w-fit ml-auto mr-2 text-center py-2.5">
                            <span class="">Q5,700.00</span>
                        </div>
                    </div>
                </div>
                <div class=" relative w-44 h-fit mx-1 mt-5 rounded-md border-2 shadow-2xl text-center">
                    <img  class=" " src="../images/test.jpeg" alt="">
                    <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                    <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                    <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                    <div class="flex px-2">
                        <div class="ml-auto w-fit text-green-700 font-bold">
                            <span class="">-20%</span>
                        </div>
                        <div class="ml-auto w-fit font-bold">
                            <span style="text-decoration:line-through;">Q9,500.00</span>
                        </div>
                    </div>
                    <div class="flex font-bold">
                        <div class="w-fit ml-2  items-center grid">
                            <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                              </svg>
                        </div>
                        <div class="w-fit ml-auto mr-2 text-center py-2.5">
                            <span class="">Q5,700.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- Black friday --}}
        {{-- <div class="flex relative p-5">
            <div class="w-1/2 p-5">
                <img class="rounded-xl" src="../images/black.jpg" alt="">
            </div>
            <div class="w-1/2 p-5">
                <img class="rounded-xl" src="../images/black.jpg" alt="">
            </div>
        </div> --}}

        {{-- Categorias --}}
        {{-- <div class="w-full p-5 flex">
            <div class="flex mx-auto">
                <div class="w-36 h-fit mx-10 rounded-lg shadow-2xl border-gray-300 border-2 text-center ">
                    <img class="rounded-lg" src="../images/test.jpeg" alt="">
                    <span class="font-bold ">Electronicos</span>
                </div>
                <div class="w-36 h-fit mx-10 rounded-lg shadow-2xl border-gray-300 border-2 text-center ">
                    <img class="rounded-lg" src="../images/test.jpeg" alt="">
                    <span class="font-bold ">Electronicos</span>
                </div>
                <div class="w-36 h-fit mx-10 rounded-lg shadow-2xl border-gray-300 border-2 text-center ">
                    <img class="rounded-lg" src="../images/test.jpeg" alt="">
                    <span class="font-bold ">Electronicos</span>
                </div>
                <div class="w-36 h-fit mx-10 rounded-lg shadow-2xl border-gray-300 border-2 text-center ">
                    <img class="rounded-lg" src="../images/test.jpeg" alt="">
                    <span class="font-bold ">Electronicos</span>
                </div>

            </div>
        </div> --}}

        {{-- Liquidación --}}
        {{-- <div class="w-11/12 mx-auto p-5 flex border-2 border-gray-300 ">
            <h3 class="w-fit mx-auto font-bold text-xl">Liquidación</h3>
            <div class="flex mx-auto ">
                <div class=" relative w-44 h-fit mx-1 mt-5 rounded-md border-2 shadow-2xl text-center">
                    <img  class=" " src="../images/test.jpeg" alt="">
                    <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                    <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                    <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                    <div class="flex px-2">
                        <div class="ml-auto w-fit text-green-700 font-bold">
                            <span class="">-20%</span>
                        </div>
                        <div class="ml-auto w-fit font-bold">
                            <span style="text-decoration:line-through;">Q9,500.00</span>
                        </div>
                    </div>
                    <div class="flex font-bold">
                        <div class="w-fit ml-2  items-center grid">
                            <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                              </svg>
                        </div>
                        <div class="w-fit ml-auto mr-2 text-center py-2.5">
                            <span class="">Q5,700.00</span>
                        </div>
                    </div>
                </div>
                <div class=" relative w-44 h-fit mx-1 mt-5 rounded-md border-2 shadow-2xl text-center">
                    <img  class=" " src="../images/test.jpeg" alt="">
                    <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                    <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                    <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                    <div class="flex px-2">
                        <div class="ml-auto w-fit text-green-700 font-bold">
                            <span class="">-20%</span>
                        </div>
                        <div class="ml-auto w-fit font-bold">
                            <span style="text-decoration:line-through;">Q9,500.00</span>
                        </div>
                    </div>
                    <div class="flex font-bold">
                        <div class="w-fit ml-2  items-center grid">
                            <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                              </svg>
                        </div>
                        <div class="w-fit ml-auto mr-2 text-center py-2.5">
                            <span class="">Q5,700.00</span>
                        </div>
                    </div>
                </div>
                <div class=" relative w-44 h-fit mx-1 mt-5 rounded-md border-2 shadow-2xl text-center">
                    <img  class=" " src="../images/test.jpeg" alt="">
                    <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                    <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                    <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                    <div class="flex px-2">
                        <div class="ml-auto w-fit text-green-700 font-bold">
                            <span class="">-20%</span>
                        </div>
                        <div class="ml-auto w-fit font-bold">
                            <span style="text-decoration:line-through;">Q9,500.00</span>
                        </div>
                    </div>
                    <div class="flex font-bold">
                        <div class="w-fit ml-2  items-center grid">
                            <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                              </svg>
                        </div>
                        <div class="w-fit ml-auto mr-2 text-center py-2.5">
                            <span class="">Q5,700.00</span>
                        </div>
                    </div>
                </div>
                <div class=" relative w-44 h-fit mx-1 mt-5 rounded-md border-2 shadow-2xl text-center">
                    <img  class=" " src="../images/test.jpeg" alt="">
                    <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                    <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                    <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                    <div class="flex px-2">
                        <div class="ml-auto w-fit text-green-700 font-bold">
                            <span class="">-20%</span>
                        </div>
                        <div class="ml-auto w-fit font-bold">
                            <span style="text-decoration:line-through;">Q9,500.00</span>
                        </div>
                    </div>
                    <div class="flex font-bold">
                        <div class="w-fit ml-2  items-center grid">
                            <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                              </svg>
                        </div>
                        <div class="w-fit ml-auto mr-2 text-center py-2.5">
                            <span class="">Q5,700.00</span>
                        </div>
                    </div>
                </div>
                <div class=" relative w-44 h-fit mx-1 mt-5 rounded-md border-2 shadow-2xl text-center">
                    <img  class=" " src="../images/test.jpeg" alt="">
                    <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                    <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                    <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                    <div class="flex px-2">
                        <div class="ml-auto w-fit text-green-700 font-bold">
                            <span class="">-20%</span>
                        </div>
                        <div class="ml-auto w-fit font-bold">
                            <span style="text-decoration:line-through;">Q9,500.00</span>
                        </div>
                    </div>
                    <div class="flex font-bold">
                        <div class="w-fit ml-2  items-center grid">
                            <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                              </svg>
                        </div>
                        <div class="w-fit ml-auto mr-2 text-center py-2.5">
                            <span class="">Q5,700.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- Brands --}}
        {{-- <div class="w-11/12 mx-auto p-5 mt-10 mb-10 flex border-2 border-gray-300 ">
            <div class="flex mx-auto ">
                <div class="w-44 h-44 mx-1 rounded-md  border-gray-300 border-2 text-center">
                    <img  class=" " src="../images/reward.avif" alt="">
                </div>
            </div>
            <div class="flex mx-auto ">
                <div class="w-44 h-44 mx-1 rounded-md  border-gray-300 border-2 text-center">
                    <img  class=" " src="../images/asus.jpg" alt="">
                </div>
            </div>
            <div class="flex mx-auto ">
                <div class="w-44 h-44 mx-1 rounded-md  border-gray-300 border-2 text-center">
                    <img  class=" " src="../images/adidas.jpg" alt="">
                </div>
            </div>
            <div class="flex mx-auto ">
                <div class="w-44 h-44 mx-1 rounded-md  border-gray-300 border-2 text-center">
                    <img  class=" " src="../images/apple.webp" alt="">
                </div>
            </div>
        </div> --}}

    </section>
@endsection

@push('child-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>
    <script src="../js/quoter.js"></script>
@endpush
