@extends('layouts.app')

@section('content')
    <a href="/">Home</a>
    <a href="/store">Tienda</a>
    @if($product)
        <div style="border:1px solid rgb(163, 163, 163); backgroud-color:rgb(207, 207, 207); padding:1%; height:80vh; width:98%; display:flex; ">
            <div style="height:70%; width:30%;">
                <img id="product_image" src="/../images/{{ $product[0]->idproduct }}/0.jpg" alt="" height="100%" width="100%">
                {{-- <img id="product_image" src="/../images/1/0.jpg" alt="" height="100%" width="100%"> --}}
            </div>
            <div style="margin:1%; height:100%; width:55%;">
                <div style="font-size:4vh; height:15%;">
                    {{ $product[0]->name }}
                </div>
                <div id="show-description" style="font-size:3vh; background-color:rgb(244, 244, 244); height:80%;" onclick="breakLine()">
                    <ul>
                    @foreach (explode('-n', $product[0]->description) as $d)
                        <li style="font">{{ $d }}</li>
                    @endforeach
                    </ul>
                </div>
            </div>
            <div style="background-color: whitesmoke; height:100%; width:10%;">
                <div style="display:flex; margin-top:30%; font-size:4vh; color:rgb(57, 57, 57);">
                    -{{ $product[0]->discount}}%
                    Q.{{ $product[0]->price }}
                </div>
                <form  method='POST' action='/store-cart-add' accept-charset='UTF-8'  autocomplete='off' style="margin:10%;">
                    @csrf
                    <input type="text" name="idproduct" value="{{ $product[0]->idproduct }}" hidden >
                    <select name="units" style="margin:20%; width:60%;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                    <input type="submit" value="Añadir al carrito">
                </form>
            </div>
        </div>


    @endif

    <script>
        window.onload = (event) =>{
            let img = $('#product_image')[0];
            if(img.naturalWidth != img.naturalHeight){
                img.style.height = '80%';
            }
        };
    </script>
@endsection
