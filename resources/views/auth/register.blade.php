@extends('layouts.clean')

@section('content')
    <section class="py-[5%]  max-h-auto">
        <div class="mx-auto w-fit my-3">
            <a href="/">
                <img class="mx-auto max-w-[56px]" src="{{asset('images/main/logo.png')}}" alt="">
            </a>
        </div>
        <div class="mx-auto w-72 rounded-2xl shadow-2xl bg-white text-center">
            <form id="form-reg" method='POST' action='/register' accept-charset='UTF-8'  autocomplete='off'>
                @csrf
                <p class="font-bold text-blue-900 text-xl p-3">Registrarse en {{ config('app.name')}}</p>
                <input class="w-10/12 mt-1 p-2 text-sm text-gray-900 border
                border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-400
                focus:border-blue-400" type="text" name="name" placeholder="Nombre"/>

                <input class="w-10/12 mt-5 p-2 text-sm text-gray-900 border
                border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-400
                focus:border-blue-400" type="text" name="last_name" placeholder="Apellido"/>

                <select class="w-10/12 mt-5 p-2 text-sm text-gray-600 border
                border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-400
                focus:border-blue-400" name="country">
                    <option value="0">Seleccionar mi país</option>
                    <option value="1">Guatemala</option>
                    <option value="2">United States</option>
                    <option value="3">Mexico</option>
                    <option value="4">Honduras</option>
                    <option value="5">El Salvador</option>
                    <option value="6">Dominican Republic</option>
                    <option value="7">Panama</option>
                    <option value="8">Colombia</option>
                    <option value="9">Chile</option>
                    <option value="10">Brazil</option>
                    <option value="11">Spain</option>
                    <option value="12">Germany</option>
                    <option value="13">India</option>
                    <option value="14">China</option>
                </select>

                <input class="w-10/12 mt-5 p-2 text-sm text-gray-900 border
                border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-400
                focus:border-blue-400" type="text" name="cui" placeholder="Codigo unico de identificación">

                <input class="w-10/12 mt-5 p-2 text-sm text-gray-900 border
                border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-400
                focus:border-blue-400" type="email" name="email" placeholder="Email">

                {{-- <input class="w-10/12 mt-5 p-2 text-sm text-gray-900 border
                border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-400
                focus:border-blue-400" type="phone" placeholder="Phone"> --}}

                <input class="w-10/12 mt-5 p-2 text-sm text-gray-900 border
                border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-400
                focus:border-blue-400" type="password" name="password" placeholder="Password">

                <input class="w-10/12 mt-5 p-2 text-sm text-gray-900 border
                border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-400
                focus:border-blue-400" type="password" name="password_confirmation" placeholder="Confirm Password">


                @if(Session::has('error'))
                    <div class="text-red-600 text-xs p-5">
                        @foreach (Session::get('error')  as $error)
                            <h3>{{ $error }}</h3>
                        @endforeach
                    </div>
                @endif

                <div class="py-5 px-3">
                    <button id="register_btn" type="button" class="bg-blue-950 rounded-full text-white
                    px-10 py-1">Registrar</button>
                </div>
            </form>
                <div class="py-5 px-3 text-xs">
                    <h3 class="ml-auto text-blue-950">Ya tienes Cuenta?</h3>
                    <a class="text-blue-950 underline" href="/login">Iniciar Sesión</a>
                </div>

        </div>
    </section>
@endsection
