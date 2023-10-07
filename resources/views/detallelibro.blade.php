@extends('plantilla')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 order-md-1">
            <img src="{{ asset('images/productos/1/ampli-guitar.jpg') }}" alt="Imagen" class="imagen"/>
            <div class="lupa"></div>
        </div>

        <div class="col-md-6 order-md-2">
                <div class = "titledeta">
                <p>
                    <b>
                    AMPLIFICADOR PARA GUITARRA ELECTRICA 100W CHAMPION FENDER</h2>
                    $200.00 
                    </b>
                </p>

                </div>

                <div class = "lead">
                    <p>
                    Cuenta con dos altavoces de 12″ Fender Special Desing, 100 watts de potencia. Dispone de dos canales, el primero con 5 knobs Volumen
                    </p>
                </div>

                <div class = "d-grid gap-3 col-10 mx-auto">
                    <form method="post" action="procesar.php">
                    <label for="cantidad">Selecciona la cantidad:</label>
                    <select id="cantidad" name="cantidad">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <button class = "mi-boton">Añadir al carrito</button>
                    </form>     
                    
                    <label for="nombre"></label>
                    <input type="text" id="nombre" name="nombre" placeholder="Dejanos tu comentario" />
                </div>
                <!-- AHHHHHH -->
        </div>
     </div>
</div>

@endsection