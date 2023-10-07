@extends('plantilla')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 order-md-1">
            <img src="{{ asset('images/productos/4/yamaha-sbp2f5.jpg') }}" alt="Imagen" class="imagen"/>
            <div class="lupa"></div>
        </div>

        <div class="col-md-6 order-md-2">
                <div class = "titledeta">
                <p>
                    <b>
                    BATERIA ACUSTICA PROFESIONAL YAMAHA STAGE CUSTOM
                    $4000.00 
                    </b>
                </p>

                </div>

                <div class = "lead">
                    <p>
                    La Stage Custom emplea únicamente abedul 100%, una madera clásica en la construcción de modelos de alta agama. Más aún, su única estructura de seis capas transmite la vibración producida en el impacto de forma precisa.
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
                    <a href=" " class="botoncarrito">Enviar</a>
                </div>
        </div>
     </div>
</div>

@endsection