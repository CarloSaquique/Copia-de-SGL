@extends('layouts.app')

@section('content')
<section class="text-center  bg-white">
    <div class="py-20 opacity-80" style="background-image: url({{asset('images/footer/nuestra_historia.jpg')}}); background-size: cover;">
        <span class="font-bold text-5xl lg:text-6xl text-white">Acerca de Nosotros</span>
    </div>

    <div class="bg-white py-10 text-justify my-5 px-5 items-center space-y-2 lg:flex sm:px-16 md:px-32 lg:px-16 xl:px-52 2xl:px-[450px]">
        {{-- <div class="lg:w-1/2">
            <img class="rounded-lg mx-auto md:w-4/6 lg:w-5/6" src="{{asset('images/footer/modalidad_de_trabajo.jpg')}}">
        </div> --}}
        <div class="lg:w-1/2 space-y-5">
            <h3 class="font-bold text-xl sm:text-2xl">Holding</h3>
            <p class="text-base sm:text-lg">
                Grupo SGL cuenta con un conglomerado de 8 empresas dedicadas a servicios
                logisticos que van desde el Supply Chain hasta el Recurso Humano y Financiero.
                Con presencia y desarrollo de negocios en los principales mercados del mundo.
            </p>
        </div>
    </div>

    <div class="bg-white py-10 text-justify my-5 px-5 items-center space-y-2 lg:flex sm:px-16 md:px-32 lg:px-16 xl:px-52 2xl:px-[450px]">
        {{-- <div class="lg:w-1/2">
            <img class="rounded-lg mx-auto md:w-4/6 lg:w-5/6" src="{{asset('images/footer/modalidad_de_trabajo.jpg')}}">
        </div> --}}
        <div class="lg:w-1/2 space-y-5">
            <h3 class="font-bold text-xl sm:text-2xl">Internacional</h3>
            <p class="text-base sm:text-lg">
                Con Hub´s logisticos desarrollados en China, La India, Brasil, USA, El Salavdor,
                Honduras, Panama, Chile, R. Dominicana, España, Mexico, Alemania. Mantenemos un
                crecimiento y desarrollo sostenible y a la vanguardia siendo la empresa con
                capital 100% guatemalteco liderando el desarrollo de plataformas de conexión
                propia y alcanzando acuerdos contractuales que garantizan la sinergia comun
                entre los puntos de conexión establecidos.
            </p>
        </div>
    </div>

    <div class="bg-white py-10 text-justify lg:space-x-5 my-5 px-5 lg:flex sm:px-16 md:px-32 lg:px-16 xl:px-52 2xl:px-[450px]">
        <div class="lg:w-1/2 space-y-5">
            <h3 class="font-bold text-xl sm:text-2xl">Centro De Operaciones</h3>
            <p class="text-base sm:text-lg">
                Nuestro centro de operaciones corporativo ubicado en el corazon de la Ciudad
                de Guatemala marca una latente perseverancia de cambios e inyección de
                profesionalismo joven y revulsivo al mercado internacional logistico. Que ve
                cada dia a Grupo SGL como el especial operador de cambios significativos y
                tendencias de publicidad nunca antes vistas dentro del sector logistico.
            </p>
        </div>

        <div class="lg:w-1/2 space-y-5 mt-10 lg:mt-0">
            <h3 class="font-bold text-xl sm:text-2xl">Colaboradores</h3>
            <p class="text-base sm:text-lg">
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
        {{-- Map --}}
        <div class="hidden relative lg:block my-10 w-10/12 mx-auto">
            <img id="about_us_img_map" class="w-full rounded-xl" src="{{asset('images/footer/mapa.png')}}" alt="">

            {{-- China --}}
            <div>
                <div class="map_marker absolute top-[40%] right-[23%] ">
                    <svg class="w-8 h-8 text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                        <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                    </svg>
                </div>
                <div id="about_us_map_info_china" class="hidden absolute top-[15%] right-[0%]
                    p-10 rounded-xl border-2 w-96 bg-white text-justify">
                    <div class="flex items-center mx-auto space-x-2">
                        <img width="50" src="{{asset('images/flags/china.png')}}" alt="">
                        <span>China</span>
                    </div>
                    <hr class="border-gray-300 my-3">
                    <h3 class="font-bold">Email:</h3>
                    <h3 class="whitespace-nowrap text-sm">china-customerservice@gruposgl.com</h3>
                </div>
            </div>

            {{-- El Salvador --}}
            <div>
                <div class="map_marker absolute top-[54%] left-[22%]">
                    <svg class="w-8 h-8 text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                        <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                    </svg>
                </div>
                <div id="about_us_map_info_el_salvador" class="hidden absolute top-[54%] left-[-9%]
                    p-10 rounded-xl border-2 w-96 bg-white text-justify">
                    <div class="flex items-center mx-auto space-x-2">
                        <img width="50" src="{{asset('images/flags/el_salvador.svg')}}" alt="">
                        <span>El Salvador</span>
                    </div>
                    <hr class="border-gray-300 my-3">
                    <h3 class="font-bold">Email:</h3>
                    <h3 class="whitespace-nowrap text-sm">elsalvador-customerservice@gruposgl.com</h3>
                </div>
            </div>

            {{-- Brasil --}}
            <div>
                <div class="map_marker absolute top-[68%] left-[33%]">
                    <svg class="w-8 h-8 text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                        <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                    </svg>
                </div>
                <div id="about_us_map_info_brasil" class="hidden absolute top-[68%] left-[33%]
                    p-10 rounded-xl border-2 w-96 bg-white text-justify">
                    <div class="flex items-center mx-auto space-x-2">
                        <img width="50" src="{{asset('images/flags/brasil.svg')}}" alt="">
                        <span>Brasil</span>
                    </div>
                    <hr class="border-gray-300 my-3">
                    <h3 class="font-bold">Email:</h3>
                    <h3 class="whitespace-nowrap text-sm">brasil-customerservice@gruposgl.com</h3>
                </div>
            </div>

            {{-- USA --}}
            <div>
                <div class="map_marker absolute top-[40%] left-[20%]">
                    <svg class="w-8 h-8 text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                        <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                    </svg>
                </div>
                <div id="about_us_map_info_usa" class="hidden absolute top-[15%] left-[-11%]
                    p-10 rounded-xl border-2 w-96 bg-white text-justify">
                    <div class="flex items-center mx-auto space-x-2">
                        <img width="50" src="{{asset('images/flags/usa.jpg')}}" alt="">
                        <span>USA</span>
                    </div>
                    <hr class="border-gray-300 my-3">
                    <h3 class="font-bold">Email:</h3>
                    <h3 class="whitespace-nowrap text-sm">usa-customerservice@gruposgl.com</h3>
                </div>
            </div>

            {{-- Alemania --}}
            <div>
                <div class="map_marker absolute top-[32%] right-[48%]">
                    <svg class="w-8 h-8 text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                        <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                    </svg>
                </div>
                <div id="about_us_map_info_alemania" class="hidden absolute top-[7%] left-[49%]
                    p-10 rounded-xl border-2 w-96 bg-white text-justify">
                    <div class="flex items-center mx-auto space-x-2">
                        <img width="50" src="{{asset('images/flags/alemania.svg')}}" alt="">
                        <span>Alemania</span>
                    </div>
                    <hr class="border-gray-300 my-3">
                    <h3 class="font-bold">Email:</h3>
                    <h3 class="whitespace-nowrap text-sm">alemania-customerservice@gruposgl.com</h3>
                </div>
            </div>

            {{-- Chile --}}
            <div>
                <div class="map_marker absolute top-[78%] left-[27.3%]">
                    <svg class="w-8 h-8 text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                        <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                    </svg>
                </div>
                <div id="about_us_map_info_chile" class="hidden absolute top-[78%] left-[-3%]
                    p-10 rounded-xl border-2 w-96 bg-white text-justify">
                    <div class="flex items-center mx-auto space-x-2">
                        <img width="50" src="{{asset('images/flags/chile.svg')}}" alt="">
                        <span>Chile</span>
                    </div>
                    <hr class="border-gray-300 my-3">
                    <h3 class="font-bold">Email:</h3>
                    <h3 class="whitespace-nowrap text-sm">chile-customerservice@gruposgl.com</h3>
                </div>
            </div>

            {{-- España --}}
            <div>
                <div class="map_marker absolute top-[39%] right-[51.5%]">
                    <svg class="w-8 h-8 text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                        <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                    </svg>
                </div>
                <div id="about_us_map_info_espana" class="hidden absolute top-[38%] left-[32%]
                    p-10 rounded-xl border-2 w-96 bg-white text-justify">
                    <div class="flex items-center mx-auto space-x-2">
                        <img width="50" src="{{asset('images/flags/españa.svg')}}" alt="">
                        <span>España</span>
                    </div>
                    <hr class="border-gray-300 my-3">
                    <h3 class="font-bold">Email:</h3>
                    <h3 class="whitespace-nowrap text-sm">espana-customerservice@gruposgl.com</h3>
                </div>
            </div>

            {{-- Colombia --}}
            <div>
                <div class="map_marker absolute top-[59%] left-[26%]">
                    <svg class="w-8 h-8 text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                        <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                    </svg>
                </div>
                <div id="about_us_map_info_colombia" class="hidden absolute top-[59%] left-[26%]
                    p-10 rounded-xl border-2 w-96 bg-white text-justify">
                    <div class="flex items-center mx-auto space-x-2">
                        <img width="50" src="{{asset('images/flags/colombia.svg')}}" alt="">
                        <span>Colombia</span>
                    </div>
                    <hr class="border-gray-300 my-3">
                    <h3 class="font-bold">Email:</h3>
                    <h3 class="whitespace-nowrap text-sm">colombia-customerservice@gruposgl.com</h3>
                </div>
            </div>

            {{-- Honduras --}}
            <div>
                <div class="map_marker absolute top-[50%] left-[23%]">
                    <svg class="w-8 h-8 text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                        <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                    </svg>
                </div>
                <div id="about_us_map_info_honduras" class="hidden absolute top-[25%] left-[22.5%]
                    p-10 rounded-xl border-2 w-96 bg-white text-justify">
                    <div class="flex items-center mx-auto space-x-2">
                        <img width="50" src="{{asset('images/flags/honduras.svg')}}" alt="">
                        <span>Honduras</span>
                    </div>
                    <hr class="border-gray-300 my-3">
                    <h3 class="font-bold">Email:</h3>
                    <h3 class="whitespace-nowrap text-sm">honduras-customerservice@gruposgl.com</h3>
                </div>
            </div>

            {{-- India --}}
            <div>
                <div class="map_marker absolute top-[50%] right-[29%]">
                    <svg class="w-8 h-8 text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                        <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                    </svg>
                </div>
                <div id="about_us_map_info_india" class="hidden absolute top-[50%] right-[29%]
                    p-10 rounded-xl border-2 w-96 bg-white text-justify">
                    <div class="flex items-center mx-auto space-x-2">
                        <img width="50" src="{{asset('images/flags/india.svg')}}" alt="">
                        <span>India</span>
                    </div>
                    <hr class="border-gray-300 my-3">
                    <h3 class="font-bold">Email:</h3>
                    <h3 class="whitespace-nowrap text-sm">india-customerservice@gruposgl.com</h3>
                </div>
            </div>

            {{-- Mexico --}}
            <div>
                <div class="map_marker absolute top-[50%] left-[19%]">
                    <svg class="w-8 h-8 text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                        <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                    </svg>
                </div>
                <div id="about_us_map_info_mexico" class="hidden absolute top-[50%] left-[-11%]
                    p-10 rounded-xl border-2 w-86 bg-white text-justify">
                    <div class="flex items-center mx-auto space-x-2">
                        <img width="50" src="{{asset('images/flags/mexico.svg')}}" alt="">
                        <span>México</span>
                    </div>
                    <hr class="border-gray-300 my-3">
                    <h3 class="font-bold">Email:</h3>
                    <h3 class="whitespace-nowrap text-sm">mexico-customerservice@gruposgl.com</h3>
                </div>
            </div>

            {{-- Panama --}}
            <div>
                <div class="map_marker absolute top-[55.8%] left-[24.5%]">
                    <svg class="w-8 h-8 text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                        <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                    </svg>
                </div>
                <div id="about_us_map_info_panama" class="hidden absolute top-[55%] left-[24%]
                    p-10 rounded-xl border-2 w-96 bg-white text-justify">
                    <div class="flex items-center mx-auto space-x-2">
                        <img width="50" src="{{asset('images/flags/panama.svg')}}" alt="">
                        <span>Panama</span>
                    </div>
                    <hr class="border-gray-300 my-3">
                    <h3 class="font-bold">Email:</h3>
                    <h3 class="whitespace-nowrap text-sm">panama-customerservice@gruposgl.com</h3>
                </div>
            </div>

            {{-- Republica Dominicana --}}
            <div>
                <div class="map_marker absolute top-[50.5%] left-[27%]">
                    <svg class="w-8 h-8 text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                        <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                    </svg>
                </div>
                <div id="about_us_map_info_republica_dominicana" class="hidden absolute top-[50.5%] left-[27%]
                    p-10 rounded-xl border-2 w-[450px] bg-white text-justify">
                    <div class="flex items-center mx-auto space-x-2">
                        <img width="50" src="{{asset('images/flags/republica_dominicana.svg')}}" alt="">
                        <span>Republica Dominicana</span>
                    </div>
                    <hr class="border-gray-300 my-3">
                    <h3 class="font-bold">Email:</h3>
                    <h3 class="whitespace-nowrap text-sm">republicadominicana-customerservice@gruposgl.com</h3>
                </div>
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
        .on("mouseenter", function(){
            let id = '#'+$(this).next().prop('id');
            $(id).animate({'height':'show'});
            $(id).on('mouseleave',function(){
                $(id).hide();
            });
        })
        // .on("mouseleave",function(){
        //     let id = '#'+$(this).next().prop('id');
        //     $(id).hide();
        // });
    </script>
@endpush
