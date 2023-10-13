@extends('layouts.app')

@section('content')
    <section>
        {{-- Search Bar --}}
        <div class="flex w-full">
            <div class="p-3 flex mx-auto w-11/12 items-center sm:w-9/12">
                <input class="h-7 w-11/12 rounded-xl shadow-2xl
                sm:h-10" type="text">
                <svg class="mx-2 w-6 h-6 text-blue-950" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
        </div>

        {{-- Main --}}
        <div class="flex py-5">
            {{-- Nav Lateral --}}
            <div>
                {{-- Categorias --}}
                <div class="hidden sm:grid p-2 py-5 h-fit text-left shadow-2xl
                    rounded-xl xl:ml-10 border-2">
                    <div class="sm:w-44 md:w-44 lg:56 xl:w-60">
                        <div class="pl-5 pr-1 rounded-xl hover:bg-gray-50 flex items-center">
                            <a class="truncate" href="">
                                Hogar
                            </a>
                            {{-- <svg class=" ml-5 block w-4 h-2 text-gray-800"  fill="none" viewBox="0 0 14 8">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1"/>
                            </svg> --}}
                        </div>
                        {{-- <div class="pl-10">
                            <div class="border-l-2 border-gray-500 ">
                                <a href="">
                                    <div class="pl-2 hover:bg-gray-50 rounded-xl">
                                        Interiores
                                    </div>
                                </a>
                                <a href="">
                                    <div class="pl-2 hover:bg-gray-50 rounded-xl">
                                        Exteriores
                                    </div>
                                </a>
                            </div>
                        </div> --}}
                    </div>

                    <div class="sm:w-44 md:w-44 lg:56 xl:w-60">
                        <a href="">
                            <div class="px-5 py-1 rounded-xl hover:bg-gray-50">
                                Electrónicos
                            </div>
                        </a>
                    </div>

                    <div class="sm:w-44 md:w-44 lg:56 xl:w-60">
                        <a href="">
                            <div class="px-5 py-1 rounded-xl hover:bg-gray-50">
                                Electrónicos
                            </div>
                        </a>
                    </div>

                    <div class="sm:w-44 md:w-44 lg:56 xl:w-60">
                        <a href="">
                            <div class="px-5 py-1 rounded-xl hover:bg-gray-50">
                                Electrónicos
                            </div>
                        </a>
                    </div>

                    <div class="sm:w-44 md:w-44 lg:56 xl:w-60">
                        <a href="">
                            <div class="px-5 py-1 rounded-xl hover:bg-gray-50">
                                Electrónicos
                            </div>
                        </a>
                    </div>

                    <div class="sm:w-44 md:w-44 lg:56 xl:w-60">
                        <a href="">
                            <div class="px-5 py-1 rounded-xl hover:bg-gray-50">
                                Electrónicos
                            </div>
                        </a>
                    </div>
                </div>

                {{-- Marcas  --}}
                <div class="hidden mt-10 sm:grid p-2 h-fit text-left shadow-2xl
                   rounded-xl xl:ml-10 border-2">

                    <div class="p-5 flex flex-col sm:w-44 md:w-44 lg:56 xl:w-60
                        text-center">
                        <h3 class="flex items-center rounded-xl mb-2.5 font-bold">
                            Marca
                        </h3>
                        <div class="flex items-center">
                            <input type="checkbox">
                            <span class="ml-2.5">Marca #1 </span>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox">
                            <span class="ml-2.5">Marca #2 </span>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox">
                            <span class="ml-2.5">Marca #3 </span>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox">
                            <span class="ml-2.5">Marca #4 </span>
                        </div>
                        <button class="mt-5 border-2 border-gray-100 shadow-2xl p-1">Aplicar</button>
                    </div>
                </div>

                {{-- Precio --}}
                <div class="hidden mt-10 sm:grid p-2 h-fit text-left shadow-2xl
                   rounded-xl xl:ml-10 border-2">

                    <div class="p-5 flex flex-col sm:w-44 md:w-44 lg:56 xl:w-60
                        text-center">
                        <h3 class="flex items-center rounded-xl mb-2.5 font-bold">
                            Precio
                        </h3>
                        <span class="mx-auto">Min: 500</span>
                        <input type="range">
                        <div class="flex">
                            <span class="mr-auto">0</span>
                            <span class="ml-auto">1000</span>
                        </div>
                        <span class="mx-auto">Max: 500</span>
                        <input type="range">
                        <div class="flex">
                            <span class="mr-auto">0</span>
                            <span class="ml-auto">1000</span>
                        </div>

                        <button class="mt-5 border-2 border-gray-100 shadow-2xl p-1">Aplicar</button>
                    </div>
                </div>
            </div>

            {{-- Products --}}
            <div class="mx-auto w-12/12 sm:8/12">
                {{-- Categorias --}}

                <div class="mx-auto w-fit mb-10 grid gap-2  grid-cols-2 md:grid-cols-3 lg:grid-cols-4 lg:gap-7">
                    <div class="w-36 rounded-lg shadow-2xl text-center border-2">
                        <img class="rounded-lg" src="../images/test.jpeg" alt="">
                        <span class="font-bold ">Electronicos</span>
                    </div>
                    <div class="w-36 rounded-lg shadow-2xl text-center border-2">
                        <img class="rounded-lg" src="../images/test.jpeg" alt="">
                        <span class="font-bold ">Electronicos</span>
                    </div>
                    <div class="hidden w-36 rounded-lg shadow-2xl text-center border-2 md:grid ">
                        <img class="rounded-lg" src="../images/test.jpeg" alt="">
                        <span class="font-bold ">Electronicos</span>
                    </div>
                    <div class="hidden w-36 rounded-lg shadow-2xl text-center border-2 lg:grid">
                        <img class="rounded-lg" src="../images/test.jpeg" alt="">
                        <span class="font-bold ">Electronicos</span>
                    </div>
                </div>

                {{-- Product List --}}
                <div class="w-fit grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-4 lg:gap-6 xl:grid-cols-4 2xl:grid-cols-6">
                    <div class=" relative w-44 h-fit mx-1 mt-5 rounded-md border-2 shadow-2xl text-center">
                        <img  class=" " src="../images/test.jpeg" alt="">
                        <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                        <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                        <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                        <div class="flex px-2">
                            <div class="ml-auto w-fit text-green-700 font-bold">
                                <span class="">-20%</span>
                            </div>
                            <div class="ml-auto w-fit font-bold">
                                <span style="text-decoration:line-through;">Q9,500.00</span>
                            </div>
                        </div>
                        <div class="flex font-bold">
                            <div class="w-fit ml-2  items-center grid">
                                <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                                  </svg>
                            </div>
                            <div class="w-fit ml-auto mr-2 text-center py-2.5">
                                <span class="">Q5,700.00</span>
                            </div>
                        </div>
                    </div>
                    <div class=" relative w-44 h-fit mx-1 mt-5 rounded-md border-2 shadow-2xl text-center">
                        <img  class=" " src="../images/test.jpeg" alt="">
                        <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                        <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                        <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                        <div class="flex px-2">
                            <div class="ml-auto w-fit text-green-700 font-bold">
                                <span class="">-20%</span>
                            </div>
                            <div class="ml-auto w-fit font-bold">
                                <span style="text-decoration:line-through;">Q9,500.00</span>
                            </div>
                        </div>
                        <div class="flex font-bold">
                            <div class="w-fit ml-2  items-center grid">
                                <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                                  </svg>
                            </div>
                            <div class="w-fit ml-auto mr-2 text-center py-2.5">
                                <span class="">Q5,700.00</span>
                            </div>
                        </div>
                    </div>
                    <div class=" relative w-44 h-fit mx-1 mt-5 rounded-md border-2 shadow-2xl text-center">
                        <img  class=" " src="../images/test.jpeg" alt="">
                        <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                        <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                        <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                        <div class="flex px-2">
                            <div class="ml-auto w-fit text-green-700 font-bold">
                                <span class="">-20%</span>
                            </div>
                            <div class="ml-auto w-fit font-bold">
                                <span style="text-decoration:line-through;">Q9,500.00</span>
                            </div>
                        </div>
                        <div class="flex font-bold">
                            <div class="w-fit ml-2  items-center grid">
                                <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                                  </svg>
                            </div>
                            <div class="w-fit ml-auto mr-2 text-center py-2.5">
                                <span class="">Q5,700.00</span>
                            </div>
                        </div>
                    </div>
                    <div class=" relative w-44 h-fit mx-1 mt-5 rounded-md border-2 shadow-2xl text-center">
                        <img  class=" " src="../images/test.jpeg" alt="">
                        <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                        <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                        <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                        <div class="flex px-2">
                            <div class="ml-auto w-fit text-green-700 font-bold">
                                <span class="">-20%</span>
                            </div>
                            <div class="ml-auto w-fit font-bold">
                                <span style="text-decoration:line-through;">Q9,500.00</span>
                            </div>
                        </div>
                        <div class="flex font-bold">
                            <div class="w-fit ml-2  items-center grid">
                                <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                                  </svg>
                            </div>
                            <div class="w-fit ml-auto mr-2 text-center py-2.5">
                                <span class="">Q5,700.00</span>
                            </div>
                        </div>
                    </div>
                    <div class=" relative w-44 h-fit mx-1 mt-5 rounded-md border-2 shadow-2xl text-center">
                        <img  class=" " src="../images/test.jpeg" alt="">
                        <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                        <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                        <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                        <div class="flex px-2">
                            <div class="ml-auto w-fit text-green-700 font-bold">
                                <span class="">-20%</span>
                            </div>
                            <div class="ml-auto w-fit font-bold">
                                <span style="text-decoration:line-through;">Q9,500.00</span>
                            </div>
                        </div>
                        <div class="flex font-bold">
                            <div class="w-fit ml-2  items-center grid">
                                <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                                  </svg>
                            </div>
                            <div class="w-fit ml-auto mr-2 text-center py-2.5">
                                <span class="">Q5,700.00</span>
                            </div>
                        </div>
                    </div>
                    <div class=" relative w-44 h-fit mx-1 mt-5 rounded-md border-2 shadow-2xl text-center">
                        <img  class=" " src="../images/test.jpeg" alt="">
                        <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                        <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                        <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                        <div class="flex px-2">
                            <div class="ml-auto w-fit text-green-700 font-bold">
                                <span class="">-20%</span>
                            </div>
                            <div class="ml-auto w-fit font-bold">
                                <span style="text-decoration:line-through;">Q9,500.00</span>
                            </div>
                        </div>
                        <div class="flex font-bold">
                            <div class="w-fit ml-2  items-center grid">
                                <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                                  </svg>
                            </div>
                            <div class="w-fit ml-auto mr-2 text-center py-2.5">
                                <span class="">Q5,700.00</span>
                            </div>
                        </div>
                    </div>
                    <div class=" relative w-44 h-fit mx-1 mt-5 rounded-md border-2 shadow-2xl text-center">
                        <img  class=" " src="../images/test.jpeg" alt="">
                        <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                        <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                        <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                        <div class="flex px-2">
                            <div class="ml-auto w-fit text-green-700 font-bold">
                                <span class="">-20%</span>
                            </div>
                            <div class="ml-auto w-fit font-bold">
                                <span style="text-decoration:line-through;">Q9,500.00</span>
                            </div>
                        </div>
                        <div class="flex font-bold">
                            <div class="w-fit ml-2  items-center grid">
                                <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                                  </svg>
                            </div>
                            <div class="w-fit ml-auto mr-2 text-center py-2.5">
                                <span class="">Q5,700.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Products Navigation --}}
        <div class="mt-5 w-full flex">
            <div class="w-3/12 p-1">

            </div>
            <div class="w-8/12 text-center">
                <div class="p-2 font-bold text-blue-400 w-fit mx-auto">
                    <a href=""><span>1</span></a>
                    <a class="text-blue-950" href=""><span>2</span></a>
                    <a href=""><span>3</span></a>
                    <a href=""><span>...</span></a>
                    <a href=""><span>9</span></a>
                </div>
            </div>
        </div>

        {{-- Mejores Ofertas--}}
        <div class="mt-10 mb-10 hidden mx-auto w-12/12 sm:8/12 sm:flex">
            <h3 class="ml-2 font-bold">Productos Relacionados</h3>
            <div class="ml-5 mr-10 grid grid-cols-2 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 lg:gap-6 ">
                <div class=" relative w-40 h-fit mx-1 mt-5 rounded-md  shadow-2xl border-2 text-center">
                    <img  class=" " src="../images/test.jpeg" alt="">
                    <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                    <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                    <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                    <div class="flex px-2">
                        <div class="ml-auto w-fit text-green-700 font-bold">
                            <span class="">-20%</span>
                        </div>
                        <div class="ml-auto w-fit font-bold">
                            <span style="text-decoration:line-through;">Q9,500.00</span>
                        </div>
                    </div>
                    <div class="flex font-bold">
                        <div class="w-fit ml-2  items-center grid">
                            <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                              </svg>
                        </div>
                        <div class="w-fit ml-auto mr-2 text-center py-2.5">
                            <span class="">Q5,700.00</span>
                        </div>
                    </div>
                </div>
                <div class=" relative w-40 h-fit mx-1 mt-5 rounded-md  shadow-2xl border-2 text-center">
                    <img  class=" " src="../images/test.jpeg" alt="">
                    <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                    <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                    <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                    <div class="flex px-2">
                        <div class="ml-auto w-fit text-green-700 font-bold">
                            <span class="">-20%</span>
                        </div>
                        <div class="ml-auto w-fit font-bold">
                            <span style="text-decoration:line-through;">Q9,500.00</span>
                        </div>
                    </div>
                    <div class="flex font-bold">
                        <div class="w-fit ml-2  items-center grid">
                            <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                              </svg>
                        </div>
                        <div class="w-fit ml-auto mr-2 text-center py-2.5">
                            <span class="">Q5,700.00</span>
                        </div>
                    </div>
                </div>
                <div class="hidden relative w-40 h-fit mx-1 mt-5 rounded-md  shadow-2xl border-2 text-center md:grid">
                    <img  class=" " src="../images/test.jpeg" alt="">
                    <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                    <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                    <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                    <div class="flex px-2">
                        <div class="ml-auto w-fit text-green-700 font-bold">
                            <span class="">-20%</span>
                        </div>
                        <div class="ml-auto w-fit font-bold">
                            <span style="text-decoration:line-through;">Q9,500.00</span>
                        </div>
                    </div>
                    <div class="flex font-bold">
                        <div class="w-fit ml-2  items-center grid">
                            <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                              </svg>
                        </div>
                        <div class="w-fit ml-auto mr-2 text-center py-2.5">
                            <span class="">Q5,700.00</span>
                        </div>
                    </div>
                </div>
                <div class="hidden relative w-40 h-fit mx-1 mt-5 rounded-md  shadow-2xl border-2 text-center lg:grid">
                    <img  class=" " src="../images/test.jpeg" alt="">
                    <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                    <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                    <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                    <div class="flex px-2">
                        <div class="ml-auto w-fit text-green-700 font-bold">
                            <span class="">-20%</span>
                        </div>
                        <div class="ml-auto w-fit font-bold">
                            <span style="text-decoration:line-through;">Q9,500.00</span>
                        </div>
                    </div>
                    <div class="flex font-bold">
                        <div class="w-fit ml-2  items-center grid">
                            <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                              </svg>
                        </div>
                        <div class="w-fit ml-auto mr-2 text-center py-2.5">
                            <span class="">Q5,700.00</span>
                        </div>
                    </div>
                </div>
                <div class="hidden relative w-40 h-fit mx-1 mt-5 rounded-md  shadow-2xl border-2 text-center lg:grid">
                    <img  class=" " src="../images/test.jpeg" alt="">
                    <span class="text-green-600 font-bold absolute top-2.5 right-1">Black -10%</span>
                    <img class="w-16 h-12 absolute top-0 left-0" src="../images/asus.jpg" alt="">

                    <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                    <div class="flex px-2">
                        <div class="ml-auto w-fit text-green-700 font-bold">
                            <span class="">-20%</span>
                        </div>
                        <div class="ml-auto w-fit font-bold">
                            <span style="text-decoration:line-through;">Q9,500.00</span>
                        </div>
                    </div>
                    <div class="flex font-bold">
                        <div class="w-fit ml-2  items-center grid">
                            <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 10.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 0a2.225 2.225 0 0 0-1.666.75H12m3.5-.75a2.225 2.225 0 0 1 1.666.75H19V7m-7 4V3h5l2 4m-7 4H6.166a2.225 2.225 0 0 0-1.666-.75M12 11V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v9h1.834a2.225 2.225 0 0 1 1.666-.75M19 7h-6m-8.5 3.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                              </svg>
                        </div>
                        <div class="w-fit ml-auto mr-2 text-center py-2.5">
                            <span class="">Q5,700.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

