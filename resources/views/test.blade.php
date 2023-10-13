@extends('layouts.app')

@section('content')

<div class="h-96 w-full">

    <div class="mx-auto items-center p-10 bg-green-600">
        <button class="upload bg-blue-950 text-white
            rounded-lg px-3 py-2">
            <svg class="w-6 h-6 text-white mx-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="m14.707 4.793-4-4a1 1 0 0 0-1.416 0l-4 4a1 1 0 1 0 1.416 1.414L9 3.914V12.5a1 1 0 0 0 2 0V3.914l2.293 2.293a1 1 0 0 0 1.414-1.414Z"/>
                <path d="M18 12h-5v.5a3 3 0 0 1-6 0V12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
            </svg>
            Subir Archivo
        </button>
        <input type="file" hidden>
    </div>
    <input id="date" type="date">

    {{-- <div class="mx-auto items-center p-10 bg-red-600">
    <svg class="text-green-500 mx-auto bg-blue-800" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 500 500" width="30" height="30">
        <path  d="M257.32,487c-14.61-25.11-27.23-46.77-39.81-68.45-33-56.92-66.64-113.47-98.71-170.9-20.08-36-27.2-74.58-16.59-115.58C123.39,50.21,201.58.9,287.74,15.55,365,28.69,422,103.53,414.56,183.93c-1.45,15.72-5.16,32.53-12.68,46.16C355,315.21,306.74,399.55,257.32,487Zm0-235.28c44.13-.25,80.34-36.82,79.72-80.54-.62-44-37.36-79.9-81.3-79.43s-80.29,37.45-79.59,81C176.91,217.25,212.61,252,257.36,251.73Z"/>
    </svg>
    </div> --}}
</div>


@push('child-scripts')
<script>
    $('#date').change(function(){
        let date1 = new Date();
        date1.setHours(0,0,0,0);
        list_date = this.value.split('-');
        let date2 = new Date(list_date[1]+'-'+list_date[2]+'-'+list_date[0]);
        date2.setHours(0,0,0,0);
        console.log(date1);
        console.log(date2);
        console.log(date2 >= date1);
    });

    $('body').on('click','.upload', function(){
        const input_file  = $(this).nextAll('input').first().focus();
        const button = $(this);
        input_file.click();
        $(input_file).change(function(){
            const filename = (this).files[0].name;
            this.value = "";
            button.next('h3') ? button.next('h3').html(''):false;
            button.after('<h3 class="text-xs font-bold">'+filename+'</h3>');
        });

    });


</script>
@endpush


@endsection

