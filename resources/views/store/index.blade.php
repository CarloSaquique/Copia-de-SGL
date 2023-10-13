@extends('layouts.app')

@section('content')
    <section>
        {{-- Banner Horizontal --}}
        <div class="mt-5 px-5 w-full mx-auto  text-center items-center">
            <div class="w-full  rounded-xl">
                <img class="rounded-xl w-full h-16" src="../images/banner_horizontal.jpg" alt="">
            </div>
        </div>

        {{-- Image Store--}}
        <div class="flex relative p-5">
            <div class="w-11/12 mx-auto ">
                <img width="100%" class="rounded-xl" src="../images/store.jpg" alt="">
            </div>
        </div>

        {{-- Mas Populares --}}
        <div class="w-11/12 mx-auto p-5 flex border-2 border-gray-300 ">
            <h3 class="w-fit mx-auto font-bold text-xl">Mas Populares</h3>
            <div class="flex mx-auto ">
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

        {{-- Categorias --}}
        <div class="w-full p-5 flex">
            <div class="flex mx-auto">
                <div class="w-36 h-fit mx-10 rounded-lg shadow-2xl border-gray-300 border-2 text-center ">
                    <img class="rounded-lg h-28 mx-auto" src="../images/amazon.png" alt="">
                    <span class="font-bold "></span>
                </div>
                <div class="w-36 h-fit mx-10 rounded-lg shadow-2xl border-gray-300 border-2 text-center ">
                    <img class="rounded-lg h-28 mx-auto" src="../images/ebay.png" alt="">
                    <span class="font-bold "></span>
                </div>
                <div class="w-36 h-fit mx-10 rounded-lg shadow-2xl border-gray-300 border-2 text-center ">
                    <img class="rounded-lg  h-28 mx-auto" src="../images/alibaba.png" alt="">
                    <span class="font-bold "></span>
                </div>
                <div class="w-36 h-fit mx-10 rounded-lg shadow-2xl border-gray-300 border-2 text-center ">
                    <img class="rounded-lg h-28 mx-auto" src="../images/aliexpress.png" alt="">
                    <span class="font-bold "></span>
                </div>

            </div>
        </div>

        {{-- Productos --}}
        <div class="w-full mx-auto">
            <div class="w-fit mx-auto flex ">
                    <div class="h-auto ml-2.5 mr-16 w-40 bg-blue-700 rounded-xl">
                        <img src="../images/banner_left.jpg" alt="">
                    </div>
                    <div class="mx-1">
                        <div class=" relative w-44 h-fit mx-1 mt-5 rounded-md  shadow-2xl text-center">
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
                        <div class=" relative w-44 h-fit mx-1 mt-5 rounded-md  shadow-2xl text-center">
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
                    <div class="mx-1">
                        <div class=" relative w-44 h-fit mx-1 mt-5 rounded-md  shadow-2xl text-center">
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
                        <div class=" relative w-44 h-fit mx-1 mt-5 rounded-md  shadow-2xl text-center">
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
                    <div class="mx-1">
                        <div class=" relative w-44 h-fit mx-1 mt-5 rounded-md  shadow-2xl text-center">
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
                        <div class=" relative w-44 h-fit mx-1 mt-5 rounded-md  shadow-2xl text-center">
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
                    <div class="mx-1">
                        <div class=" relative w-44 h-fit mx-1 mt-5 rounded-md  shadow-2xl text-center">
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
                        <div class=" relative w-44 h-fit mx-1 mt-5 rounded-md  shadow-2xl text-center">
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
                    <div class="h-auto ml-16 mr-2 w-40 bg-blue-700 rounded-xl">
                        <img src="../images/banner_right.jpg" alt="">
                    </div>
            </div>
        </div>

        {{-- Black friday --}}
        <div class="flex relative p-5">
            <div class="w-1/2 p-5">
                <img class="rounded-xl" src="../images/black.jpg" alt="">
            </div>
            <div class="w-1/2 p-5">
                <img class="rounded-xl" src="../images/black.jpg" alt="">
            </div>
        </div>

        {{-- Liquidación --}}
        <div class="w-11/12 mx-auto p-5 flex border-2 border-gray-300 ">
            <h3 class="w-fit mx-auto font-bold text-xl">Liquidación</h3>
            <div class="flex mx-auto ">
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

        {{-- Black friday --}}
        <div class="flex relative p-5">
            <div class="w-1/2 p-5">
                <img class="rounded-xl" src="../images/black.jpg" alt="">
            </div>
            <div class="w-1/2 p-5">
                <img class="rounded-xl" src="../images/black.jpg" alt="">
            </div>
        </div>

        {{-- Categorias --}}
        <div class="w-full p-5 flex">
            <div class="flex mx-auto">
                <div class="w-36 h-fit mx-10 rounded-lg shadow-2xl border-gray-300 border-2 text-center ">
                    <img class="rounded-lg h-28 mx-auto" src="../images/amazon.png" alt="">
                    <span class="font-bold "></span>
                </div>
                <div class="w-36 h-fit mx-10 rounded-lg shadow-2xl border-gray-300 border-2 text-center ">
                    <img class="rounded-lg h-28 mx-auto" src="../images/ebay.png" alt="">
                    <span class="font-bold "></span>
                </div>
                <div class="w-36 h-fit mx-10 rounded-lg shadow-2xl border-gray-300 border-2 text-center ">
                    <img class="rounded-lg  h-28 mx-auto" src="../images/alibaba.png" alt="">
                    <span class="font-bold "></span>
                </div>
                <div class="w-36 h-fit mx-10 rounded-lg shadow-2xl border-gray-300 border-2 text-center ">
                    <img class="rounded-lg h-28 mx-auto" src="../images/aliexpress.png" alt="">
                    <span class="font-bold "></span>
                </div>

            </div>
        </div>

        {{-- Liquidación --}}
        <div class="w-11/12 mx-auto p-5 flex border-2 border-gray-300 ">
            <h3 class="w-fit mx-auto font-bold text-xl">Liquidación</h3>
            <div class="flex mx-auto ">
                <div class="w-44 h-fit mx-1 rounded-md  border-gray-300 border-2 text-center">
                    <img  class=" " src="../images/test.jpeg" alt="">
                    <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                    <div class="flex px-2">
                        <div class="mr-auto w-fit text-green-700 font-bold">
                            <span class="">-20%</span>
                        </div>
                        <div class="ml-auto w-fit font-bold">
                            <span style="text-decoration:line-through;">Q9,500.00</span>
                        </div>
                    </div>
                    <div class="ml-auto w-fit font-bold px-2">
                        <span class="">Q7,600.00</span>
                    </div>
                </div>
                <div class="w-44 h-fit mx-1 rounded-md  border-gray-300 border-2 text-center">
                    <img  class=" " src="../images/test.jpeg" alt="">
                    <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                    <div class="flex px-2">
                        <div class="mr-auto w-fit text-green-700 font-bold">
                            <span class="">-20%</span>
                        </div>
                        <div class="ml-auto w-fit font-bold">
                            <span style="text-decoration:line-through;">Q9,500.00</span>
                        </div>
                    </div>
                    <div class="ml-auto w-fit font-bold px-2">
                        <span class="">Q7,600.00</span>
                    </div>
                </div>
                <div class="w-44 h-fit mx-1 rounded-md  border-gray-300 border-2 text-center">
                    <img  class=" " src="../images/test.jpeg" alt="">
                    <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                    <div class="flex px-2">
                        <div class="mr-auto w-fit text-green-700 font-bold">
                            <span class="">-20%</span>
                        </div>
                        <div class="ml-auto w-fit font-bold">
                            <span style="text-decoration:line-through;">Q9,500.00</span>
                        </div>
                    </div>
                    <div class="ml-auto w-fit font-bold px-2">
                        <span class="">Q7,600.00</span>
                    </div>
                </div>
                <div class="w-44 h-fit mx-1 rounded-md  border-gray-300 border-2 text-center">
                    <img  class=" " src="../images/test.jpeg" alt="">
                    <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                    <div class="flex px-2">
                        <div class="mr-auto w-fit text-green-700 font-bold">
                            <span class="">-20%</span>
                        </div>
                        <div class="ml-auto w-fit font-bold">
                            <span style="text-decoration:line-through;">Q9,500.00</span>
                        </div>
                    </div>
                    <div class="ml-auto w-fit font-bold px-2">
                        <span class="">Q7,600.00</span>
                    </div>
                </div>
                <div class="w-44 h-fit mx-1 rounded-md  border-gray-300 border-2 text-center">
                    <img  class=" " src="../images/test.jpeg" alt="">
                    <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                    <div class="flex px-2">
                        <div class="mr-auto w-fit text-green-700 font-bold">
                            <span class="">-20%</span>
                        </div>
                        <div class="ml-auto w-fit font-bold">
                            <span style="text-decoration:line-through;">Q9,500.00</span>
                        </div>
                    </div>
                    <div class="ml-auto w-fit font-bold px-2">
                        <span class="">Q7,600.00</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Imagen 3--}}
        <div class="flex relative mt-5 p-5">
            {{-- <img class="rounded-xl" src="//gruposgl.com/wp-content/uploads/2023/05/INDIA.jpg" alt=""> --}}
            <img class="rounded-xl " src="//gruposgl.com/wp-content/uploads/2023/06/PORTADA-AMAZON.jpg" alt="">
            {{-- <img class="rounded-xl" src="//gruposgl.com/wp-content/uploads/2022/02/Slider-principal-SGL-1.png" alt=""> --}}
            {{-- <img class="rounded-xl" src="//gruposgl.com/wp-content/uploads/2022/02/Slider-principal-SGL-2.png" alt=""> --}}
            {{-- //gruposgl.com/wp-content/uploads/2022/02/Slider-principal-SGL-1.png
            //gruposgl.com/wp-content/uploads/2022/02/Slider-principal-SGL-2.png --}}

        </div>

        {{-- Categorias --}}
        <div class="w-full p-5 flex">
            <div class="flex mx-auto">
                <div class="w-36 h-fit mx-10 rounded-lg shadow-2xl border-gray-300 border-2 text-center ">
                    <img class="rounded-lg" src="../images/test.jpeg" alt="">
                    <span class="font-bold ">Electronicos</span>
                </div>
                <div class="w-36 h-fit mx-10 rounded-lg shadow-2xl border-gray-300 border-2 text-center ">
                    <img class="rounded-lg" src="../images/test.jpeg" alt="">
                    <span class="font-bold ">Electronicos</span>
                </div>
                <div class="w-36 h-fit mx-10 rounded-lg shadow-2xl border-gray-300 border-2 text-center ">
                    <img class="rounded-lg" src="../images/test.jpeg" alt="">
                    <span class="font-bold ">Electronicos</span>
                </div>
                <div class="w-36 h-fit mx-10 rounded-lg shadow-2xl border-gray-300 border-2 text-center ">
                    <img class="rounded-lg" src="../images/test.jpeg" alt="">
                    <span class="font-bold ">Electronicos</span>
                </div>

            </div>
        </div>

        {{-- Liquidación --}}
        <div class="w-11/12 mx-auto p-5 flex border-2 border-gray-300 ">
            <h3 class="w-fit mx-auto font-bold text-xl">Liquidación</h3>
            <div class="flex mx-auto ">
                <div class="w-44 h-fit mx-1 rounded-md  border-gray-300 border-2 text-center">
                    <img  class=" " src="../images/test.jpeg" alt="">
                    <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                    <div class="flex px-2">
                        <div class="mr-auto w-fit text-green-700 font-bold">
                            <span class="">-20%</span>
                        </div>
                        <div class="ml-auto w-fit font-bold">
                            <span style="text-decoration:line-through;">Q9,500.00</span>
                        </div>
                    </div>
                    <div class="ml-auto w-fit font-bold px-2">
                        <span class="">Q7,600.00</span>
                    </div>
                </div>
                <div class="w-44 h-fit mx-1 rounded-md  border-gray-300 border-2 text-center">
                    <img  class=" " src="../images/test.jpeg" alt="">
                    <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                    <div class="flex px-2">
                        <div class="mr-auto w-fit text-green-700 font-bold">
                            <span class="">-20%</span>
                        </div>
                        <div class="ml-auto w-fit font-bold">
                            <span style="text-decoration:line-through;">Q9,500.00</span>
                        </div>
                    </div>
                    <div class="ml-auto w-fit font-bold px-2">
                        <span class="">Q7,600.00</span>
                    </div>
                </div>
                <div class="w-44 h-fit mx-1 rounded-md  border-gray-300 border-2 text-center">
                    <img  class=" " src="../images/test.jpeg" alt="">
                    <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                    <div class="flex px-2">
                        <div class="mr-auto w-fit text-green-700 font-bold">
                            <span class="">-20%</span>
                        </div>
                        <div class="ml-auto w-fit font-bold">
                            <span style="text-decoration:line-through;">Q9,500.00</span>
                        </div>
                    </div>
                    <div class="ml-auto w-fit font-bold px-2">
                        <span class="">Q7,600.00</span>
                    </div>
                </div>
                <div class="w-44 h-fit mx-1 rounded-md  border-gray-300 border-2 text-center">
                    <img  class=" " src="../images/test.jpeg" alt="">
                    <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                    <div class="flex px-2">
                        <div class="mr-auto w-fit text-green-700 font-bold">
                            <span class="">-20%</span>
                        </div>
                        <div class="ml-auto w-fit font-bold">
                            <span style="text-decoration:line-through;">Q9,500.00</span>
                        </div>
                    </div>
                    <div class="ml-auto w-fit font-bold px-2">
                        <span class="">Q7,600.00</span>
                    </div>
                </div>
                <div class="w-44 h-fit mx-1 rounded-md  border-gray-300 border-2 text-center">
                    <img  class=" " src="../images/test.jpeg" alt="">
                    <h3 class="p-2">Laptop Gaming de 15.6" SSD 512gb para Juegos</h3>
                    <div class="flex px-2">
                        <div class="mr-auto w-fit text-green-700 font-bold">
                            <span class="">-20%</span>
                        </div>
                        <div class="ml-auto w-fit font-bold">
                            <span style="text-decoration:line-through;">Q9,500.00</span>
                        </div>
                    </div>
                    <div class="ml-auto w-fit font-bold px-2">
                        <span class="">Q7,600.00</span>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection



