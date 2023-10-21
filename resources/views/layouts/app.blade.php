<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  style="width:auto; padding: 0; box-sizing:border-box; height:auto; overflow-y:auto; overflow-x:hidden; margin:0;">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name')}}</title>
        <link rel="icon" type="image/png" href="../images/logo.png">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">

        {{-- PWA --}}
        @laravelPWA
    </head>

    <body class="global-font bg-blue-50">
        {{-- NavBar --}}
        <nav class="bg-blue-100 p-2">
            <div class="flex">
                <a href="/">
                    <img class="block h-14 md:h-12 xl:h-10 min-h-10 min-w-10" src="{{asset('images/main/logo.png')}}"/>
                </a>

                {{-- Tabs --}}
                <div class="hidden mx-auto sm:flex">
                    <ul class="flex font-bold text-blue-950/90 items-center">

                        @role('super-admin|admin|operator|accounting|storer|deliver')
                        <li>
                            <a href="/admin-index-courier" class="block py-2 ml-4">{{Auth::user()->role}}</a>
                        </li>
                        @endrole
                        {{-- <li>
                            <a href="/store-index" class="block py-2 ml-4">Tienda</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 ml-4">Pestaña 3</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 ml-4">Pestaña 4</a>
                        </li> --}}

                    </ul>
                </div>

                {{-- Button Responsive Navbar --}}
                <div class="ml-auto items-center flex md:hidden">
                    {{-- <h3 class="items-center">
                        <svg class="w-6 h-6 text-blue-950" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                        </svg>
                    </h3> --}}
                    @if (Route::has('login'))
                            <a class="text-blue-950 font-bold mx-1 " href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>
                    @endif

                    @if (Route::has('register'))
                        <a class="text-blue-950 font-bold mx-1" href="{{ route('register') }}">
                            {{ __('Register') }}
                        </a>
                    @endif
                </div>

                @guest
                    <div class="items-center hidden md:flex ml-auto" >
                        @if (Route::has('login'))
                            <a class="text-blue-950 font-bold mx-1 " href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>
                        @endif

                        @if (Route::has('register'))
                            <a class="text-blue-950 font-bold mx-1" href="{{ route('register') }}">
                                {{ __('Register') }}
                            </a>
                        @endif
                    </div>
                @else
                    <div class="hidden mr-5 items-center md:flex ml-auto">
                        <a href="/profile">
                            <div class="flex w-fit space-x-1 hover:bg-blue-200 rounded-lg cursor-pointer">
                                    <img class="w-11 h-11 rounded-xl" src="{{asset('images/user/profile.jpg')}}" alt="">
                                <div>
                                    <div class="text-xs text-black rounded-lg h-fit ">
                                        <span class=" ">{{ Auth::user()->name}} {{ Auth::user()->last_name }}</span>
                                    </div>
                                    <div class="text-xs bg-blue-800 text-white rounded-md text-center h-fit p-1">
                                        <h3 class=" ">{{Auth::user()->role}}</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                        {{-- <svg class="w-6 h-6 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1"/>
                        </svg> --}}
                        {{-- <a class="text-blue-950 font-bold items-center ml-5 flex" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                        </a> --}}
                    </div>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
            </div>
        </nav>

        {{-- Info Ban --}}
        <div id="home_install_app_div" class="w-full text-white text-center text-sm items-center
        bg-blue-950 h-10 py-2.5 md:text-base md:py-2 flex" hidden>
            <span class="ml-auto mr-1">Instalar La App</span>
            <button id="home_install_app_btn" class="px-3 py-2 rounded-lg text-white bg-blue-600
            text-xs mr-auto ml-1">Instalar</button>
        </div>

        {{-- Content --}}
        <main class="">
            @yield('content')
        </main>

        {{-- News --}}
        {{-- <div class="w-full text-white text-center text-sm items-center
        bg-blue-950 h-10 py-2.5 md:text-base md:py-2 sticky bottom-0 ">
        <marquee scrollamount="5">
            Jornada Visual La Proxima Semana
        </marquee>
        </div> --}}

        {{-- Footer --}}

        <footer class="space-y-5 lg:flex lg:space-y-0 bg-blue-950 p-10 text-gray-400 text-xs">
            <div class="grid grid-cols-1 gap-10 md:grid-cols-2 xl:flex xl:space-x-2 2xl:space-x-8">
                {{-- First --}}
                <div class="grid whitespace-nowrap h-fit space-y-1">
                    <a href="/our-history">Nuestra Historia</a>
                    <a href="/about-us">Acerca de nosotros</a>
                    {{-- <a href="/work-with-us">Bolsa de Empleo</a>
                    <a href="https://gruposgl.com/blog/">Blog</a>
                    <a href="/refund-form">Formulario de reintegro</a>
                    <a href="/claim-form">Formulario de reclamo</a>
                    <a href="/">Formulario solicitud de depositos en garantia</a> --}}
                </div>
                {{-- Second --}}
                {{-- <div class="grid whitespace-nowrap h-fit space-y-1">
                    <a href="/">Instrucciones de pagos</a>
                    <a href="/">Politicas de devoluciones y reintegros</a>
                    <a href="/">Noticias</a>
                    <a href="/">Preguntas frecuentes</a>
                    <a href="/">Conocimiento de fraudes</a>
                    <a href="/">Aviso legal</a>
                    <a href="/">Condiciones de uso</a>
                    <a href="/">Resolución de disputas</a>
                </div> --}}
                {{-- Third --}}
                {{-- <div class="grid whitespace-nowrap h-fit space-y-1">
                    <h3 class="text-white font-bold text-sm">Nuestras Divisiones</h3>
                    <a href="/">SGL Servicios Forwarding</a>
                    <a href="/">SGL Servicios Courier Internacional</a>
                    <a href="/">SGL Freight</a>
                    <a href="/">SGL Cadena de Suministros</a>
                    <a href="/">SGL eCommerce</a>
                    <a href="/">SGL Aduana y Tramites</a>
                    <a href="/">SGL Express</a>
                </div> --}}
                {{-- Fourth --}}
                {{-- <div class="grid whitespace-nowrap h-fit space-y-1">
                    <h3 class="text-white font-bold text-sm">Nuestros Socios</h3>
                    <a href="/">Navieras</a>
                    <a href="/">Clientes</a>
                    <a href="/">Transportes Terrestres</a>
                    <a href="/">Aerolineas</a>
                    <a href="/">Gremiales</a>
                    <a href="/">Agentes aduaneros</a>
                </div> --}}
            </div>

            {{-- Contact --}}
            <div class="space-y-5 ml-auto">
                <div class="text-base text-justify space-y-4">
                    <div class="flex space-x-2">
                        <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.35,1.63h0a6.8,6.8,0,0,1,1.09.1,5.59,5.59,0,0,1,4.49,6,4.32,4.32,0,0,1-.42,1.57c-1.41,2.56-2.83,5.06-4.33,7.7l-.85,1.51-1-1.67-1.16-2C7.27,13.24,6.31,11.61,5.41,10a5.33,5.33,0,0,1-.6-4.11,5.63,5.63,0,0,1,5.54-4.24m0-.71A6.32,6.32,0,0,0,4.12,5.7a6.09,6.09,0,0,0,.66,4.63c1.29,2.3,2.64,4.57,4,6.85.5.87,1,1.74,1.6,2.74,2-3.5,3.91-6.88,5.79-10.3a4.86,4.86,0,0,0,.51-1.85A6.31,6.31,0,0,0,11.56,1a8.34,8.34,0,0,0-1.21-.1Z"/></g><path d="M10.29,4.66A2.53,2.53,0,1,1,7.77,7.18a2.52,2.52,0,0,1,2.52-2.52m0-.71a3.24,3.24,0,1,0,3.24,3.23A3.23,3.23,0,0,0,10.29,4Z"/>
                        </svg>
                        <h3 class="text-xs lg:text-sm">5ta. Avenida 15-45 Zona 10 Edificio Centro Empresarial</h3>
                    </div>
                    <div class="flex space-x-2">
                        <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M1.22,5.54A4.82,4.82,0,0,1,4.38.85a1.42,1.42,0,0,1,2,.79A26.9,26.9,0,0,1,7.38,5a1.09,1.09,0,0,1-.65,1.26c-.52.27-1.07.48-1.61.71a.55.55,0,0,0-.37.8A19.53,19.53,0,0,0,9.5,15.11a.59.59,0,0,0,1,0c.37-.34.68-.73,1-1.07a1.2,1.2,0,0,1,1.6-.21,9.33,9.33,0,0,1,2.66,2.22,1.49,1.49,0,0,1-.06,2.2,4.6,4.6,0,0,1-5.28,1,13.54,13.54,0,0,1-5.07-3.89A17.12,17.12,0,0,1,1.38,7C1.3,6.5,1.27,6,1.22,5.54Zm17.93,5.33a4.34,4.34,0,0,1,0,.51.86.86,0,0,1-.9.81.81.81,0,0,1-.76-.89,9.08,9.08,0,0,0-.89-4.17A8.87,8.87,0,0,0,11.16,2.4a.9.9,0,0,1-.72-.7A.82.82,0,0,1,11.55.77a10.2,10.2,0,0,1,4,2.2,10.6,10.6,0,0,1,3.62,7.9Zm-2.95-.08c0,.16,0,.31,0,.47a.83.83,0,0,1-.83.82.85.85,0,0,1-.84-.82,10.15,10.15,0,0,0-.17-1.66,6,6,0,0,0-4-4.38,1.25,1.25,0,0,1-.7-.59,1.11,1.11,0,0,1,.17-.83.76.76,0,0,1,.93-.2,7.59,7.59,0,0,1,3.91,2.76,7.53,7.53,0,0,1,1.52,4.43Zm-2.91.2a1.75,1.75,0,0,1,0,.32.78.78,0,0,1-.88.64.76.76,0,0,1-.74-.79A3.19,3.19,0,0,0,9.35,8,.8.8,0,0,1,8.82,6.9a.83.83,0,0,1,1.09-.5A4.83,4.83,0,0,1,13.29,11Z"/>
                        </svg>
                        <h3 class="text-xs lg:text-sm">+502 2379-0640</h3>
                    </div>
                    <div class="flex space-x-2">
                        <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.22,3.75H17.93l-1.2.7L15.85,5,10,8.36h0c-2.6-1.53-5.23-3.1-7.77-4.62M1.07,6.05l.3.18L4,7.78l1.07.64c1.34.8,2.73,1.62,4.09,2.46a1.57,1.57,0,0,0,.84.25,1.69,1.69,0,0,0,.87-.27l8.08-4.73v8.63c0,1-.28,1.27-1.26,1.27H2.11c-1,0-1-.72-1-1,0-2.4,0-4.8,0-7.21V6.05m1.1-3a1.55,1.55,0,0,0-1.49.63.41.41,0,0,0,.08.12q4.47,2.69,9,5.33a.35.35,0,0,0,.21.05A1,1,0,0,0,10.39,9c2.25-1.29,4.48-2.59,6.72-3.9l2.27-1.34C18.9,3.13,18.71,3,18,3H2.17ZM.39,4.78a1.38,1.38,0,0,0-.07.31c0,3.33,0,6.66,0,10a1.6,1.6,0,0,0,1.78,1.7H17.68c1.39,0,2-.62,2-2V5.35c0-.14,0-.28,0-.48L19,5.21q-4.29,2.49-8.56,5a1,1,0,0,1-.48.16.86.86,0,0,1-.45-.14C7.83,9.19,6.1,8.17,4.37,7.14l-4-2.36Z"/>
                        </svg>
                        <h3 class="text-xs lg:text-sm">customerservice@gruposgl.com</h3>
                    </div>
                </div>
                {{-- Social Media --}}
                <div class="flex mx-auto w-fit space-x-7 items-center">
                    <a class="bg-white p-1 rounded-lg" href="https://www.facebook.com/SGLINTERNACIONAL/" target="_blank">
                        <svg class="w-5 h-5 text-blue-950" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a class="bg-white p-1 rounded-lg" href="https://www.instagram.com/gruposgl1/"  target="_blank">
                        <svg class="w-5 h-5 text-blue-950" xmlns="http://www.w3.org/2000/svg"  fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                        </svg>
                    </a>
                    <a class="bg-white p-1 rounded-lg" href="https://www.youtube.com/channel/UCWhqCd3O0L41LLWddQr4EiA"  target="_blank">
                        <svg class="w-5 h-5 text-blue-950" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                            <path fill-rule="evenodd" d="M19.7 3.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.84c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.84A4.225 4.225 0 0 0 .3 3.038a30.148 30.148 0 0 0-.2 3.206v1.5c.01 1.071.076 2.142.2 3.206.094.712.363 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.15 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965c.124-1.064.19-2.135.2-3.206V6.243a30.672 30.672 0 0 0-.202-3.206ZM8.008 9.59V3.97l5.4 2.819-5.4 2.8Z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a class="bg-white p-1 rounded-lg" href="https://www.linkedin.com/company/10830100/admin/" target="_blank">
                        <svg class="w-5 h-5 text-blue-950" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 15">
                            <path fill-rule="evenodd" d="M7.979 5v1.586a3.5 3.5 0 0 1 3.082-1.574C14.3 5.012 15 7.03 15 9.655V15h-3v-4.738c0-1.13-.229-2.584-1.995-2.584-1.713 0-2.005 1.23-2.005 2.5V15H5.009V5h2.97ZM3 2.487a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" clip-rule="evenodd"/>
                            <path d="M3 5.012H0V15h3V5.012Z"/>
                        </svg>
                    </a>

                </div>
            </div>
        </footer>

        <div class="sticky bottom-0">
            <a href="https://wa.me/50232220185" target="_blank">
                <div class="relative">
                    <img class="absolute bottom-0 -top-36 right-0 w-12 h-12 sm:-top-32 sm:w-16 sm:h-16" src="{{asset('images/icons/whatsapp.png')}}"/>
                </div>
            </a>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/jquery.min.js') }}" ></script>
        <script src="{{ asset('js/main.js') }}" ></script>
        <script src="{{ asset('js/pwa.js') }}" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
        @stack('child-scripts')
    </body>
</html>


