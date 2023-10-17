@extends('layouts.app')

@section('content')

<div class="h-96 w-full">
    <button id="home_cn_btn_quotation_order" type="button" class="wait flex mx-auto mt-5 bg-blue-950 px-4 py-2
    rounded-xl text-white cursor-pointer" >Realizar Orden
        {{-- <div role="status">
            <svg aria-hidden="true" class="w-5 h-5 mr-2  animate-spin text-blue-950 fill-white" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
            </svg>
        </div> --}}
    </button>

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

