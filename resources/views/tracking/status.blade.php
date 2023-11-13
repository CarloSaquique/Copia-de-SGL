@extends('layouts.app')

@section('content')
    {{-- Tracking --}}
    <section class="p-10">
        {{-- No Tracking --}}
        @if(isset($tracking->tracking_number))
            <div class="flex mx-auto w-fit">
                <h3 class="w-fit mr-auto px-44">No.Tracking: {{$tracking->tracking_number}}</h3>
            </div>
        @endif

        {{-- Status --}}
        <div class="w-fit mx-auto flex items-center my-10 space-x-5">
            @if(isset($tracking))
            @foreach ($tracking_status as $key=>$status)
            @if($status)
                <div class="text-center text-xs">
                    <div class="bg-blue-800 mx-auto rounded-full w-fit px-2 h-10 relative
                    text-white flex items-center">
                        <svg class="w-6 h-6 mx-1 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                            <path d="M19 0H1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1ZM2 6v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6H2Zm11 3a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8a1 1 0 0 1 2 0h2a1 1 0 0 1 2 0v1Z"/>
                        </svg>
                        {{$status->state}}
                        {{-- <hr class="border-gray-400 border-4 absolute top-1/2" style="width:30%; left:95%"> --}}
                    </div>
                    <h3>{{$status->created_at}}</h3>
                </div>
            @endif
            @endforeach
            @endif
        </div>

        {{-- Mapa --}}
        <div class="w-10/12 mx-auto rounded-xl h-96" id="map">
        </div>
    </section>
@endsection

@if ($tracking->service == 2)
@push('child-scripts')
        <script type="text/javascript">
            let table =
            {
                'status_1':[0,39.368279,-100.79946,4],
                'status_2':[1,25.783333333333,-80.216666666667,5],
                'status_3':[0,20.632784,-84.341218,5],
                'status_4':[1,14.588196063114736,-90.5304678010414,15],
                'status_5':[1,14.595052542058738,-90.5125500767576,17],
                'status_6':[0,14.610736728586916,-90.5420973515363,10],
                'status_7':[0,14.610736728586916,-90.5420973515363,10],
            }

            let position = 'status_1';
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
            }

            window.initMap = initMap;

        </script>
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDMT0bAuIQnHEvW-0w4wc3A9xBYu365GEg&callback=initMap" ></script>
@endpush
@endif

{{-- @if ($tracking->service == 3)
@push('child-scripts')
        <script type="text/javascript">
            let table =
            {
                'status_1':[0,39.368279,-100.79946,4],
                'status_2':[1,25.783333333333,-80.216666666667,5],
                'status_3':[0,20.632784,-84.341218,5],
                'status_4':[1,14.588196063114736,-90.5304678010414,15],
                'status_5':[1,14.595052542058738,-90.5125500767576,17],
                'status_6':[0,14.610736728586916,-90.5420973515363,10],
                'status_7':[0,14.610736728586916,-90.5420973515363,10],
            }

            let position = 'status_1';
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
            }

            window.initMap = initMap;

        </script>
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDMT0bAuIQnHEvW-0w4wc3A9xBYu365GEg&callback=initMap" ></script>
@endpush
@endif --}}