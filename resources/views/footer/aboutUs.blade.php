@extends('layouts.app')

@section('content')
<section class="bg-blue-950/90 text-white py-20">
    <h3 class="font-bold  text-5xl py-20 text-center">Acerca de Nosotros</h3>

    {{-- <div class="px-2 lg:px-20">
        <img class="min-w-full rounded-xl" src="../images/nosotros.jpg" alt="">
    </div> --}}
        <div class="flex">
            {{-- <img class="w-1/3 rounded-xl ml-10" src="../images/calidad.jpg" alt=""> --}}
            <div class="w-1/2 mx-auto p-2 text-left sm:text-justify lg:text-lg lg:px-36">
                {{-- <h3 class="text-3xl text-center my-5">Nuestros Inicios</h3> --}}
                <p>
                    Grupo SGL cuenta con un conglomerado de 8 empresas dedicadas a servicios
                    logisticos que van desde el Supply Chain hasta el Recurso Humano y Financiero.
                    Con presencia y desarrollo de negocios en los principales mercados del mundo.
                </p>
            </div>
        </div>

        <div class="flex my-20">
            <div class="w-1/2 mx-auto p-2 text-left sm:text-justify lg:text-lg lg:px-36">
                {{-- <h3 class="text-3xl text-center my-5">Nuestros Inicios</h3> --}}
                <p>
                    Con Hub´s logisticos desarrollados en China, La India, Brasil, USA, El Salavdor,
                    Honduras, Panama, Chile, R. Dominicana, España, Mexico, Alemania. Mantenemos un
                    crecimiento y desarrollo sostenible y a la vanguardia siendo la empresa con
                    capital 100% guatemalteco liderando el desarrollo de plataformas de conexión
                    propia y alcanzando acuerdos contractuales que garantizan la sinergia comun
                    entre los puntos de conexión establecidos.
                </p>
            </div>
            <div class="w-1/2 mx-auto p-2 text-left sm:text-justify lg:text-lg lg:px-36">
                {{-- <h3 class="text-3xl text-center my-5">Nuestros Inicios</h3> --}}
                <p>
                    Nuestro centro de operaciones corporativo ubicado en el corazon de la Ciudad
                    de Guatemala marca una latente perseverancia de cambios e inyección de
                    profesionalismo joven y revulsivo al mercado internacional logistico. Que ve
                    cada dia a Grupo SGL como el especial operador de cambios significativos y
                    tendencias de publicidad nunca antes vistas dentro del sector logistico.
                </p>
            </div>
        </div>

        <div class="flex">
            <div class="w-1/2 mr-auto p-2 text-left sm:text-justify lg:text-lg lg:px-36">
                {{-- <h3 class="text-3xl text-center my-5">Nuestros Inicios</h3> --}}
                <p>
                    Nuestra cartera de colaboradores en un 85% egresados de las mejores
                    universidades de Ciudad de Guatemala con especializaciones en Comercio
                    Internacional y Aduanas, Financistas, Mercadologos y Relacionistas Publicos
                    marcan un hito en el cambio de mano de obra especializada en el sector y hacen
                    de cada uno de nuestros servicios algo diferente.
                </p>
            </div>
            <img class="w-[600px] mr-20 rounded-xl" src="../images/nosotros.jpg" alt="">
        </div>

        {{-- Map --}}
        <div class="hidden relative lg:block my-10 w-10/12 mx-auto">
            <h3 class="text-3xl text-center my-5">Nuestras Oficinas</h3>
            <img id="about_us_img_map" class="w-full rounded-xl" src="../images/home/world_map.jpg" alt="">

            {{-- China --}}
            <div>
                <div class="map_marker absolute top-[45%] right-[23%] ">
                    <svg class="w-8 h-8 text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                        <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                    </svg>
                </div>
                <div id="about_us_map_info_china" class="hidden absolute top-[45%] right-[23%]
                    p-10 rounded-xl border-2 w-96 bg-white text-justify">
                    <div class="flex items-center mx-auto space-x-2">
                        <img width="50" src="../images/china.png" alt="">
                        <span>China</span>
                    </div>
                    <hr class="border-gray-300 my-3">
                    <h3 class="font-bold ">Dirección: </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    <h3 class="font-bold">Email:</h3>
                    <h3 class="whitespace-nowrap">china-customerservice@gruposgl.com</h3>
                </div>
            </div>

            {{-- El Salvador --}}
            <div>
                <div class="map_marker absolute top-[57%] left-[21%] ">
                    <svg class="w-8 h-8 text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                        <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                    </svg>
                </div>
                <div id="about_us_map_info_salvador" class="hidden absolute top-[57%] left-[5%]
                    p-10 rounded-xl border-2 w-72 bg-white text-justify">
                    <div class="flex items-center mx-auto space-x-2">
                        <span>El Salvador</span>
                    </div>
                    <hr class="border-gray-300 my-3">
                    <h3 class="font-bold ">Dirección: </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    <h3 class="font-bold">Telefono:</h3>
                    <h3>1212121212</h3>
                    <div class="text-center mt-5">
                        <a href="tel:1212121212" class="bg-blue-950 text-white px-3 py-2 rounded-xl">Llamar</a>
                    </div>
                </div>
            </div>

            {{-- Brasil --}}
            <div>
                <div class="map_marker absolute top-[68%] left-[32%] ">
                    <svg class="w-8 h-8 text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                        <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                    </svg>
                </div>
                <div id="about_us_map_info_brasil" class="hidden absolute top-[68%] left-[32%]
                    p-10 rounded-xl border-2 w-72 bg-white text-justify">
                    <div class="flex items-center mx-auto space-x-2">
                        <span>Brasil</span>
                    </div>
                    <hr class="border-gray-300 my-3">
                    <h3 class="font-bold ">Dirección: </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    <h3 class="font-bold">Telefono:</h3>
                    <h3>1212121212</h3>
                    <div class="text-center mt-5">
                        <a href="tel:1212121212" class="bg-blue-950 text-white px-3 py-2 rounded-xl">Llamar</a>
                    </div>
                </div>
            </div>

            {{-- USA --}}
            <div>
                <div class="map_marker absolute top-[45%] left-[18%] ">
                    <svg class="w-8 h-8 text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                        <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                    </svg>
                </div>
                <div id="about_us_map_info_usa" class="hidden absolute top-[45%] left-[18%]
                    p-10 rounded-xl border-2 w-72 bg-white text-justify">
                    <div class="flex items-center mx-auto space-x-2">
                        <img width="50" src="../images/usa.jpg" alt="">
                        <span>USA</span>
                    </div>
                    <hr class="border-gray-300 my-3">
                    <h3 class="font-bold ">Dirección: </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    <h3 class="font-bold">Telefono:</h3>
                    <h3>1212121212</h3>
                    <div class="text-center mt-5">
                        <a href="tel:1212121212" class="bg-blue-950 text-white px-3 py-2 rounded-xl">Llamar</a>
                    </div>
                </div>
            </div>
        </div>


        {{-- <img class="min-w-full rounded-xl my-10" src="../images/home/world_map.jpg" alt=""> --}}

        <p class="lg:hidde">
            Nuestras oficinas se encuentran en:<br>
                China: <br>
                Santos, Brasil: <br>
                El Salvador: <br>
                Honduras: <br>
                Republica Dominicana: <br>
                Panama: <br>
                Chile: <br>
                Colombia: <br>
                USA: <br>
                España: <br>
                Mexico: <br>
                Alemania: <br>
                India: <br>
        </p>
</section>
@endsection

@push('child-scripts')
    <script>
        $('.map_marker').on('mouseover',function(){
            let id = '#'+$(this).next().prop('id');
            $(id).animate({'height':'show'});
            $(id).on('mouseleave',function(){
                $(id).hide();
            });
        });
    </script>
@endpush
