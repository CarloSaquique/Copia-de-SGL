@extends('layouts.app')

@section('content')
    <section class="text-center  bg-gray-100">
        <div class="py-20 opacity-60" style="background-image: url({{asset('images/footer/nuestra_historia.jpg')}}); background-size: cover;">
            <span class="font-bold text-5xl lg:text-6xl text-white">Acerca de Nosotros</span>
        </div>


        <div class=" w-full text-justify my-10 px-5 items-center space-y-2  md:px-36 lg:px-56 lg:space-x-5 lg:flex">
            <div class="lg:w-5/12 space-y-5 bg-white p-8">
                <h3 class="font-bold text-xl">Holding</h3>
                <p class="text-base">
                    Grupo SGL cuenta con un conglomerado de 8 empresas dedicadas a servicios
                    logísticos que van desde el Supply Chain hasta el Recurso Humano y Financiero.
                    Con presencia y desarrollo de negocios en los principales mercados del mundo.
                </p>
            </div>

            <div class="lg:w-7/12 space-y-5 bg-blue-600 text-white p-8">
                <h3 class="font-bold text-xl">Centro De Operaciones</h3>
                <p class="text-base">
                    Nuestro centro de operaciones corporativo ubicado en el corazón de la Ciudad de Guatemala marca una latente perseverancia
                    de cambios e inyección de profesionalismo joven y revulsivo al mercado internacional logístico. Que ve cada dia a Grupo SGL
                    como el especial operador de cambios significativos y tendencias de publicidad nunca antes vistas dentro del sector logístico.
                </p>
            </div>

        </div>


        <div class=" w-full text-justify my-10 px-5 items-center space-y-2  md:px-36 lg:px-56 lg:space-x-5 lg:flex">
            <div class="lg:w-6/12 space-y-5 bg-blue-600 text-white p-8">
                <h3 class="font-bold text-xl">Internacional</h3>
                <p class="text-base">
                    Con Hub´s logísticos desarrollados en China, La India, Brasil, USA, El Salvador, Honduras, Panama, Chile, R. Dominicana,
                    España, Mexico, Alemania. Mantenemos un crecimiento y desarrollo sostenible y a la vanguardia, siendo la empresa con capital
                    100% guatemalteco liderando el desarrollo de plataformas de conexión propia y alcanzando acuerdos contractuales que garantizan
                    la sinergia común entre los puntos de conexión establecidos.
                </p>
            </div>
            <div class="lg:w-6/12 space-y-5 bg-white p-8">
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

        <div class="p-5">
            <h3 class="text-xl font-bold">Puntos de Enlace</h3>
            {{-- Mapa --}}
            <div class="w-12/12 mx-auto rounded-xl h-[600px] md:w-10/12" id="map">
            </div>
        </div>
    </section>
@endsection


@push('child-scripts')
        <script type="text/javascript">

            let markers = [
                ['Guatemala',14.594928, -90.512465],
                ['USA',39.006076, -101.469862],
                ['El Salvador',13.618454, -88.819959],
                ['China',39.901944, 116.411556],
                ['India',28.613917, 77.208806],
                ['Germany',52.520056, 13.404806],
                ['Spain',40.416667, -3.703889],
                ['Brazil',-15.797861, -47.891972],
                ['Chile',-33.448333, -70.669306],
                ['Colombia',4.710194, -74.071944],
                ['Panama',8.988528, -79.532694],
                ['Honduras',14.064306, -87.202000],
                ['Dominican Republic',18.462639, -69.936028],
                ['México',19.432634, -99.133205],
            ]

            function initMap() {
                let lng;
                window.screen.width < 800 ? lng = -81.109895:lng = -41.109895;

                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 3,
                    center:{lat:15.305477, lng: lng},
                });

                markers.forEach(element => {

                    const contentString =
                            '<div id="content">' +
                                element[0]+
                            "</div>";

                    const infowindow = new google.maps.InfoWindow({
                        content: contentString,
                        ariaLabel: "",
                    });

                    const marker = new google.maps.Marker({
                        position: {lat: element[1], lng: element[2]},
                        map,
                        title: element[0],
                    });

                    marker.addListener("click", () => {
                        infowindow.open({
                            anchor: marker,
                            map,
                        });
                    });
                });


            }

            window.initMap = initMap;

        </script>
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDMT0bAuIQnHEvW-0w4wc3A9xBYu365GEg&callback=initMap" ></script>
@endpush