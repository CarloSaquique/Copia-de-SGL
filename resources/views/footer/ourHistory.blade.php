@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/src/output.css" rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <div class="container mt-10 mx-auto p-4 md:p-0">
    <div class="shadow-lg flex flex-wrap w-full lg:w-1/2 mx-auto ">
      <div class="bg-cover bg-bottom border w-full md:w-1/3 h-64 md:h-auto relative"
        style="background-image:url('https://www.gruposgl.com/images/footer/nuestros_inicios.jpg')">
        <div class="absolute text-xl">
        </div>
      </div>
      <div class="bg-gradient-to-r from-blue-800 to-blue-400 w-full md:w-2/3">
        <div class="h-full mx-auto px-6 md:px-0 md:pt-6 md:-ml-6 relative">

          <div
            class="bg-white lg:h-full p-6 -mt-6 md:mt-0 relative mb-4 md:mb-0 flex flex-wrap md:flex-wrap items-center">

            <div class="w-full lg:w-1/2 lg:border-right lg:border-solid text-center md:text-left">
              <h3>Nuestros inicios:</h3>
              <hr class="w-1/4 md:ml-0 mt-4  border lg:hidden">
            </div>

            <div class="w-full lg:w-5/5 lg:px-3 text-justify">
              <p class="text-md mt-4 lg:mt-0 text-justify md:text-left text-sm ">Fundada por nuestro CEO Alexander
                Galindo en Abril del año 2015
                con la idea de desarrollar servicios logísticos a escala internacional que acerquen el comercio en la
                región Centroamericana y del Caribe,
                desarrollando Hubs logísticos en las principales ciudades del mundo.
                Garantizando con esto una certeza jurídica para todos nuestros usuarios.</p>
            </div>

          </div>

        </div>

      </div>

    </div>
  </div>
</body>


<div class="container mt-10 mx-auto p-4 md:p-0">

  <div class="shadow-lg flex flex-wrap w-full lg:w-1/2 mx-auto ">

    <div class="bg-cover bg-bottom border w-full md:w-1/3 h-64 md:h-auto relative"
      style="background-image:url('https://www.gruposgl.com/images/footer/modalidad_de_trabajo.jpg')">
      <div class="absolute text-xl">
      </div>
    </div>

    <div class="bg-gradient-to-r from-blue-800 to-blue-400 w-full md:w-2/3">
      <div class="h-full mx-auto px-6 md:px-0 md:pt-6 md:-ml-6 relative">
        <div
          class="bg-white lg:h-full p-6 -mt-6 md:mt-0 relative mb-4 md:mb-0 flex flex-wrap md:flex-wrap items-center">
          <div class="w-full lg:w-1/2 lg:border-right lg:border-solid text-center md:text-left">
            <h3>Modalidad De Trabajo:</h3>
            <hr class="w-1/4 md:ml-0 mt-4  border lg:hidden">
          </div>

          <div class="w-full lg:w-5/5 lg:px-3 text-justify">
            <p class="text-md mt-4 lg:mt-0 text-justify md:text-left text-sm ">La modalidad de trabajo que adopta Grupo
              SGL es principalmente la de OOC (Own Operator Forwarder) una idea basada en servicios con la mínima
              participación de terceros en cada traslado que garantiza la viabilidad, confianza y sobre todo la
              reducción de costos marginales para el cliente final, por su enfoque en la reducción de manejo y
              optimizando las rutas directas con servicios seleccionados que acercan de manera inmediata los mercados
              principales.</p>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div class="container mt-10 mx-auto p-4 md:p-0">

  <div class="shadow-lg flex flex-wrap w-full lg:w-1/2 mx-auto ">

    <div class="bg-cover bg-bottom border w-full md:w-1/3 h-64 md:h-auto relative"
      style="background-image:url('https://www.gruposgl.com/images/footer/nuestra_ideologia.jpg')">
      <div class="absolute text-xl">
      </div>
    </div>

    <div class="bg-gradient-to-r from-blue-800 to-blue-400 w-full md:w-2/3">

      <div class="h-full mx-auto px-6 md:px-0 md:pt-6 md:-ml-6 relative">
        <div
          class="bg-white lg:h-full p-6 -mt-6 md:mt-0 relative mb-4 md:mb-0 flex flex-wrap md:flex-wrap items-center">
          <div class="w-full lg:w-1/2 lg:border-right lg:border-solid text-center md:text-left">
            <h3>Nuestra ideología:</h3>
            <hr class="w-1/4 md:ml-0 mt-4  border lg:hidden">
          </div>

          <div class="w-full lg:w-5/5 lg:px-3 text-justify">
            <p class="text-md mt-4 lg:mt-0 text-justify md:text-left text-sm ">Nuestra ideología principal de servicio
              se cimento desde los inicios en la satisfacción continua de nuestros clientes por medio de sistemas de
              gestión de calidad y seguridad que nos hagan mantener una mejora continua en la cual no solo nuestros
              clientes externos se sientan importantes y acogidos con servicios de calidad sino también nuestros
              clientes internos quienes cada día optimizan y mejoran sus tareas en favor del bien común.</p>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div class="mt-5 text-center p-5 w-3/12 mx-auto text-lg ">
  <h3>Nacimos como una empresa joven y progresista que busca en la diversidad la perfección de nuestros estándares.</h3>
</div>

</body>


</html>
@endsection