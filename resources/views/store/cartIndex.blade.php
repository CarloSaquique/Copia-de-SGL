@extends('layouts.app')

@section('content')
    <style>
        /* The Modal (background) */
        .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content/Box */
        .modal-content {
        background-color: #fefefe;
        margin: 15% auto; /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
        }

        /* The Close Button */
        .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        }

        .close:hover,
        .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
        }
    </style>
    <a href="/">Home</a>
    <a href="/store">Tienda</a><br>
    {{-- Resumen de orden --}}
    <div style="border:1px solid rgb(164, 164, 164); width: 100%">
        <label> Resumen de Orden
            <div style="width:100%">

                <form method='POST' action='/store-buy' accept-charset='UTF-8'  autocomplete='off' style="display:flex;">
                    @csrf
                    @if ($products)
                    <div style="width:100%;">
                        @foreach ($products->all() as $p)
                        <div style="display:flex; width:75%;">
                            <img src="/../images/{{ $p->idproduct }}/0.jpg" alt="" height="60px" width="60px">
                            <div style="margin: 1%">{{ $p->units }}</div>
                            <div style="margin: 1%">{{ $p->name}}</div>
                            <div style="margin: 1%">{{ 'Q.'.($p->price*8).'.00'}}</div>
                        </div>
                        @endforeach
                    </div>
                    <div style="width:25%;">
                        <label for="">Entregar en:</label><br>
                        <label for="">Direccion registrada</label>
                        @if ($address)
                            <div>{{ $address[0]->address}}</div>
                            <br>
                        @else
                            <br>
                            <button type="button" id="myBtn">Añadir Direccion</button>
                        @endif
                        <div id="discount"></div>
                        @if($total)
                        <div id="total">Q.{{ $total }}.00</div>
                        @endif
                        <div id="msg_promo"></div>
                        <input id="code" type="text" name="promo" placeholder="Introducir codigo" >
                        <div style="background-color:rgb(228, 228, 228);width:fit-content;cursor:pointer;text-align:center;padding:1%;" onclick="check_promo()">Aplicar codigo</div>
                        <br>

                        <input type="text" name="idorder" value="{{ $products[0]->idorder }}" hidden>

                        <br>
                        nit
                        <input type="text" placeholder="nit" name="nit" ><br>
                        <select name="payment">
                            <option value="1">Efectivo</option>
                            <option value="2">Tarjeta</option>
                            <option value="3">Deposito</option>
                        </select><br>
                        <select name="shipping">
                            <option value="1">Envio</option>
                            <option value="2">Bodega</option>
                        </select>
                        <input type="text" placeholder="comments" name="comments" value=""><br>
                        <input type="submit" value="Pagar">
                    </div>
                </form>
                @endif
            </div>
        </label>
    </div>



    <!-- Adress modal -->
    <div id="myModal" class="modal">
        <div class="modal-content" style="width: 50%;">
            <label> Añadir direccion
                <form method='POST' action='/address-add' accept-charset='UTF-8'  autocomplete='off'>
                    @csrf
                    <input type="text" placeholder="Direccion" name="address" style="width:90%; margin:1%"><br>
                    <input type="text" placeholder="departamento" name="departamento" value="Guatemala" style="margin:1%"><br>
                    <input type="text" placeholder="municipio" name="municipio" value="Guatemala" style="margin:1%"><br>
                    <input type="text" placeholder="Comentarios" name="comments" style="width:90%; margin:1%"><br>
                    <input type="text" placeholder="Receptor" name="receiver" style="width:90%; margin:1%"><br>
                    <input type="submit">
                </form>
            </label>
        </div>
    </div>

    <script>

        function check_promo()
        {
            let url = "/promo-check";
            let code = $('#code').val();
            let total =  {!! json_encode($total,JSON_HEX_TAG) !!};
            $.ajax({
                type:"POST",
                cache:false,
                url:url,
                data:{
                    "_token": "{{ csrf_token() }}",
                    code:code,
                    total:total,
                },
                dataType: 'json',

                success: function(data) {
                    console.log(data);
                    applyPromo(data);
                },
                error: function(response) {
                    console.log(response);
                }
            });
        };

        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
        modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
        modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        }
    </script>
@endsection
