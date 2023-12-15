@extends('layouts.app')

@section('content')

<section class="mt-3">
  <div>
    
    <div class="text-4xl text-blue-500 bg-gradient-to-r from-blue-500 to-blue-200 mb-4 text-center">
      <h1>Métodos de Pagos.</h1>
    </div>
    


<div class="flex items-center justify-center w-screen min-h-screen p-10">
  <div class="grid xl:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-2 xl:max-w-6xl max-w-4xl">

  <div class="flex bg-blue-200 rounded-lg p-4 m-2 shadow-xl">
			<div class="flex flex-col items-start ml-4">
      <svg width="40" height="40" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M11.25 2.25v1.5h-3V6h-3v4.43l-.633.14v.024c-1.353.293-2.024 1.86-1.312 3.047L4.5 15.656v3.727a3.714 3.714 0 0 1-1.031-.469l-.938 1.172S3.688 21 5.273 21a4.01 4.01 0 0 0 2.227-.633A4.205 4.205 0 0 0 9.773 21 4.01 4.01 0 0 0 12 20.367a4.204 4.204 0 0 0 2.273.633 4.01 4.01 0 0 0 2.227-.633 4.204 4.204 0 0 0 2.273.633c1.585 0 2.696-.914 2.696-.914l-.938-1.172s-.407.325-1.031.492v-3.75l1.195-2.015c.712-1.187.041-2.754-1.312-3.047l-.633-.14V6h-3V3.75h-3v-1.5h-1.5Zm-1.5 3h4.5V7.5h3v2.625l-5.086-1.102L12 9l-.164.023-5.086 1.102V7.5h3V5.25ZM12 10.547l7.055 1.5c.392.085.583.477.375.82l-1.313 2.203-.117.164v4.149c-.606-.17-1.031-.469-1.031-.469l-.469-.375-.469.375s-.753.586-1.758.586c-1.004 0-1.804-.586-1.804-.586L12 18.54l-.469.375s-.753.586-1.758.586c-1.004 0-1.804-.586-1.804-.586L7.5 18.54l-.469.375s-.407.325-1.031.492v-4.172l-.117-.164-1.313-2.203c-.208-.346-.017-.735.375-.82l7.055-1.5ZM8.25 12c-.451 0-.75.524-.75 1.125 0 .6.299 1.125.75 1.125s.75-.524.75-1.125c0-.6-.299-1.125-.75-1.125Zm7.5 0c-.451 0-.75.524-.75 1.125 0 .6.299 1.125.75 1.125s.75-.524.75-1.125c0-.6-.299-1.125-.75-1.125Z"></path></svg>
      <h4 class="text-base">Servicio LCL (Consolidado Marítimo)</h4>
        
				<a class="p-2 ml-auto leading-none rounded-xl font-medium  bg-blue-400 text-xs uppercase" href="#">Click </a>
			</div>
		</div>
    

    <div class="flex bg-blue-200 rounded-lg p-4 m-2 shadow-xl">
			<div class="flex flex-col items-start ml-4">
      <svg width="35" height="35" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M7 19a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"></path>
  <path d="M17 19a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"></path>
  <path d="M13 6h5l3 5v6h-2"></path>
  <path d="M5 17H3v-4"></path>
  <path d="M2 5h11v12"></path>
  <path d="M9 17h6"></path>
  <path d="M3 9h4"></path>
  <path d="M21 11h-8"></path>
</svg>
				<h4 class="text-base">Servicio FCL (Full container Load) </h4>
				<a class="p-2 ml-auto leading-none rounded-xl font-medium mt-3 bg-blue-400 text-xs uppercase" href="#">Click </a>
			</div>
		</div>

    <div class="flex bg-blue-200 rounded-lg p-4 m-2 shadow-xl">
			<div class="flex flex-col items-start ml-4">
      <svg width="30" height="30" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M19.113 9.75c-.128 0-.677.004-.876.015l-2.707.07L9.285 2.25H6.34l3.496 7.716-4.561.068L3.2 7.5H.757l.966 4.415c.007.025.016.05.025.074v.007a.731.731 0 0 0-.025.074L.744 16.5h2.427l2.13-2.578 4.537.102L6.34 21.75h2.953l6.235-7.582 2.708.072c.2.01.75.015.874.015 1.142 0 2.075-.157 2.776-.466 1.188-.523 1.365-1.346 1.365-1.789 0-1.41-1.547-2.25-4.138-2.25Z"></path>
</svg>
				<h4 class="text-base">Servicios Aéreos (Carga General Fletes)</h4>
				<a class="p-2 ml-auto leading-none rounded-xl font-medium mt-3 bg-blue-400 text-xs uppercase" href="#">Click </a>
			</div>
		</div>


    <div class="flex bg-blue-200 rounded-lg p-4 m-2 shadow-xl">
			<div class="flex flex-col items-start ml-4">
      <svg width="30" height="30" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M19.113 9.75c-.128 0-.677.004-.876.015l-2.707.07L9.285 2.25H6.34l3.496 7.716-4.561.068L3.2 7.5H.757l.966 4.415c.007.025.016.05.025.074v.007a.731.731 0 0 0-.025.074L.744 16.5h2.427l2.13-2.578 4.537.102L6.34 21.75h2.953l6.235-7.582 2.708.072c.2.01.75.015.874.015 1.142 0 2.075-.157 2.776-.466 1.188-.523 1.365-1.346 1.365-1.789 0-1.41-1.547-2.25-4.138-2.25Z"></path>
</svg>
				<h4 class="text-base">Servicios Aéreos (Carga General Gastos Locales)</h4>
				<a class="p-2 ml-auto leading-none rounded-xl font-medium mt-3 bg-blue-400 text-xs uppercase" href="#">Click </a>
			</div>
		</div>

    <div class="flex bg-blue-200 rounded-lg p-4 m-2 shadow-xl">
			<div class="flex flex-col items-start ml-4">
      <svg width="40" height="40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M18 6v.01"></path>
  <path d="m18 12.999-3.5-5a4 4 0 1 1 7 0l-3.5 5Z"></path>
  <path d="M10.5 4.75 9 4 3 7v13l6-3 6 3 6-3v-2"></path>
  <path d="M9 4v13"></path>
  <path d="M15 15v5"></path>
</svg>
				<h4 class="text-lg mb-5">Servicios Courier Nacional.</h4>
				<a class="p-2 ml-auto leading-none rounded-xl font-medium mt-3 bg-blue-400 text-xs uppercase" href="#">Click </a>
			</div>
		</div>

    <div class="flex bg-blue-200 rounded-lg p-4 m-2 shadow-xl">
			<div class="flex flex-col items-start ml-4">
      <svg width="35" height="35" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M7 19a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"></path>
  <path d="M17 19a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"></path>
  <path d="M13 6h5l3 5v6h-2"></path>
  <path d="M5 17H3v-4"></path>
  <path d="M2 5h11v12"></path>
  <path d="M9 17h6"></path>
  <path d="M3 9h4"></path>
  <path d="M21 11h-8"></path>
</svg>
				<h4 class="text-base">Servicios Transporte Terrestre (nacional e internacional)</h4>
				<a class="p-2 ml-auto leading-none rounded-xl font-medium mt-3 bg-blue-400 text-xs uppercase" href="#">Click </a>
			</div>
		</div>

		<div class="flex bg-blue-200 rounded-lg p-4 m-2 shadow-xl">
			<div class="flex flex-col items-start ml-4">
      <svg width="40" height="40" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M21.75 12c0-5.385-4.366-9.75-9.75-9.75A9.75 9.75 0 0 0 2.25 12c0 5.384 4.365 9.75 9.75 9.75 5.384 0 9.75-4.366 9.75-9.75Z"></path>
  <path fill="currentColor" stroke="none" d="M20.885 8.066c-.753.005-.678 1.394-1.616.738-.349-.242-.563-.595-1-.703-.382-.093-.774.004-1.151.07-.429.073-.938.107-1.263.431-.314.313-.48.733-.815 1.047-.648.61-.921 1.275-.502 2.136.403.829 1.246 1.278 2.156 1.219.894-.06 1.823-.578 1.797.72-.01.46.087.779.228 1.206.13.394.122.775.152 1.182.055.76.195 1.61.572 2.281l.703-.992c.086-.122.268-.295.31-.44.077-.256-.073-.696-.09-.984-.018-.287-.01-.578-.053-.866-.062-.402-.3-.78-.333-1.178-.06-.74.075-1.332-.496-1.952-.552-.598-1.36-.741-2.132-.62-.389.061-1.955.312-1.326-.578.124-.174.341-.318.48-.484.122-.145.228-.411.37-.524.143-.113.797-.243.984-.185.188.057.384.328.546.448.3.226.651.377 1.023.438.64.094 1.979-.278 1.968-1.1-.002-.393-.367-.941-.512-1.31Z"></path>
  <path fill="currentColor" stroke="none" d="M13.475 14.829c-.25-1.052-1.679-1.404-2.45-1.974-.443-.328-.837-.835-1.418-.876-.269-.02-.493.039-.759-.03-.244-.063-.435-.194-.695-.16-.485.063-.79.582-1.312.512-.495-.067-1.004-.645-1.117-1.117-.144-.605.335-.801.848-.855.215-.023.455-.047.66.031.272.1.4.366.643.5.456.25.548-.15.479-.554-.105-.607-.227-.854.314-1.272.375-.287.696-.496.636-1.013-.036-.303-.202-.44-.047-.743.118-.23.44-.438.651-.575.543-.355 2.327-.328 1.598-1.32-.214-.291-.609-.812-.984-.883-.469-.088-.677.435-1.004.665-.337.239-.994.51-1.332.14-.455-.495.301-.659.469-1.005.167-.346-.388-1.001-.685-1.167L6.572 4.7a1.946 1.946 0 0 0 .391 1.493c.278.358.72.473.74.961.02.469-.053.709-.36 1.039-.132.14-.225.34-.36.472-.166.16-.105.111-.363.155-.485.082-.899.209-1.368.338-.782.216-.854-1.061-1.21-1.562l-1.172.946c-.013.155.192.44.248.61.32.964.966 1.71 1.383 2.632.44.977 1.619.706 2.14 1.562.462.76-.032 1.72.314 2.516.251.577.844.703 1.252 1.125.418.426.41 1.009.473 1.564.072.652.188 1.298.35 1.934.056.22.108.51.258.692.103.125.457.232.314.274.2.032.556.219.722.082.22-.18.161-.734.199-.984.114-.746.487-1.474.99-2.032.498-.55 1.18-.923 1.6-1.547.409-.609.532-1.43.362-2.141Zm-1.565 1.233c-.281.502-.908.838-1.31 1.237-.11.109-.342.484-.479.403-.098-.059-.131-.545-.167-.657a2.867 2.867 0 0 0-1.018-1.404c-.146-.11-.51-.255-.594-.407-.094-.166-.01-.556-.006-.736.005-.263-.115-.7-.05-.938.075-.275-.07-.11.177-.163.13-.03.666.065.828.098.257.054.398.214.6.376.533.426 1.12.757 1.716 1.084.462.256.598.58.303 1.107Z"></path>
  <path fill="currentColor" stroke="none" d="M8.646 3.142c.223.217.432.474.763.495.314.021.61-.149.883.065.304.234.523.53.926.604.39.07.803-.157.9-.556.093-.38-.109-.794-.12-1.175 0-.053.028-.288-.009-.328-.027-.03-.254.004-.289.004a9.707 9.707 0 0 0-3.44.74c.114.078.257.11.386.15Z"></path>
  <path fill="currentColor" stroke="none" d="M16.706 5.774c.398 0 .802-.178.674-.638-.108-.386-.292-.804-.74-.596-.284.132-.687.468-.72.802-.038.379.52.432.786.432Z"></path>
  <path fill="currentColor" stroke="none" d="M16.389 7.795c.406.243 1.01.13 1.316-.218.24-.272.38-.744.811-.744.19 0 .372.074.507.207.178.184.143.357.181.588.085.518.64.03.785-.171.094-.131.221-.325.178-.495-.039-.16-.225-.328-.307-.474-.24-.422-.44-.913-.8-1.254-.348-.328-.774-.29-1.104.051-.27.281-.584.504-.768.846a.743.743 0 0 1-.541.418c-.146.034-.311.047-.433.144-.34.267-.147.91.175 1.102Z"></path>
</svg>
				<h4 class="text-base">Servicios Courier Miami & China</h4>
				<a class="p-2 ml-auto leading-none rounded-xl font-medium mt-3 bg-blue-400 text-xs uppercase" href="#">Click </a>
			</div>
		</div>
		

	</div>
</div>
    


    <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <h1 class="text-3xl font-medium title-font text-gray-900 mb-12 text-center">NOMBRE DE CUENTA: Grupo SGL</h1>
    <div class="flex flex-wrap -m-4">
      <div class="p-4 md:w-1/2 w-full">
        <div class="h-full bg-blue-100 p-8 rounded">         
          <p class="leading-relaxed mb-6">Medios de pago: -Depósito bancario directo -Depósito bancario ACH -Deposito con cheque de caja -Deposito en efectivo -Tarjeta de Crédito</p>
        
          <div class="relative">
      <select class="rounded-2xl p-2 mt-2 mb-0 w-full focus:bg-orange-200 text-md border-solid border-2 border-gray-400 transition ease-in duration-200" name="pais" id="pais">
        <option disabled selected class="text-center text-md p-4">Opciones</option>
        <option class="font-semibold  text-md p-2">Fletes Marítimos</option>
        <option class="font-semibold  text-md p-2">Gastos Locales (Aduana, Manejos, Tramites, cuenta de terceros)</option>
        <option class="font-semibold  text-md p-2">Servicio FCL (Full container Load)</option>
        <option class="font-semibold  text-md p-2">Demoras (Full container Load)</option>
        <option class="font-semibold  text-md p-2">Almacenajes (Generales & Fiscales)</option>
      </select>
      <button class="bg-blue-300 z-12 hover:bg-blue-700 p-2 mb-0 mt-2 rounded-2xl min-w-full text-blue-200 hover:text-blue-100 border-solid border-2 border-blue-700 transition ease-in duration-200 ">Siguiente</button>
    </div>
        
        </div>
      </div>


      
      <div class="p-4 md:w-1/2 w-full">
        <div class="h-full bg-blue-100 p-8 rounded">
          
          <p class="leading-relaxed mb-6"> Fletes Marítimos.</p>
          <p class="leading-relaxed mb-6"> Para realizar los pagos de este servicio después de recibir su factura la cual podrá encontrar en el segmento Estados de Cuenta, deberá de realizar su pago por los medios descritos seleccionando la casilla y adjuntando el comprobante.</p>
          <p class="leading-relaxed mb-6">Cuentas bancarias disponibles:</p>
          <svg class="w-6 h-6 mb-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 7h9.231M1 11h9.231M13 2.086A5.95 5.95 0 0 0 9.615 1C5.877 1 2.846 4.582 2.846 9s3.031 8 6.769 8A5.94 5.94 0 0 0 13 15.916"/>
  </svg>
          <p class="leading-relaxed mb-6">Banco G&T Continental -Monetaria Número de cuenta: 13-1801747-0 -Moneda: US DOLLAR</p>

        </div>
      </div>
    </div>
  </div>
</section>


  </div>
</section>



@push('child-scripts')

@endpush


@endsection