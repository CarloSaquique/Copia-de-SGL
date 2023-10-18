@extends('layouts.app')

@section('content')
<section class="text-center mx-auto">
    <div class="py-20 opacity-80" style="background-image: url({{asset('images/footer/nuestra_historia.jpg')}}); background-size: cover;">
        <span class="font-bold text-5xl lg:text-6xl text-white">Nuestra Historia</span>
    </div>

    <div class="text-justify my-10 px-5 items-center space-y-2 lg:flex sm:px-16 md:px-32 lg:px-16 xl:px-52 2xl:px-[450px]">
        <div class="lg:w-1/2 space-y-5">
            <h3 class="font-bold text-2xl">Nuestros Inicios</h3>
            <p class="text-lg">
                Fundada por nuestro CEO Alexander Galindo en Abril del año 2015 con la idea de desarrollar
                servicios logisticos a escala internacional que acerquen el comercio en la region Centroamericana
                y del Caribe, desarrollando Hub´s logisticos en las principales ciudades del mundo.
                Garantizando con esto una certeza juridica para todos nuestros usuarios.
            </p>
        </div>
        <div class="lg:w-1/2">
            <img class="rounded-lg mx-auto md:w-4/6 lg:w-5/6" src="{{asset('images/footer/nuestros_inicios.jpg')}}">
        </div>
    </div>


    <div class="bg-gray-300 py-10 text-justify my-10 px-5 items-center space-y-2 lg:flex sm:px-16 md:px-32 lg:px-16 xl:px-52 2xl:px-[450px]">
        <div class="lg:w-1/2">
            <img class="rounded-lg mx-auto md:w-4/6 lg:w-5/6" src="{{asset('images/footer/modalidad_de_trabajo.jpg')}}">
        </div>
        <div class="lg:w-1/2 space-y-5">
            <h3 class="font-bold text-2xl">Modalidad De Trabajo</h3>
            <p class="text-lg">
                La modalidad de trabajo que adopta Grupo SGL es principalmente la de OOC (Own Operator Forwarder)
                una idea basada en servicios con la minima participacion de terceros en cada traslado que
                garantiza la viabilidad, confianza y sobre todo la reducion de costos marginales para el cliente final,
                por su enfoque en la reduccion de manejo y optimizando las rutas directas con servicios seleccionados
                que acercan de manera inmediata los mercados principales.
            </p>
        </div>
    </div>

    <div class="text-justify my-10 px-5 items-center space-y-2 lg:flex sm:px-16 md:px-32 lg:px-16 xl:px-52 2xl:px-[450px]">
        <div class="lg:w-1/2 space-y-5">
            <h3 class="font-bold text-2xl">Nuestra ideologia</h3>
            <p class="text-lg">
                Nuestra ideologia principal de servicio se cimento desde los inicios en la satisfacción continua
                de nuestros clientes por medio de sistemas de gestion de calidad y seguridad que nos hagan mantener
                una mejora continua en la cual no solo nuestros clientes externos se sientan importantes y acogidos
                con servicios de calidad sino tambien nuestros clientes internos quienes cada dia optimizan y mejoran
                sus tareas en favor del bien comun.
            </p>
        </div>
        <div class="lg:w-1/2">
            <img class="rounded-lg mx-auto md:w-4/6 lg:w-5/6" src="{{asset('images/footer/nuestra_ideologia.jpg')}}">
        </div>
    </div>

    <div class="text-2xl my-20 max-w-lg mx-auto">
        <p>
            Nacimos como una empresa joven y progresista que busca en la diversidad la
            perfeccion de nuestros estandares.
        </p>
    </div>

</section>
@endsection