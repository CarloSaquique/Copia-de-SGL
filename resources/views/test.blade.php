@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 max-w-sm">
  <div class="rounded overflow-hidden shadow-lg p-5 mt-5 bg-white">
    
  <div class="mb-8">
       <fieldset class="border-0">
         <legend class="block text-gray-700 mb-2">
           Selecciona el servicio.
         </legend>
         <label class="block text-gray-700 font-bold mb-2">
           <input class="mr-2 leading-tight" type="checkbox">
           <span class="text-sm">
             P.O BOX
           </span>
         </label>
         <label class="block text-gray-700 font-bold mb-2">
           <input class="mr-2 leading-tight" type="checkbox">
           <span class="text-sm">
             Todo incluido (proximamente)
           </span>
         </label>
       </fieldset>
     </div>

     <div class="mb-8">
      <label class="block text-gray-700 text-sm font-bold mb-2">
        Valor de mercadería en US$:
        <input class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" type="input">
       </label>
     </div>

     <div class="mb-8">
      <label class="block text-gray-700 text-sm font-bold mb-2">
      Shipping en US$:
        <input class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" type="input">
       </label>
     </div>

     <div class="mb-8">
      <label class="block text-gray-700 text-sm font-bold mb-2">
      Peso en libras:
        <input class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" type="input">
       </label>
     </div>
    
     <div class="mb-8">
      <label class="block text-gray-700 text-sm font-bold mb-2">
        Seleccione una descripcion 
        <div class="relative">
          <select class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 mt-2 block w-full appearance-none leading-normal" id="grid-state">
            <option>Descripcion</option>
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
</div>

