@extends('layouts.app')

@section('content')
    <section class="bg-white">
        <div class="p-1"></div>
        <div class="px-5 py-2 xl:px-52 ">
            <h3 class="font-bold my-5 text-xl  py-2 text-center
                bg-[rgb(30,20,128)] rounded-md w-fit mx-auto px-3 text-white">INSTRUCCIONES DE PAGO</h3>

            <h3 class="py-1 text-center mx-auto border text-sm font-bold
                bg-blue-100 rounded-md w-fit px-2 text-blue-700  xl:ml-5 xl:text-base">
                NOMBRE DE CUENTA: Grupo SGL</h3>
        </div>
        <div class="px-5 py-2 xl:px-52 xl:py-5">
            <h3 class="my-10  md: py-2 text-center
            bg-blue-200 rounded-md w-fit px-3 text-blue-700">
                Servicio LCL (Consolidado Marítimo)</h3>

            <p class="text-justify my-5 md:px-10">
                Estimado Cliente,
                Sirva encontrar las instrucciones de pago para sus servicios de transporte de carga consolidada LCL.
            </p>

            <h3 class="my-5 py-1 text-center mx-auto
                bg-blue-950 rounded-md w-fit px-2 text-white sm:ml-10">
                Fletes Marítimos:</h3>

            <p class="text-justify my-5 md:px-10">
                Para realizar los pagos de este servicio después de recibir su factura la cual podrá encontrar en el segmento Estados de Cuenta, deberá de realizar su pago por los medios descritos seleccionando la casilla y adjuntando el comprobante.
            </p>

            <h3 class="my-5 py-1 text-center mx-auto
                bg-blue-950 rounded-md w-fit px-2 text-white sm:ml-10">
                Medios de pago:</h3>

            <p class="text-justify my-5 md:px-10">
                Depósito bancario directo:
                Depósito bancario ACH:
                Deposito con cheque de caja:
                Deposito en efectivo:
                Tarjeta de Crédito:
            </p>

            <p class=" text-justify my-5 font-bold md:px-10">
                {{-- Adjunte su comprobante:<br> --}}
                Cuentas bancarias disponibles: <br>
                <img class="max-w-[40px]" src="{{asset('images/icons/ICONO GYT.SVG')}}" alt="">
                Banco G&T Continental Monetaria <br>
                Moneda: US DOLLAR <br>
                Número de cuenta: 13-1801747-0 <br> <br>
            </p>

            <p class=" text-justify my-5 md:px-10">
                En esta cuenta podrá depositar los servicios de fletamento, GRI, Port Congestions, Seasonal Charges y gastos de origen únicamente.
                Todos los acreditamientos ACH, Cheque de Caja y Tarjetas se aplicará 24hrs después de realizado el pago.
            </p>

            <h3 class="my-5  py-1 text-center mx-auto
                bg-blue-950 rounded-md w-fit px-2 text-white sm:ml-10">
                Gastos Locales (Aduana, Manejos, Tramites, cuenta de terceros)</h3>

            <p class=" text-justify my-5 md:px-10">
                Estimado cliente,
                Sirva encontrar instrucciones de pago para sus servicios de Manejo de cargos locales.
            </p>

            <h3 class="my-5 py-1 text-center mx-auto
            bg-blue-950 rounded-md w-fit px-2 text-white sm:ml-10">
            Medios de pago:</h3>

            <p class="text-justify my-5 md:px-10">
                -Depósito bancario directo <br>
                -Depósito bancario ACH <br>
                -Deposito con cheque de caja <br>
                -Deposito en efectivo <br>
                -Tarjeta de Crédito <br>
            </p>

            <p class=" text-justify my-5 font-bold md:px-10">
                {{-- Adjunte su comprobante <br> --}}
                Cuentas bancarias disponibles <br>
                <img class="max-w-[40px]" src="{{asset('images/icons/ICONO GYT.SVG')}}" alt="">
                Banco G&T Continental Monetaria <br>
                Moneda: QUETZAL <br>
                Número de cuenta: 013-002965-6
            </p>

            <p class=" text-justify my-5 md:px-10">
                Todos los acreditamientos ACH, Cheque de Caja y Tarjetas se aplicará 24hrs después de realizado el pago.
            </p>


            <h3 class="my-10  md: py-2 text-center
            bg-blue-200 rounded-md w-fit px-3 text-blue-700">
                Servicio FCL (Full container Load)</h3>
            <p class=" text-justify my-5 md:px-10">
                Estimado cliente,
                Sirva encontrar instrucciones de pago para sus servicios de Fletes Marítimos de Importación / Exportación completos.
            </p>

            <h3 class="my-5  py-1 text-center mx-auto
            bg-blue-950 rounded-md w-fit px-2 text-white sm:ml-10">
            Medios de pago:</h3>

            <p class=" text-justify my-5 md:px-10">
                -Depósito bancario directo <br>
                -Depósito bancario ACH <br>
                -Deposito con cheque de caja <br>
                -Deposito en efectivo <br>
                -Tarjeta de Crédito <br>
            </p>

            <p class=" text-justify my-5 font-bold md:px-10">
                {{-- Adjunte su comprobante: <br> --}}
                Cuentas bancarias disponibles: <br>
                <img class="max-w-[40px]" src="{{asset('images/icons/ICONO GYT.SVG')}}" alt="">
                Banco G&T Continental Monetaria <br>
                Moneda: US DOLLAR <br>
                Número de cuenta: 13-1801747-0
            </p>

            <p class=" text-justify my-5 md:px-10">
                Todos los acreditamientos ACH, Cheque de Caja y Tarjetas se aplicará 24hrs después de realizado el pago.
                En esta cuenta podrá depositar los servicios de fletamento, GRI, Port Congestions, Seasonal Charges, gastos de origen.
            </p>

            <h3 class="my-5 py-1 text-center mx-auto
                bg-blue-950 rounded-md w-fit px-2 text-white sm:ml-10">
                Demoras  (Full container Load)</h3>

            <p class=" text-justify my-5 md:px-10">
                Estimado cliente,
                Sirva encontrar instrucciones de pago para sus demoras de Fletes Marítimos de Importación / Exportación completos, después de recibir su factura la cual podrá encontrar en el segmento Estados de Cuenta.
            </p>

            <h3 class="my-5  py-1 text-center mx-auto
            bg-blue-950 rounded-md w-fit px-2 text-white sm:ml-10">
                Medios de pago:</h3>

            <p class=" text-justify my-5 md:px-10">
                -Depósito bancario directo <br>
                -Depósito bancario ACH <br>
                -Deposito con cheque de caja <br>
                -Deposito en efectivo <br>
                -Tarjeta de Crédito
            </p>

            <p class=" text-justify my-5 font-bold md:px-10">
                {{-- Adjunte su comprobante: <br> --}}
                Cuentas bancarias disponibles: <br>
                <img class="max-w-[40px]" src="{{asset('images/icons/ICONO GYT.SVG')}}" alt="">
                Banco G&T Continental Monetaria <br>
                Moneda: US DOLLAR <br>
                Número de cuenta: 13-1801747-0 <br>
                <br>
                <img class="max-w-[40px]" src="{{asset('images/icons/ICONO BI.SVG')}}" alt="">
                Banco Industrial <br>
                Moneda: US DOLLAR <br>
                Número de cuenta: 848-000162-0 <br>
            </p>

            <p class=" text-justify my-5 md:px-10">
                Todos los acreditamientos ACH, Cheque de Caja y Tarjetas se aplicará 24hrs después de realizado el pago.
                En esta cuenta podrá depositar los gastos de demoras navieras, le recordamos que no se pueden hacer pagos directos a Navieras.
            </p>

            <h3 class="my-5 ml-10 py-1 text-center mx-auto
                bg-blue-950 rounded-md w-fit px-2 text-white sm:ml-10">
                Almacenajes (Generales & Fiscales) :</h3>

            <p class=" text-justify my-5 md:px-10">
                Para realizar los pagos de este servicio después de recibir su factura la cual podrá encontrar en el segmento Estados de Cuenta, deberá de realizar su pago por los medios descritos seleccionando la casilla y adjuntando el comprobante.
            </p>

            <h3 class="my-5  py-1 text-center mx-auto
            bg-blue-950 rounded-md w-fit px-2 text-white sm:ml-10">
                Medios de pago:</h3>

            <p class=" text-justify my-5 md:px-10">
                -Depósito bancario directo <br>
                -Depósito bancario ACH <br>
                -Deposito con cheque de caja <br>
                -Deposito en efectivo <br>
                -Tarjeta de Crédito
            </p>

            <p class=" text-justify my-5 font-bold md:px-10">
                {{-- Adjunte su comprobante: <br> --}}
                Cuentas bancarias disponibles: <br>
                <img class="max-w-[40px]" src="{{asset('images/icons/ICONO BANRURAL.SVG')}}" alt="">
                Banrural Monetaria <br>
                Moneda: QUETZALES <br>
                Número de cuenta: 372-303411-9
            </p>

            <p class=" text-justify my-5 md:px-10">
                Todos los acreditamientos ACH, Cheque de Caja y Tarjetas se aplicará 24hrs después de realizado el pago.
                Le recordamos que su Estado de Cuenta puede cambiar todos los días después de las 14hrs si su carga no fue retirada por lo que solicitamos pueda consultar con su asesor previo a intentar el retiro de las mercancías.
            </p>

            <h3 class="my-10  md: py-2 text-center
            bg-blue-200 rounded-md w-fit px-3 text-blue-700">
                Servicios Aéreos (Carga General Fletes) : </h3>

            <p class=" text-justify my-5 md:px-10">
                Para realizar los pagos de este servicio después de recibir su factura la cual podrá encontrar en el segmento Estados de Cuenta, deberá de realizar su pago por los medios descritos seleccionando la casilla y adjuntando el comprobante.
            </p>

            <h3 class="my-5  py-1 text-center mx-auto
            bg-blue-950 rounded-md w-fit px-2 text-white sm:ml-10">
                Medios de pago:</h3>

            <p class=" text-justify my-5 md:px-10">
                -Depósito bancario directo <br>
                -Depósito bancario ACH <br>
                -Deposito con cheque de caja <br>
                -Deposito en efectivo <br>
                -Tarjeta de Crédito
            </p>

            <p class=" text-justify my-5 font-bold md:px-10">
                {{-- Adjunte su comprobante: <br> --}}
                Cuentas bancarias disponibles: <br>
                <img class="max-w-[40px]" src="{{asset('images/icons/ICONO BI.SVG')}}" alt="">
                Banco Industrial <br>
                Moneda: US DOLLAR <br>
                Número de cuenta: 558-001369-5 <br>
                <br>
                <img class="max-w-[40px]" src="{{asset('images/icons/ICONO GYT.SVG')}}" alt="">
                Banco G&T Continental Monetaria <br>
                Moneda: US DOLLAR <br>
                Número de cuenta: 13-5802027-7 <br>
            </p>

            <p class=" text-justify my-5 md:px-10">
                Todos los acreditamientos ACH, Cheque de Caja y Tarjetas se aplicará 24hrs después de realizado el pago.
            </p>

            <h3 class="my-10  md: py-2 text-center
            bg-blue-200 rounded-md w-fit px-3 text-blue-700">
                Servicios Aéreos (Carga General Gastos Locales) : </h3>

            <p class=" text-justify my-5 md:px-10">
                Para realizar los pagos de este servicio después de recibir su factura la cual podrá encontrar en el segmento Estados de Cuenta, deberá de realizar su pago por los medios descritos seleccionando la casilla y adjuntando el comprobante.
            </p>

            <h3 class="my-5  py-1 text-center mx-auto
            bg-blue-950 rounded-md w-fit px-2 text-white sm:ml-10">
                Medios de pago:</h3>

            <p class=" text-justify my-5 md:px-10">
                -Depósito bancario directo <br>
                -Depósito bancario ACH <br>
                -Deposito con cheque de caja <br>
                -Deposito en efectivo <br>
                -Tarjeta de Crédito
            </p>

            <p class=" text-justify my-5 font-bold md:px-10">
                {{-- Adjunte su comprobante: <br> --}}
                Cuentas bancarias disponibles: <br>
                <img class="max-w-[40px]" src="{{asset('images/icons/ICONO BI.SVG')}}" alt="">
                Banco Industrial <br>
                Moneda: QUETZALES <br>
                Número de cuenta: 558-001365-3 <br>
                <br>
                <img class="max-w-[40px]" src="{{asset('images/icons/ICONO GYT.SVG')}}" alt="">
                Banco G&T Continental Monetaria <br>
                Moneda: QUETZALES <br>
                Número de cuenta: 013-003255-1
            </p>

            <p class=" text-justify my-5 md:px-10">
                Todos los acreditamientos ACH, Cheque de Caja y Tarjetas se aplicará 24hrs después de realizado el pago.
                En esta cuenta podrá depositar todos los gastos referentes a Almacenaje Combex, Manejo, Tramites Aduanales y cuenta de terceros.
            </p>

            <h3 class="my-10  md: py-2 text-center
            bg-blue-200 rounded-md w-fit px-3 text-blue-700">
                Servicios Courier Nacional:</h3>
            <p class=" text-justify my-5 md:px-10">
                Para realizar los pagos de este servicio después de recibir su factura la cual podrá encontrar en el segmento Estados de Cuenta, deberá de realizar su pago por los medios descritos seleccionando la casilla y adjuntando el comprobante.
            </p>

            <h3 class="my-5  py-1 text-center mx-auto
            bg-blue-950 rounded-md w-fit px-2 text-white sm:ml-10">
                Medios de pago:</h3>

            <p class=" text-justify my-5 md:px-10">
                -Depósito bancario directo <br>
                -Depósito bancario ACH <br>
                -Deposito con cheque de caja <br>
                -Deposito en efectivo <br>
                -Tarjeta de Crédito
            </p>

            <p class=" text-justify my-5 font-bold md:px-10">
                {{-- Adjunte su comprobante: <br>  --}}
                Cuentas bancarias disponibles: <br>
                <img class="max-w-[40px]" src="{{asset('images/icons/ICONO BI.SVG')}}" alt="">
                Banco Industrial <br>
                Moneda: QUETZALES <br>
                Número de cuenta: 558-001365-3 <br>
                <br>
                <img class="max-w-[40px]" src="{{asset('images/icons/ICONO GYT.SVG')}}" alt="">
                Banco G&T Continental Monetaria <br>
                Moneda: QUETZALES <br>
                Número de cuenta: 013-003255-1
            </p>

            <p class=" text-justify my-5 md:px-10">
                Todos los acreditamientos ACH, Cheque de Caja y Tarjetas se aplicará 24hrs después de realizado el pago.
                En esta cuenta podrá depositar todos los gastos referentes a traslados de paquetería nacional únicamente.
            </p>

            <h3 class="my-10  md: py-2 text-center
            bg-blue-200 rounded-md w-fit px-3 text-blue-700">
                Servicios Transporte Terrestre (nacional e internacional):</h3>

            <p class=" text-justify my-5 md:px-10">
                Para realizar los pagos de este servicio después de recibir su factura la cual podrá encontrar en el segmento Estados de Cuenta, deberá de realizar su pago por los medios descritos seleccionando la casilla y adjuntando el comprobante.
            </p>

            <h3 class="my-5  py-1 text-center mx-auto
            bg-blue-950 rounded-md w-fit px-2 text-white sm:ml-10">
                Medios de pago:</h3>

            <p class=" text-justify my-5 md:px-10">
                -Depósito bancario directo <br>
                -Depósito bancario ACH <br>
                -Deposito con cheque de caja <br>
                -Deposito en efectivo <br>
                -Tarjeta de Crédito
            </p>

            <p class=" text-justify my-5 font-bold md:px-10">
                {{-- Adjunte su comprobante: <br> --}}
                Cuentas bancarias disponibles: <br>
                <img class="max-w-[40px]" src="{{asset('images/icons/ICONO BI.SVG')}}" alt="">
                Banco Industrial <br>
                Moneda: QUETZALES <br>
                Número de cuenta: 558-001365-3 <br>
                <br>
                <img class="max-w-[40px]" src="{{asset('images/icons/ICONO GYT.SVG')}}" alt="">
                Banco G&T Continental Monetaria <br>
                Moneda: QUETZALES <br>
                Número de cuenta: 013-003255-1 <br>
                <br>
                <img class="max-w-[40px]" src="{{asset('images/icons/ICONO GYT.SVG')}}" alt="">
                Banco G&T Continental Monetaria <br>
                Moneda: US DOLLAR <br>
                Número de cuenta: 13-5802027-7
            </p>

            <p class=" text-justify my-5 md:px-10">
                Todos los acreditamientos ACH, Cheque de Caja y Tarjetas se aplicará 24hrs después de realizado el pago.
                En esta cuenta podrá depositar todos los gastos referentes a traslados de carga por la vía terrestre, estadías de piloto y equipo, cuentas de terceros. Para los fletes nacionales deberá de cancelar en moneda Quetzales y para los fletes en Centroamérica y México deberá de cancelar en moneda USD.
            </p>

            <h3 class="my-10  md: py-2 text-center
            bg-blue-200 rounded-md w-fit px-3 text-blue-700">
                Servicios Courier Miami & China: </h3>
            <p class=" text-justify my-5 md:px-10">
                Para realizar los pagos de este servicio después de recibir su factura la cual podrá encontrar en el segmento Estados de Cuenta, deberá de realizar su pago por los medios descritos seleccionando la casilla y adjuntando el comprobante.
            </p>

            <h3 class="my-5  py-1 text-center mx-auto
            bg-blue-950 rounded-md w-fit px-2 text-white sm:ml-10">
                Medios de pago:</h3>

            <p class=" text-justify my-5 md:px-10">
                -Depósito bancario directo <br>
                -Depósito bancario ACH <br>
                -Deposito con cheque de caja <br>
                -Deposito en efectivo <br>
                -Tarjeta de Crédito
            </p>

            <p class=" text-justify my-5 font-bold md:px-10">
                {{-- Adjunte su comprobante: <br> --}}
                Cuentas bancarias disponibles: <br>
                <img class="max-w-[40px]" src="{{asset('images/icons/ICONO BI.SVG')}}" alt="">
                Banco Industrial <br>
                Moneda: QUETZALES <br>
                Número de cuenta: 558-001365-3
            </p>

            <p class=" text-justify my-5 md:px-10">
                Todos los acreditamientos ACH, Cheque de Caja y Tarjetas se aplicará 24hrs después de realizado el pago.
            </p>
        </div>
    </section>
@endsection

