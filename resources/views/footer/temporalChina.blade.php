{{-- China --}}
<div id="home_cg_base_div" class="home_quoters_base ">

    {{-- Location  Packages -> Quotation --}}
    <div id="home_cg_location_package_div" class="home_quoters_base hidden">
        {{-- Location --}}
        <div class="flex bg-gray-100 w-11/12 mx-auto h-12 rounded-xl
            items-center py-1 relative">
            <img class="w-6 h-4 ml-5 mr-5 lg:w-8
            lg:h-6" src="../images/China.png" alt="">

            <span class="h-12 text-gray-500 text-center text-sm w-5/12
            rounded-xl bg-gray-100 border-none outline-none grid items-center
            sm:text-xl">
            China</span>

            <svg class="mx-5 w-5 h-5 text-green-500"  fill="none" viewBox="0 0 12 10"
                style="  animation-name: animate-color;
                animation-duration: 0.5s;
                animation-iteration-count: infinite;
                animation-direction: alternate;">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
            </svg>

            <img class="w-6 h-4 ml-5 mr-5 lg:w-8
            lg:h-6" src="../images/Guatemala.jpg" alt="">
            <span class="h-12 text-gray-500 text-center text-sm w-5/12
            rounded-xl bg-gray-100 border-none outline-none grid items-center
            sm:text-xl">
            Guatemala</span>


            <button type="button" id="home_cg_location_btn" class="h-7 text-white ml-auto text-center text-lg
            w-fit rounded-xl bg-blue-950/90 px-2.5 sm:h-10 sm:px-4">
            >
            </button>
        </div>

        <form id="home_cg_form_packages" action="/china-quoter-quotation" method="POST">
            @csrf
            {{-- Packages China  Guatemala--}}
            <div id="home_cg_package_div" class="home_quoters_base hidden  bg-gray-100 border-t-2 rounded-xl w-11/12 mx-auto h-fit shadow-xl
                p-5 " >
                <div class="md:grid md:gap-8 md:grid-cols-2">
                    <div>
                        <div class="text-left px-10 py-2">
                            <span>Seleccione el Servicio: </span>
                            <select name="service" class="rounded-xl py-1 px-2
                                text-gray-600 text-sm">
                                <option value="1" selected>POBOX</option>
                                <option value="2">Todo Incluido</option>
                            </select>
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-2">
                            <div class="text-center">
                                <h3 class="font-bold text-sm">Valor de mercadería en US$:</h3>
                                <input id="home_cg_price" name="price" class="h-9 rounded-xl home_quotation_keyup" type="text" placeholder="Precio">
                            </div>
                            <div class="text-center">
                                <h3 class="font-bold text-sm">Shipping en US$:</h3>
                                <input id="home_cg_shipping" name="shipping" class="h-9 rounded-xl home_quotation_keyup" type="text" placeholder="Shipping">
                            </div>
                            <div class="text-center">
                                <h3 class="font-bold text-sm">Peso en libras: </h3>
                                <input id="home_cg_weight" name="weight" class="h-9 rounded-xl home_quotation_keyup" type="text" placeholder="Peso">
                            </div>
                            <div class="text-center ">
                                <h3 class="font-bold text-sm">Descripción:</h3>
                                <select id="home_cg_description" name="description" class="home_quotation_change w-full max-w-xs rounded-xl h-9 text-center text-sm text-gray-600">
                                    <option value="-" selected="selected">Seleccione el tipo de descripción</option>
                                    <option value="15">Accesorio de Aseo Personal: 15%</option>
                                    <option value="15">Accesorio de Cámara: 15%</option>
                                    <option value="15">Accesorio de Carro: 15%</option>
                                    <option value="15">Accesorio de Cocina: 15%</option>
                                    <option value="15">Accesorio de Computacion: 15%</option>
                                    <option value="15">Accesorio de Musica: 15%</option>
                                    <option value="15">Accesorio de Oficina: 15%</option>
                                    <option value="15">Accesorio de Telefonia: 15%</option>
                                    <option value="15">Accesorio Deportivo: 15%</option>
                                    <option value="0">Accesorio Electrico: 0%</option>
                                    <option value="15">Articulos de Cuero: 15%</option>
                                    <option value="15">Articulos de Fiesta: 15%</option>
                                    <option value="15">Bateria de Carro: 15%</option>
                                    <option value="15">Bicicleta: 15%</option>
                                    <option value="0">Bocinas de Carro: 0%</option>
                                    <option value="15">Bolsas: 15%</option>
                                    <option value="10">Cables: 10%</option>
                                    <option value="0">Camara Fotografica: 0%</option>
                                    <option value="10">Cartucho de tinta (Simple): 10%</option>
                                    <option value="0">Cartucho de Tinta C/Chip: 0%</option>
                                    <option value="15">Catalogos: 15%</option>
                                    <option value="13">CD´s: 10% +3% IPSA</option>
                                    <option value="0">Celulares: 0%</option>
                                    <option value="5">Cinta de Impresora: 5%</option>
                                    <option value="0">Computadoras: 0%</option>
                                    <option value="15">Consola de Videojuegos: 15%</option>
                                    <option value="15">Cosmeticos: 15%</option>
                                    <option value="15">Cuadernos: 15%</option>
                                    <option value="0">Discos Duros Vacios: 0%</option>
                                    <option value="18">DVD Player: 15% +3% IPSA</option>
                                    <option value="15">Edredon: 15%</option>
                                    <option value="15">Electrodomesticos: 15%</option>
                                    <option value="0">Equipo Medico: 0%</option>
                                    <option value="15">Estuche de Cuero: 15%</option>
                                    <option value="15">Estuche Partes Plasticas: 15%</option>
                                    <option value="15">Etiquetas de Papel o Carton: 15%</option>
                                    <option value="15">Etiquetas de Tela: 15%</option>
                                    <option value="15">Grabadoras: 15%</option>
                                    <option value="0">Herramientas de Mano: 0%</option>
                                    <option value="0">Impresoras: 0%</option>
                                    <option value="15">Joyeria/Bisuteria: 15%</option>
                                    <option value="15">Juguetes: 15%</option>
                                    <option value="0">Laptop: 0%</option>
                                    <option value="15">Lentes: 15%</option>
                                    <option value="0">Lentes (solo aro): 0%</option>
                                    <option value="5">Lentes de Contacto: 5%</option>
                                    <option value="15">Lentes de Sol: 15%</option>
                                    <option value="0">Libros: 0%</option>
                                    <option value="5">Llaves: 5%</option>
                                    <option value="15">Luces Navideñas: 15%</option>
                                    <option value="15">Mascarillas: 15%</option>
                                    <option value="15">Material Impreso: 15%</option>
                                    <option value="15">Material Promocional: 15%</option>
                                    <option value="15">Medicamentos: 15%</option>
                                    <option value="15">MP3 (iPod): 15%</option>
                                    <option value="15">Muebles de Casa: 15%</option>
                                    <option value="10">Partes de Bicicleta: 10%</option>
                                    <option value="10">Partes Industriales: 10%</option>
                                    <option value="15">Poster: 15%</option>
                                    <option value="15">Radio de Carro: 15%</option>
                                    <option value="15">Reloj de Pulsera/Pared: 15%</option>
                                    <option value="10">Repuestos de Carro: 10%</option>
                                    <option value="0">Repuestos de Helicoptero: 0%</option>
                                    <option value="0">Repuestos de Motor de Carro: 0%</option>
                                    <option value="0">Repuestos Electronicos: 0%</option>
                                    <option value="15">Ropa: 15%</option>
                                    <option value="0">Scanner: 0%</option>
                                    <option value="0">Software de PC: 0%</option>
                                    <option value="0">Tablets (iPad): 0%</option>
                                    <option value="15">Tarjetas de Invitaciones: 15%</option>
                                    <option value="0">Videocamara: 0%</option>
                                    <option value="18">Videocintas: 15% +3% IPSA</option>
                                    <option value="3">Videojuegos CD/DVD/BlueRay- 0% +3% IPSA</option>
                                    <option value="18">Videojuegos Cassette: 15% +3% IPSA</option>
                                    <option value="15">Zapatos: 15%</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-2 flex text-center w-fit mx-auto">
                            <div class="mx-2 font-bold">
                                <h3>Premier Club</h3>
                                <input id="home_cg_premier" name="premier" class="home_quotation_change" type="checkbox">
                            </div>
                            <div class="mx-2 font-bold">
                                <h3>Prepago</h3>
                                <input id="home_cg_prepaid" name="prepaid" class="home_quotation_change" type="checkbox" name="">
                            </div>
                        </div>
                    </div>

                    <div class="p-2">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input name="currency" type="checkbox" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                            <h3 id="home_cg_exchange_btn" class="ml-3 text-sm font-medium text-gray-900">Q</h3>
                        </label>
                        <h3>Flete SGL: <span id="home_cg_transport">0.00</span></h3>
                        <h3>Desaduanaje SGL: <span id="home_cg_desaduanaje">0.00</span></h3>
                        <h3>Servicios SGL: <span id="home_cg_services">0.00</span></h3>
                        <h3>DAI: <span id="home_cg_dai">0.00</span></h3>
                        <h3>IVA: <span id="home_cg_iva">0.00</span></h3>
                        <h3>Impuestos: <span id="home_cg_taxes">0.00</span></h3>
                        <h3 class="font-bold">Total POBOX: Servicio SGL + Impuestos: <span id="home_cg_total">0.00</span></h3>
                        <h3 class="font-bold">Total Todo Incluido: Mercadería + Servicio SGL + Impuestos: $<span id="home_cg_total">0.00</span></h3>
                    </div>
                </div>

                <div id="home_cg_conditions_order_div" class="home_quoters hidden">
                    @auth
                        <div class="items-center flex w-fit mx-auto" >
                            <input id="home_cg_chk_terms" class="mx-2" type="checkbox" name="terms"><span class="hover:text-blue-700
                                text-sm cursor-pointer" data-modal-target="defaultModalCg"
                                data-modal-toggle="defaultModalCg" >
                                CONDICIONES DE SERVICIO POBOX</span>
                        </div>
                        <button id="home_cg_btn_quotation_order" type="button" class="block mx-auto mt-5 bg-blue-950 px-4 py-2
                            rounded-xl text-white cursor-pointer opacity-70" disabled>Realizar Orden</button>
                    @else
                        <a href="/login" id="home_cg_btn_quotation_order" class="block mx-auto mt-5 bg-blue-950 px-4 py-2
                        rounded-xl text-white cursor-pointer">Iniciar Sesión</a>
                    @endauth
                </div>
            </div>

        </form>
    </div>

    {{-- Order -> OSC --}}
    <div id="home_cg_order" class="home_quoters_base hidden  bg-gray-100  border-2 rounded-xl
        w-11/12 mx-auto py-5">
        <div class="mx-auto rounded-xl">
            <form id="home_cg_form_order_osc" action="/china-quoter-osc" method="POST">
                @csrf
                <div class="flex w-fit mx-auto px-2">
                    {{-- Recoger --}}
                    <div class="w-full items-center flex text-center">
                        <img class="w-6 h-4 ml-5 mr-5 lg:w-8
                        lg:h-6" src="../images/China.png" alt="">

                        <span class="h-12 text-gray-500 text-center text-sm w-5/12
                        rounded-xl bg-gray-100 border-none outline-none grid items-center
                        sm:text-xl">
                        China</span>
                    </div>
                    {{-- Animación --}}
                    <div class="flex items-center">
                        <svg class="mx-5 w-5 h-5 text-green-500"  fill="none" viewBox="0 0 12 10"
                            style="  animation-name: animate-color;
                            animation-duration: 0.5s;
                            animation-iteration-count: infinite;
                            animation-direction: alternate;">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                        </svg>
                    </div>
                    {{-- Entregar --}}
                    <div id="home_cg_order_form_destination">
                        <h3 class="font-bold">Entregar En:</h3>
                        {{-- Select Destination --}}
                        <select name="destination" id="home_cg_destination_select" class="p-2 rounded-xl mt-1 mb-1">
                            <option value="0">Seleccione punto de entrega</option>
                            <option value="1">Ciudad de Guatemala</option>
                            <option value="2">Agencia Zona 10</option>
                            <option value="3">Agencia El Dorado</option>
                            <option value="4">Agencia Chiquimula</option>
                            <option value="5">Agencia Quetzaltenango</option>
                        </select>
                        {{-- Destination Form --}}
                        <div id="home_cg_order_destination" class="w-96 h-32">

                        </div>
                    </div>
                </div>
            </form>
            <button id="home_cg_btn_order" type="button" class="block bg-blue-950
                px-4 py-2 ml-auto mr-5 rounded-xl text-white">Continuar</button>
        </div>
    </div>

    <!-- Condiciones Modal -->
    <div id="defaultModalCg" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow ">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t ">
                    <h3 class="text-xl font-semibold text-gray-900 ">
                        Condiciones de Servicio POBOX
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center " data-modal-hide="defaultModalCg">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <div class="text-base leading-7 text-gray-800 px-3">
                        <span class="font-bold">a)</span> Todas nuestras tarifas incluyen IVA. <br>
                        <span class="font-bold">b)</span>  El embalaje y empaque es responsabilidad de cliente y proveedor. <br>
                        <span class="font-bold">c)</span>  Las entregas se realizan en oficinas de destino únicamente. <br>
                        <span class="font-bold">d)</span>  GRUPO SGL (y su corporativo) no se responsabilizan por daños ocurridos en el transito debido a mal empaque o embalaje de la misma. <br>
                        <span class="font-bold">e)</span>  En caso de extravió de mercadería el cliente deberá de ingresar un reclamo por medio de FORMULARIO DE RECLAMOS COURIER, en un tiempo máximo de 3 días hábiles, después de notificado el mismo por servicio al cliente. <br>
                        <span class="font-bold">f)</span>  La cobertura por reclamos únicamente aplican a un valor máximo del 70% de la mercadería declarada al momento de despacho con soporte de factura contable y documentos requeridos en FORMULARIO DE RECLAMOS COURIER. <br>
                        <span class="font-bold">g)</span>  Los productos con baterías están sujetos a restricción de vuelo por normas internacionales. <br>
                        <span class="font-bold ml-3">g.1)</span>  Los paquetes están sujetos a aceptación de aerolínea, por lo que de no cumplir con las normas de vuelo pueden ser retenidos o retornados a nuestras oficinas de origen. <br>
                        <span class="font-bold">h)</span>  Los tiempos de tránsito ofertados pueden variar por disposición de vuelo de aerolínea en las cuales GRUPO SGL, no es responsable de las mismas. <br>
                        <span class="font-bold">i)</span>  GRUPO SGL, no se responsabiliza por el mal funcionamiento o calidad de los productos transportados. <br>
                        <span class="font-bold ml-3">i.1)</span>  GRUPO SGL, podrá notificar los daños visuales de paquetes que presenten daños, sin embargo, no se revisar ni abren los paquetes previos a vuelos. <br>
                        <span class="font-bold ml-3">i.2)</span>  Los paquetes con contrabando o mercaderías no declaradas podrán ser confiscados por las autoridades. <br>
                        <span class="font-bold">j)</span>  GRUPO SGL, no se responsabiliza por las demoras ocasionadas por huelgas, disposiciones gubernamentales y autoridades de aduana en origen y destino. <br>
                        <span class="font-bold">k)</span>  El cliente acepta las condiciones al momento de requerir el servicio. <br>
                        <span class="font-bold">l)</span>  Tarifa valida por 8 días. <br>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- CN OSC -> Finish --}}
    <div id="home_cg_osc" class="home_quoters_base hidden bg-white border-2 rounded-xl
        w-11/12 mx-auto p-5">

        <form id="home_cg_form_osc" action="/china-quoter-finish" method="POST" class="flex justify-evenly">
            @csrf
            {{-- OSC - Facturación --}}
            <div class="bg-white p-5 rounded-lg">
                {{-- OSC --}}
                <h3 class="font-bold text-xl">Detalle de Orden:</h3>
                <div class=" text-left mt-2 mb-10 bg-white p-1  rounded-lg">
                    <a href="/china-quoter-generate-pdf" class="text-blue-950 hover:text-blue-600" target="blank">Orden de Servicio al Cliente #982347.pdf</a>
                    <h3 id="home_cg_osc_total" class="font-bold mb-5"></h3>

                    {{-- Cargar Factura --}}
                    <h3 class="font-semibold mb-5">Cargar Factura</h3>
                    <div class="h-24 rounded-lg cursor-pointer
                        border-2 border-dotted border-gray-300 p-0.5 text-gray-400">
                        <div class="border-2 border-dotted h-full border-gray-300
                            rounded-lg">
                            <label for="home_cg_add_bill" class="
                                w-full h-full items-center flex">
                                <svg class="w-6 h-6 mx-auto text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 19H1.933A.97.97 0 0 1 1 18V5.828a2 2 0 0 1 .586-1.414l2.828-2.828A2 2 0 0 1 5.828 1h8.239A.97.97 0 0 1 15 2v4M6 1v4a1 1 0 0 1-1 1H1m11 8h4m-2 2v-4m5 2a5 5 0 1 1-10 0 5 5 0 0 1 10 0Z"/>
                                </svg>
                            </label>
                            <input id="home_cg_add_bill" name="bill" type="file" class="hidden">
                        </div>
                    </div>


                    {{-- <label class="bg-gray-200 rounded-xl font-bold p-2" for="home_mg_transfer_file">Subir Factura</label> --}}
                    {{-- <input id="home_cn_transfer_file" class="rounded-r-xl w-full h-8" type="file" hidden> --}}
                </div>

                {{-- Facturación --}}
                <div class="w-fit border-2 border-dotted p-5 rounded-xl space-y-3 bg-white">
                    <h3 class="font-bold text-xl">Datos de Facturación: </h3>
                    <div class="flex">
                        <input class="rounded-lg h-8" name="bill_name"  type="text" placeholder="Nombre">
                    </div>
                    <div class="flex">
                        <input class="rounded-lg h-8" name="bill_address" type="text" placeholder="Dirección">
                    </div>
                    <div class="">
                        <input class="rounded-lg h-8" name="bill_nit" type="text" placeholder="NIT/DPI">
                    </div>
                    <div class="flex items-center space-x-2">
                        <input class="rounded-md" name="cf" type="checkbox">
                        <label>CF</label>
                    </div>
                </div>
            </div>

            <div class="bg-white p-5 border-2 rounded-lg w-4/6">
                {{-- Select --}}
                <div class="text-center mb-10">
                    <select id="home_cg_payment_type" name="pay" class="rounded-lg p-2 text-gray-600 ">
                        <option value="0">Selecciona el Tipo de Pago</option>
                        <option value="1">Tarjeta de Credito/Debito</option>
                        <option value="2">Transferencia</option>
                        <option value="3">Efectivo en Agencia</option>
                        <option value="4">Pago Contra Entrega</option>
                    </select>
                </div>

                <div id="home_cg_payment_blank" class="w-4/6 h-3/6 border-dotted border-2 p-5 rounded-lg space-y-3
                bg-white mx-auto">
                </div>

                {{-- Tarjeta --}}
                <div id="home_cg_payment_cc" class="w-4/6 h-3/6 border-2 py-5 px-3 rounded-lg
                    space-y-3 hidden bg-white mx-auto">
                    <img width="50" height="30" src="../images/visa.png" alt="">
                    <div class="flex justify-evenly">
                        <input class="rounded-lg w-full h-8 uppercase" name="card_number" type="text" placeholder="No. Tarjeta">
                    </div>
                    <div class="flex justify-start space-x-1">
                        <input class="rounded-lg w-2/6 h-8 uppercase" name="card_name" type="text" placeholder="Nombre">
                        <input class="rounded-lg w-2/6 h-8 uppercase" name="card_last_name" type="text" placeholder="Apellido">
                    </div>
                    <div class="flex justify-end space-x-2">
                        <input class="rounded-lg w-2/6 h-8" name="card_csv" type="text" placeholder="CSV">
                        <input class="rounded-lg w-2/6 h-8" name="card_date" type="text" placeholder="DD/MM">
                    </div>
                </div>

                {{-- Transferencia --}}
                <div id="home_cg_payment_bt" class="hidden">
                    <div class="flex">
                        <div class="w-4/6 h-3/6 border-2 py-5 px-5 rounded-lg
                            space-y-2  bg-white mx-auto">
                            <div class="flex">
                                <h3 class="font-bold text-xl mr-auto">Banco GyT</h3>
                                <div>
                                    <h3 class="ml-auto text-sm">GTQ 4324234</h3>
                                    <h3 class="ml-auto text-sm">Monetaria</h3>
                                </div>
                            </div>

                            <h3>A: Grupo SGL</h3>
                            <div class="flex">
                                <input class="rounded-lg mr-auto h-8" name="bank_note" type="text" placeholder="No.Boleta">
                                <input class="rounded-lg ml-auto h-8" name="bank_reference" type="text" placeholder="No.Referencia">
                            </div>
                            <div class="flex">
                                <label class="bg-gray-200 rounded-xl font-bold p-2" for="home_cn_transfer_file">Subir la boleta de pago</label>
                                <input id="home_cn_transfer_file" name="bank_file" class="rounded-r-xl w-full h-8" type="file" hidden>
                                <input class="rounded-lg ml-auto h-8" name="bank_amount" type="text" placeholder="Monto">
                            </div>
                        </div>

                        <div class="py-5">
                            <div class="mr-auto">
                                <h3 class="font-bold">Banco Destino</h3>
                                <h3 class="">Banco GyT</h3>
                            </div>
                            <div class="mx-auto">
                                <h3 class="font-bold">Nombre</h3>
                                <h3 class="">Grupo SGL</h3>
                            </div>
                            <div class="ml-auto">
                                <h3 class="font-bold">No.Cuenta Destino</h3>
                                <h3 class="">GTQ 12321423423 Monetarios</h3>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Pago en agencia --}}
                <div id="home_cg_payment_agency" class="w-4/6 h-3/6 border-dotted border-2 p-5
                    rounded-lg space-y-3 bg-white mx-auto hidden">
                    <h3 class="text-lg mb-24"> Pago en Agencia</h3>
                    <div class="w-fit  ml-auto text-left">
                        <h3 class="font-semibold text-lg">.....Recargo: Q0.00</h3>
                        <h3 class="font-semibold text-lg">......Total: Q150.00</h3>
                    </div>
                </div>

                {{-- Pago Contra Entrega --}}
                <div id="home_cg_payment_cod" class="w-4/6 h-3/6 border-dotted border-2 p-5
                    rounded-lg space-y-3 bg-white mx-auto hidden">
                    <h3 class="text-lg mb-24"> Pago Contra Entrega</h3>
                    <div class="w-fit  ml-auto text-left">
                        <h3 class="font-semibold text-lg">.....Recargo: Q10.00</h3>
                        <h3 class="font-semibold text-lg">......Total: Q160.00</h3>
                    </div>
                </div>

                <button id="home_cg_btn_osc" type="button" class="block bg-blue-950
                    px-4 py-3 ml-auto mt-16  rounded-xl text-white hover:bg-blue-900
                    ">Finalizar Orden</button>
            </div>
        </form>
    </div>

    {{-- Success --}}
    <div id="home_cg_success" class="home_quoters_base hidden bg-gray-100 border-2 rounded-xl
        w-11/12 mx-auto p-5">
        <div class="bg-gray-100 w-11/12 mx-auto rounded-xl p-10 font-bold text-center">
            <h3 id="home_cg_order_success" class="font-bold text-lg"></h3>
        </div>
    </div>

</div>