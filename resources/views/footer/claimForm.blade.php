

@extends('layouts.app')

@section('content')
<section class="m-10 bg-white p-5 rounded-xl">
    <h3 class="text-2xl text-center">Formulario de Reclamo</h3>
    <div class="w-full mx-auto p-10 rounded-lg flex justify-evenly">
        <div class="w-1/3 space-y-10">
            <div class="border-b-2">
                <h3 class="text-lg">Escriba el nombre y apellido del asesor que lo atendió</h3>
                <input class="w-full border-transparent focus:border-transparent focus:ring-0" type="text">
            </div>
            <div class="border-b">
                <h3>Seleccione el tipo de servicio que ha adquirido:</h3>
                <select name="" id="" class="w-full border-gray-300 rounded-lg p-2 text-sm">
                    <option value="">Seleccione Una Opción</option>
                    <option value="">LCL</option>
                    <option value="">FCL</option>
                    <option value="">Terrestre</option>
                    <option value="">Aduana</option>
                    <option value="">Aéreo</option>
                    <option value="">Courier</option>
                    <option value="">paquetería nacional</option>
                    <option value="">tramites aduanales</option>
                </select>
            </div>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <style>
                .checked {
                    color: orange;
                }
            </style>
            <div class="border-b text-3xl text-center">
                <h3 class="text-lg text-justify">Considera que su asesor cuenta con conocimientos básicos o profesionales:</h3>
                <h3 class="text-sm text-justify"> Siendo la calificación mas baja 1 y la mas alta 5</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
            <div class="border-b text-3xl text-center">
                <h3 class="text-lg text-justify">Los precios han sido los esperados:</h3>
                <h3 class="text-sm text-justify"> Siendo la calificación mas baja 1 y la mas alta 5</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
        </div>
        <div class="w-1/3 space-y-10">
            <div class="border-b text-3xl text-center">
                <h3 class="text-lg text-justify">El seguimiento ha sido de su satisfacción</h3>
                <h3 class="text-sm text-justify"> Siendo la calificación mas baja 1 y la mas alta 5</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
            <div class="border-b text-3xl text-center">
                <h3 class="text-lg text-justify">Las herramientas de comunicación y trazabilidad le han ayudado a tener control de su carga</h3>
                <h3 class="text-sm text-justify"> Siendo la calificación mas baja 1 y la mas alta 5</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>

            <div class="flex items-center space-x-3">
                <input type="checkbox">
                <h3>Le gustaria ingresar un reclamo personalizado</h3>
            </div>
            <textarea name="" id="" cols="50" rows="5"></textarea>
            <button class="text-white bg-blue-950 px-4 py-2 rounded-xl block ml-auto">Enviar</button>
        </div>
    </div>
</section>

@endsection
