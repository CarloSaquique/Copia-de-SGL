@extends('layouts.app')

@section('content')
    {{-- Tracking --}}
    <section class="p-5 font-mono">
        {{-- No Tracking --}}
        @if(isset($tracking->tracking_number))
            <div class="flex mx-auto w-fit">
                <h3 class="w-fit px-3 py-1 text-blue-900 rounded-sm font-bold whitespace-nowrap text-center">No.Tracking: {{$tracking->tracking_number}}</h3>
            </div>
        @endif

        {{-- Status --}}
        <div class="w-fit mx-auto my-10">
            @if(isset($tracking))
                <h3 class="text-center">Estados</h3>
                <div class="mx-auto text-center text-xs flex sm:text-base">
                @foreach ($tracking_status as $key=>$status)
                    @if($status)
                        <h3 class="border border-gray-400 p-3">{{$status->state}}</h3>
                        <h3 class="border border-gray-400 p-3">{{$status->created_at}}</h3>
                    @endif
                @endforeach
            </div>
            @endif
        </div>

        {{-- Mapa --}}
        <div class="w-12/12 mx-auto rounded-xl h-96 md:w-10/12" id="map">
        </div>
    </section>
@endsection

@if($tracking->service == 2)
@push('child-scripts')
        <script type="text/javascript">
            let table =
            {
                'status_1':[0,38.931960, -101.547763,4],
                'status_2':[1,25.756353, -80.192746,6],
                'status_3':[1,25.756353, -80.192746,6],
                'status_4':[1,25.756353, -80.192746,6],
                'status_5':[1,25.756353, -80.192746,6],
                'status_6':[0,21.724942, -84.396379,5,25.756353,-80.192746,14.601782,-90.542021],
                'status_7':[1,14.588196063114736,-90.5304678010414,15],
                'status_8':[1,14.588196063114736,-90.5304678010414,15],
                'status_9':[1,14.588196063114736,-90.5304678010414,15],
                'status_10':[1,14.595052542058738,-90.5125500767576,18],
                'status_11':[1,14.595052542058738,-90.5125500767576,17],
                'status_12':[1,14.595052542058738,-90.5125500767576,17],
                'status_13':[1,14.595052542058738,-90.5125500767576,17],
                'status_14':[1,14.595052542058738,-90.5125500767576,17],
                'status_15':[0,14.601782, -90.542021,10],
                'status_16':[0,14.601782, -90.542021,10],
            }


            let position = {!! json_encode($last_status, JSON_HEX_TAG) !!};

            let map_data = table[position];

            function initMap() {
                const myLatLng = { lat:map_data[1], lng:map_data[2]};

                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: map_data[3],
                    center: myLatLng,
                });

                if(map_data[0]){
                    new google.maps.Marker({
                        position: myLatLng,
                        map,
                        title: "",
                    });
                }

                const flightPlanCoordinates = [
                    { lat: map_data[4] ,lng: map_data[5]},
                    { lat: map_data[6] , lng:map_data[7]},

                ];
                const flightPath = new google.maps.Polyline({
                    path: flightPlanCoordinates,
                    geodesic: false,
                    strokeColor: "#FF0000",
                    strokeOpacity: 1.0,
                    strokeWeight: 1,
                });

                flightPath.setMap(map);
            }

            window.initMap = initMap;

        </script>
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDMT0bAuIQnHEvW-0w4wc3A9xBYu365GEg&callback=initMap" ></script>
@endpush
@endif


@if ($tracking->service == 3)
@push('child-scripts')
        <script type="text/javascript">
            let table =
            {
                'status_1':[0,34.368267, 103.710870,5],
                'status_2':[1,22.563087, 114.057312,11],
                'status_3':[1,22.563087, 114.057312,11],
                'status_4':[1,22.563087, 114.057312,11],
                'status_5':[1,22.563087, 114.057312,11],
                'status_6':[0,19.848112, -168.546895,2, 22.563087,114.057312,14.601782,-90.542021],
                'status_7':[1,14.588196063114736,-90.5304678010414,15],
                'status_8':[1,14.588196063114736,-90.5304678010414,15],
                'status_9':[1,14.588196063114736,-90.5304678010414,15],
                'status_10':[1,14.595052542058738,-90.5125500767576,18],
                'status_11':[1,14.595052542058738,-90.5125500767576,17],
                'status_12':[1,14.595052542058738,-90.5125500767576,17],
                'status_13':[1,14.595052542058738,-90.5125500767576,17],
                'status_14':[1,14.595052542058738,-90.5125500767576,17],
                'status_15':[0,14.601782, -90.542021,10],
                'status_16':[0,14.601782, -90.542021,10],
            }

            let position = {!! json_encode($last_status, JSON_HEX_TAG) !!};

            let map_data = table[position];

            function initMap() {
                const myLatLng = { lat:map_data[1], lng:map_data[2]};

                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: map_data[3],
                    center: myLatLng,
                });

                if(map_data[0]){
                    new google.maps.Marker({
                        position: myLatLng,
                        map,
                        title: "",
                    });
                }

                const flightPlanCoordinates = [
                    { lat: map_data[4] ,lng: map_data[5]},
                    { lat: map_data[6] , lng:map_data[7]},

                ];
                const flightPath = new google.maps.Polyline({
                    path: flightPlanCoordinates,
                    geodesic: false,
                    strokeColor: "#FF0000",
                    strokeOpacity: 1.0,
                    strokeWeight: 1,
                });

                flightPath.setMap(map);
            }

            window.initMap = initMap;

        </script>
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDMT0bAuIQnHEvW-0w4wc3A9xBYu365GEg&callback=initMap" ></script>
@endpush
@endif