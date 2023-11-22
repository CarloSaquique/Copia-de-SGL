@extends('layouts.app')

@section('content')
    {{-- <section class="bg-blue-50 p-1">
    <div class="px-96 py-10">
        <div class="max-w-11/12 mx-auto">
            <div class="grid grid-cols-4 space-x-5">
                <div class="bg-white shadow-lg rounded-lg p-5">
                    <div class="flex items-start">
                        <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-1">Holding</h4>
                        <p class="text-sm text-gray-500 leading-relaxed">Grupo SGL cuenta con un conglomerado de 8 empresas
                            dedicadas a servicios logísticos que van desde el Supply Chain hasta el Recurso Humano y Financiero.
                            Con presencia y desarrollo de negocios en los principales mercados del mundo.</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-5">
                    <div class="flex items-start">
                        <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-1">Internacional</h4>
                        <p class="text-sm text-gray-500 leading-relaxed">Con Hubs logísticos desarrollados en China, La India,
                            Brasil, USA, El Salvador, Honduras, Panama, Chile, R. Dominicana, España, Mexico, Alemania.
                            Mantenemos un crecimiento y desarrollo sostenible y a la vanguardia, siendo la empresa con capital
                            100% guatemalteco liderando el desarrollo de plataformas de conexión propia y alcanzando acuerdos
                            contractuales que garantizan la sinergia común entre los puntos de conexión establecidos.</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-5">
                    <div class="flex items-start">
                        <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-1">Centro De Operaciones</h4>
                        <p class="text-sm text-gray-500 leading-relaxed">Nuestro centro de operaciones corporativo ubicado en
                            el corazón de la Ciudad de Guatemala marca una latente perseverancia de cambios e inyección de
                            profesionalismo joven y revulsivo al mercado internacional logístico. Que ve cada dia a Grupo SGL
                            como el especial operador de cambios significativos y tendencias de publicidad nunca antes vistas
                            dentro del sector logístico.</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-5">
                    <div class="flex items-start">
                        <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-1">Colaboradores</h4>
                        <p class="text-sm text-gray-500 leading-relaxed">Nuestra cartera de colaboradores en un 85% egresados
                            de las mejores universidades de Ciudad de Guatemala con especializaciones en Comercio Internacional
                            y Aduanas, Financistas, Mercadologos y Relacionistas Publicos marcan un hito en el cambio de mano de
                            obra especializada en el sector y hacen de cada uno de nuestros servicios algo diferente.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section> --}}


    <section class="p-5">
    {{-- Mapa --}}
    <div class="w-12/12 mx-auto rounded-xl h-[600px] md:w-10/12" id="map">
    </div>
</section>
@endsection


@push('child-scripts')
        <script type="text/javascript">

            let markers = [
                ['Pais',14.594928, -90.512465],
                ['Pais',39.006076, -101.469862],
                ['Pais',13.618454, -88.819959],
            ]

            function initMap() {
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 3,
                    center:{lat:15.305477, lng: -41.109895},
                });

                markers.forEach(element => {
                    new google.maps.Marker({
                        position: {lat: element[1], lng: element[2]},
                        map,
                        title: element[0],
                    });
                });

            }

            window.initMap = initMap;

        </script>
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDMT0bAuIQnHEvW-0w4wc3A9xBYu365GEg&callback=initMap" ></script>
@endpush