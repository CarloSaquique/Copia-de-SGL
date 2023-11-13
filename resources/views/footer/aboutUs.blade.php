@extends('layouts.app')

@section('content')
<section class="text-center  bg-white">
    <div class="py-20 opacity-80" style="background-image: url({{asset('images/footer/nuestra_historia.jpg')}}); background-size: cover;">
        <span class="font-bold text-5xl lg:text-6xl text-white">Acerca de Nosotros</span>
    </div>


    <div class="text-justify my-10 px-5 items-center space-y-2 lg:flex sm:px-16 md:px-32 lg:px-16 xl:px-52 2xl:px-[450px]">
        <div class="lg:w-1/2 space-y-5">
            <h3 class="font-bold text-xl">Holding</h3>
            <p class="text-base">
                Grupo SGL cuenta con un conglomerado de 8 empresas dedicadas a servicios
                logísticos que van desde el Supply Chain hasta el Recurso Humano y Financiero.
                Con presencia y desarrollo de negocios en los principales mercados del mundo.
            </p>
        </div>
        <div class="lg:w-1/2">
            {{-- <img class="rounded-lg mx-auto md:w-4/6 lg:w-5/6" src="{{asset('images/footer/nuestros_inicios.jpg')}}"> --}}
        </div>
    </div>


    <div class="bg-blue-100/50 py-10 text-justify my-10 px-5 items-center space-y-2 lg:flex sm:px-16 md:px-32 lg:px-16 xl:px-52 2xl:px-[450px]">
        <div class="lg:w-1/2">
            {{-- <img class="rounded-lg mx-auto md:w-4/6 lg:w-5/6" src="{{asset('images/footer/modalidad_de_trabajo.jpg')}}"> --}}
        </div>
        <div class="lg:w-1/2 space-y-5">
            <h3 class="font-bold text-xl">Internacional</h3>
            <p class="text-base">
                Con Hub´s logísticos desarrollados en China, La India, Brasil, USA, El Salvador, Honduras, Panama, Chile, R. Dominicana,
                España, Mexico, Alemania. Mantenemos un crecimiento y desarrollo sostenible y a la vanguardia, siendo la empresa con capital
                100% guatemalteco liderando el desarrollo de plataformas de conexión propia y alcanzando acuerdos contractuales que garantizan
                la sinergia común entre los puntos de conexión establecidos.
            </p>
        </div>
    </div>


    <div class="text-justify my-10 px-5 items-center space-y-2 lg:flex sm:px-16 md:px-32 lg:px-16 xl:px-52 2xl:px-[450px]">
        <div class="lg:w-1/2 space-y-5">
            <h3 class="font-bold text-xl">Centro De Operaciones</h3>
            <p class="text-base">
                Nuestro centro de operaciones corporativo ubicado en el corazón de la Ciudad de Guatemala marca una latente perseverancia
                de cambios e inyección de profesionalismo joven y revulsivo al mercado internacional logístico. Que ve cada dia a Grupo SGL
                como el especial operador de cambios significativos y tendencias de publicidad nunca antes vistas dentro del sector logístico.
            </p>
        </div>
        <div class="lg:w-1/2">
            {{-- <img class="rounded-lg mx-auto md:w-4/6 lg:w-5/6" src="{{asset('images/footer/nuestra_ideologia.jpg')}}"> --}}
        </div>
    </div>


    <div class="bg-blue-100/50 py-10 text-justify my-10 px-5 items-center space-y-2 lg:flex sm:px-16 md:px-32 lg:px-16 xl:px-52 2xl:px-[450px]">
        <div class="lg:w-1/2">
            {{-- <img class="rounded-lg mx-auto md:w-4/6 lg:w-5/6" src="{{asset('images/footer/modalidad_de_trabajo.jpg')}}"> --}}
        </div>
        <div class="lg:w-1/2 space-y-5">
            <h3 class="font-bold text-xl">Colaboradores</h3>
            <p class="text-base">
                Nuestra cartera de colaboradores en un 85% egresados de las mejores
                universidades de Ciudad de Guatemala con especializaciones en Comercio
                Internacional y Aduanas, Financistas, Mercadologos y Relacionistas Publicos
                marcan un hito en el cambio de mano de obra especializada en el sector y hacen
                de cada uno de nuestros servicios algo diferente.
            </p>
        </div>
    </div>



    <h3 class=" lg:block  font-bold text-2xl bg-blue-900 w-fit mx-auto
        rounded-lg p-2 text-white">Puntos de Enlace</h3>

    <h3>Haz click en las ubicaciones para ver detalle</h3>
    {{-- Map --}}
    <div class="hidden relative lg:block my-10 w-11/12">
        <div class="flex">
            <img id="about_us_img_map" class="w-10/12 rounded-xl " src="{{asset('images/footer/mapa.png')}}" alt="">

            <div id="about_us_map_info_china" class="map_info hidden p-5 rounded-xl h-fit border-2 bg-white text-justify">
                <div class="flex items-center mx-auto space-x-2">
                    <img width="50" src="{{asset('images/flags/china.png')}}" alt="">
                    <span>China</span>
                </div>
                <hr class="border-gray-300 my-3">
                <h3 class="font-bold">Email:</h3>
                <h3 class="whitespace-nowrap text-sm">china-customerservice@gruposgl.com</h3>
            </div>

            <div id="about_us_map_info_el_salvador" class="map_info hidden p-5 rounded-xl h-fit border-2  bg-white text-justify">
                <div class="flex items-center mx-auto space-x-2">
                    <img width="50" src="{{asset('images/flags/el_salvador.svg')}}" alt="">
                    <span>El Salvador</span>
                </div>
                <hr class="border-gray-300 my-3">
                <h3 class="font-bold">Email:</h3>
                <h3 class="whitespace-nowrap text-sm">elsalvador-customerservice@gruposgl.com</h3>
            </div>

            <div id="about_us_map_info_brasil" class="map_info hidden p-5 rounded-xl h-fit border-2  bg-white text-justify">
                <div class="flex items-center mx-auto space-x-2">
                    <img width="50" src="{{asset('images/flags/brasil.svg')}}" alt="">
                    <span>Brasil</span>
                </div>
                <hr class="border-gray-300 my-3">
                <h3 class="font-bold">Email:</h3>
                <h3 class="whitespace-nowrap text-sm">brasil-customerservice@gruposgl.com</h3>
            </div>

            <div id="about_us_map_info_usa" class="map_info hidden p-5 rounded-xl h-fit border-2  bg-white text-justify">
                <div class="flex items-center mx-auto space-x-2">
                    <img width="50" src="{{asset('images/flags/usa.jpg')}}" alt="">
                    <span>USA</span>
                </div>
                <hr class="border-gray-300 my-3">
                <h3 class="font-bold">Email:</h3>
                <h3 class="whitespace-nowrap text-sm">usa-customerservice@gruposgl.com</h3>
            </div>

            <div id="about_us_map_info_alemania" class="map_info hidden p-5 rounded-xl h-fit border-2  bg-white text-justify">
                <div class="flex items-center mx-auto space-x-2">
                    <img width="50" src="{{asset('images/flags/alemania.svg')}}" alt="">
                    <span>Alemania</span>
                </div>
                <hr class="border-gray-300 my-3">
                <h3 class="font-bold">Email:</h3>
                <h3 class="whitespace-nowrap text-sm">alemania-customerservice@gruposgl.com</h3>
            </div>

            <div id="about_us_map_info_chile" class="map_info hidden p-5 rounded-xl h-fit border-2  bg-white text-justify">
                <div class="flex items-center mx-auto space-x-2">
                    <img width="50" src="{{asset('images/flags/chile.svg')}}" alt="">
                    <span>Chile</span>
                </div>
                <hr class="border-gray-300 my-3">
                <h3 class="font-bold">Email:</h3>
                <h3 class="whitespace-nowrap text-sm">chile-customerservice@gruposgl.com</h3>
            </div>

            <div id="about_us_map_info_espana" class="map_info hidden p-5 rounded-xl h-fit border-2  bg-white text-justify">
                <div class="flex items-center mx-auto space-x-2">
                    <img width="50" src="{{asset('images/flags/españa.svg')}}" alt="">
                    <span>España</span>
                </div>
                <hr class="border-gray-300 my-3">
                <h3 class="font-bold">Email:</h3>
                <h3 class="whitespace-nowrap text-sm">espana-customerservice@gruposgl.com</h3>
            </div>

            <div id="about_us_map_info_colombia" class="map_info hidden p-5 rounded-xl h-fit border-2  bg-white text-justify">
                <div class="flex items-center mx-auto space-x-2">
                    <img width="50" src="{{asset('images/flags/colombia.svg')}}" alt="">
                    <span>Colombia</span>
                </div>
                <hr class="border-gray-300 my-3">
                <h3 class="font-bold">Email:</h3>
                <h3 class="whitespace-nowrap text-sm">colombia-customerservice@gruposgl.com</h3>
            </div>

            <div id="about_us_map_info_honduras" class="map_info hidden p-5 rounded-xl h-fit border-2  bg-white text-justify">
                <div class="flex items-center mx-auto space-x-2">
                    <img width="50" src="{{asset('images/flags/honduras.svg')}}" alt="">
                    <span>Honduras</span>
                </div>
                <hr class="border-gray-300 my-3">
                <h3 class="font-bold">Email:</h3>
                <h3 class="whitespace-nowrap text-sm">honduras-customerservice@gruposgl.com</h3>
            </div>

            <div id="about_us_map_info_india" class="map_info hidden p-5 rounded-xl h-fit border-2  bg-white text-justify">
                <div class="flex items-center mx-auto space-x-2">
                    <img width="50" src="{{asset('images/flags/india.svg')}}" alt="">
                    <span>India</span>
                </div>
                <hr class="border-gray-300 my-3">
                <h3 class="font-bold">Email:</h3>
                <h3 class="whitespace-nowrap text-sm">india-customerservice@gruposgl.com</h3>
            </div>

            <div id="about_us_map_info_mexico" class="map_info hidden p-5 rounded-xl h-fit border-2  bg-white text-justify">
                <div class="flex items-center mx-auto space-x-2">
                    <img width="50" src="{{asset('images/flags/mexico.svg')}}" alt="">
                    <span>México</span>
                </div>
                <hr class="border-gray-300 my-3">
                <h3 class="font-bold">Email:</h3>
                <h3 class="whitespace-nowrap text-sm">mexico-customerservice@gruposgl.com</h3>
            </div>

            <div id="about_us_map_info_panama" class="map_info hidden p-5 rounded-xl h-fit border-2  bg-white text-justify">
                <div class="flex items-center mx-auto space-x-2">
                    <img width="50" src="{{asset('images/flags/panama.svg')}}" alt="">
                    <span>Panama</span>
                </div>
                <hr class="border-gray-300 my-3">
                <h3 class="font-bold">Email:</h3>
                <h3 class="whitespace-nowrap text-sm">panama-customerservice@gruposgl.com</h3>
            </div>

            <div id="about_us_map_info_republica_dominicana" class="map_info hidden p-5 rounded-xl h-fit border-2  bg-white text-justify">
                <div class="flex items-center mx-auto space-x-2">
                    <img width="50" src="{{asset('images/flags/republica_dominicana.svg')}}" alt="">
                    <span>Republica Dominicana</span>
                </div>
                <hr class="border-gray-300 my-3">
                <h3 class="font-bold">Email:</h3>
                <h3 class="whitespace-nowrap text-sm">republicadominicana-customerservice@gruposgl.com</h3>
            </div>
        </div>


        {{-- China --}}
        <div>
            <div id="china" class="map_marker absolute top-[40%] right-[36%] ">
                <svg class="w-8 h-8 text-red-500 cursor-pointer hover:text-red-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                    <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                </svg>
            </div>
        </div>

        {{-- El Salvador --}}
        <div>
            <div id="el_salvador" class="map_marker absolute top-[54.6%] left-[18.5%]">
                <svg class="w-8 h-8 text-red-500 cursor-pointer hover:text-red-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                    <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                </svg>
            </div>
        </div>

        {{-- Brasil --}}
        <div>
            <div id="brasil" class="map_marker absolute top-[68%] left-[28%]">
                <svg class="w-8 h-8 text-red-500 cursor-pointer hover:text-red-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                    <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                </svg>
            </div>
        </div>

        {{-- USA --}}
        <div>
            <div id="usa" class="map_marker absolute top-[40%] left-[18%]">
                <svg class="w-8 h-8 text-red-500 cursor-pointer hover:text-red-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                    <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                </svg>
            </div>
        </div>

        {{-- Alemania --}}
        <div>
            <div id="alemania" class="map_marker absolute top-[32%] right-[56.8%]">
                <svg class="w-8 h-8 text-red-500 cursor-pointer hover:text-red-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                    <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                </svg>
            </div>
        </div>

        {{-- Chile --}}
        <div>
            <div id="chile" class="map_marker absolute top-[78%] left-[23.1%]">
                <svg class="w-8 h-8 text-red-500 cursor-pointer hover:text-red-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                    <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                </svg>
            </div>
        </div>

        {{-- España --}}
        <div>
            <div id="espana" class="map_marker absolute top-[39%] right-[59.5%]">
                <svg class="w-8 h-8 text-red-500 cursor-pointer hover:text-red-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                    <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                </svg>
            </div>
        </div>

        {{-- Colombia --}}
        <div>
            <div id="colombia" class="map_marker absolute top-[59%] left-[21.7%]">
                <svg class="w-8 h-8 text-red-500 cursor-pointer hover:text-red-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                    <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                </svg>
            </div>
        </div>

        {{-- Honduras --}}
        <div>
            <div id="honduras" class="map_marker absolute top-[54%] left-[19.5%]">
                <svg class="w-8 h-8 text-red-500 cursor-pointer hover:text-red-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                    <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                </svg>
            </div>
        </div>

        {{-- India --}}
        <div>
            <div id="india" class="map_marker absolute top-[50%] right-[41%]">
                <svg class="w-8 h-8 text-red-500 cursor-pointer hover:text-red-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                    <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                </svg>
            </div>
        </div>

        {{-- Mexico --}}
        <div>
            <div id="mexico" class="map_marker absolute top-[50%] left-[16%]">
                <svg class="w-8 h-8 text-red-500 cursor-pointer hover:text-red-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                    <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                </svg>
            </div>
        </div>

        {{-- Panama --}}
        <div>
            <div id="panama" class="map_marker absolute top-[57.8%] left-[20.5%]">
                <svg class="w-8 h-8 text-red-500 cursor-pointer hover:text-red-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                    <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                </svg>
            </div>
        </div>

        {{-- Republica Dominicana --}}
        <div>
            <div id="republica_dominicana" class="map_marker absolute top-[51.9%] left-[23.1%]">
                <svg class="w-8 h-8 text-red-500 cursor-pointer hover:text-red-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                    <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                </svg>
            </div>
        </div>

        <div>

        </div>
    </div>

    {{-- Movil --}}
    <div class="p-2 space-y-5 w-fit mx-auto my-5 lg:hidden">
        <div class="space-x-1 items-center">
            <div class="flex mr-auto space-x-1 ">
                <img class="h-6" src="{{asset('images/flags/china.png')}}" alt="">
                <span class="font-bold ">China:</span>
            </div>
            <span class="whitespace-nowrap text-2xs sm:text-base">china-customerservice@gruposgl.com</span>
        </div>

        <div class="space-x-1 items-center">
            <div class="flex mr-auto space-x-1 ">
                <img class="h-6" src="{{asset('images/flags/brasil.svg')}}" alt="">
                <span class="font-bold ">Brasil:</span>
            </div>
            <span class="whitespace-nowrap text-2xs sm:text-base">brasil-customerservice@gruposgl.com</span>
        </div>

        <div class="space-x-1 items-center">
            <div class="flex mr-auto space-x-1 ">
                <img class="h-6" src="{{asset('images/flags/el_salvador.svg')}}" alt="">
                <span class="font-bold ">El Salvador:</span>
            </div>
            <span class="whitespace-nowrap text-2xs sm:text-base">elsalvador-customerservice@gruposgl.com</span>
        </div>

        <div class="space-x-1 items-center">
            <div class="flex mr-auto space-x-1 ">
                <img class="h-6" src="{{asset('images/flags/honduras.svg')}}" alt="">
                <span class="font-bold ">Honduras:</span>
            </div>
            <span class="whitespace-nowrap text-2xs sm:text-base">honduras-customerservice@gruposgl.com</span>
        </div>

        <div class="space-x-1 items-center">
            <div class="flex mr-auto space-x-1 ">
                <img class="h-6" src="{{asset('images/flags/republica_dominicana.svg')}}" alt="">
                <span class="font-bold ">Republica Dominicana:</span>
            </div>
            <span class="whitespace-nowrap text-2xs sm:text-base">republicadominicana-customerservice@gruposgl.com</span>
        </div>

        <div class="space-x-1 items-center">
            <div class="flex mr-auto space-x-1 ">
                <img class="h-6" src="{{asset('images/flags/panama.svg')}}" alt="">
                <span class="font-bold ">Panama:</span>
            </div>
            <span class="whitespace-nowrap text-2xs sm:text-base">panama-customerservice@gruposgl.com</span>
        </div>


        <div class="space-x-1 items-center">
            <div class="flex mr-auto space-x-1 ">
                <img class="h-6" src="{{asset('images/flags/chile.svg')}}" alt="">
                <span class="font-bold ">Chile:</span>
            </div>
            <span class="whitespace-nowrap text-2xs sm:text-base">chile-customerservice@gruposgl.com</span>
        </div>

        <div class="space-x-1 items-center">
            <div class="flex mr-auto space-x-1 ">
                <img class="h-6" src="{{asset('images/flags/colombia.svg')}}" alt="">
                <span class="font-bold ">Colombia:</span>
            </div>
            <span class="whitespace-nowrap text-2xs sm:text-base">colombia-customerservice@gruposgl.com</span>
        </div>

        <div class="space-x-1 items-center">
            <div class="flex mr-auto space-x-1 ">
                <img class="h-6" src="{{asset('images/flags/usa.jpg')}}" alt="">
                <span class="font-bold ">USA:</span>
            </div>
            <span class="whitespace-nowrap text-2xs sm:text-base">usa-customerservice@gruposgl.com</span>
        </div>

        <div class="space-x-1 items-center">
            <div class="flex mr-auto space-x-1 ">
                <img class="h-6" src="{{asset('images/flags/españa.svg')}}" alt="">
                <span class="font-bold ">España:</span>
            </div>
            <span class="whitespace-nowrap text-2xs sm:text-base">espana-customerservice@gruposgl.com</span>
        </div>

        <div class="space-x-1 items-center">
            <div class="flex mr-auto space-x-1 ">
                <img class="h-6" src="{{asset('images/flags/mexico.svg')}}" alt="">
                <span class="font-bold ">México:</span>
            </div>
            <span class="whitespace-nowrap text-2xs sm:text-base">mexico-customerservice@gruposgl.com</span>
        </div>

        <div class="space-x-1 items-center">
            <div class="flex mr-auto space-x-1 ">
                <img class="h-6" src="{{asset('images/flags/alemania.svg')}}" alt="">
                <span class="font-bold ">Alemania:</span>
            </div>
            <span class="whitespace-nowrap text-2xs sm:text-base">alemania-customerservice@gruposgl.com</span>
        </div>

        <div class="space-x-1 items-center">
            <div class="flex mr-auto space-x-1 ">
                <img class="h-6" src="{{asset('images/flags/india.svg')}}" alt="">
                <span class="font-bold ">India:</span>
            </div>
            <span class="whitespace-nowrap text-2xs sm:text-base">india-customerservice@gruposgl.com</span>
        </div>

    </div>
</section>
@endsection

@push('child-scripts')
    <script>

        $('.map_marker')
        .on("click", function(){
            $('.map_info').hide();
            let id = '#about_us_map_info_'+this.id;
            $(id).slideDown('fast');
        })
        // .on("mouseleave",function(){
        //     let id = '#'+$(this).next().prop('id');
        //     $(id).hide();
        // });
    </script>
@endpush
