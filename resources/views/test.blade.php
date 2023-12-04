@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 max-w-sm">
  <div class="rounded overflow-hidden shadow-lg p-5 mt-5 bg-white">
    
  <div class="mb-8">
      <label class="block text-gray-700 text-sm font-bold mb-2">
      Selecciona el servicio.
        <div class="relative">
          <select class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-2xl py-2 px-4 mt-2 block w-full appearance-none leading-normal" id="grid-state">
            <option> P.O BOX</option>
            <option>Todo incluido (proximamente)</option>
          </select>
        </div>
       </label>
     </div>

     <div class="mb-8">
      <label class="block text-gray-700 text-sm font-bold mb-2">
        Valor de mercadería en US$:
        <input class="bg-white border border-gray-300 rounded-2xl py-2 px-4 mt-2 block w-full appearance-none leading-normal" type="input" placeholder="Peso">
       </label>
     </div>

     <div class="mb-8">
      <label class="block text-gray-700 text-sm font-bold mb-2">
      Shipping en US$:
        <input class="bg-white border border-gray-300 rounded-2xl py-2 px-4 mt-2 block w-full appearance-none leading-normal" type="input" placeholder="Peso">
       </label>
     </div>

     <div class="mb-8">
      <label class="block text-gray-700 text-sm font-bold mb-2">
      Peso en libras:
        <input class="bg-white border border-gray-300 rounded-2xl py-2 px-4 mt-2 block w-full appearance-none leading-normal" type="input" placeholder="Peso">
       </label>
     </div>
    
     <div class="mb-8">
      <label class="block text-gray-700 text-sm font-bold mb-2">
        Seleccione una descripcion 
        <div class="relative">
          <select class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-2xl py-2 px-4 mt-2 block w-full appearance-none leading-normal" id="grid-state">
          <option disabled selected class="font-semibold hover:bg-orange-100 text-md p-4">Opciones<option>
            <option>Opcion1</option>
            <option>Opcion2</option>
            <option>Opcion3</option>
            <option>Opcion4</option>
            <option>Opcion5</option>
          </select>
        </div>
       </label>
     </div>
  </div>

  <div class="py-2 px-4 mt-2 block w-full">
  <div class="flex flex-col">
    <label for="pais" class="ml-2 text-blue-700 text-center md:text-md sm:text-lg">Seleccione el punto de origen</label>
    <div class="relative">
      <select class="rounded-2xl p-2 mt-2 mb-0 min-w-full focus:bg-orange-200 text-md border-solid border-2 border-gray-400 transition ease-in duration-200" name="pais" id="pais">
        <option disabled selected class="text-center text-md p-4">Opciones</option>
        <option class="font-semibold  text-md p-2">Cda. Guatemala</option>
        <option class="font-semibold  text-md p-2">Mixco</option>
        <option class="font-semibold  text-md p-2">Palencia</option>
        <option class="font-semibold  text-md p-2">Amatitlan</option>
        <option class="font-semibold  text-md p-2">San Jose Pinula</option>
      </select>
      <button class="bg-blue-300 z-12 hover:bg-blue-700 p-2 mb-0 mt-2 rounded-2xl min-w-full text-blue-200 hover:text-blue-100 border-solid border-2 border-blue-700 transition ease-in duration-200 ">Siguiente</button>
    </div>
  </div>
</div>
</div>


@push('child-scripts')

@endpush


@endsection

