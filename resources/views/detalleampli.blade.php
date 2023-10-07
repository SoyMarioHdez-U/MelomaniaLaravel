@extends('plantilla')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 order-md-1">
            <img src="{{ asset('images/productos/1/ampli-guitar.jpg') }}" alt="" width="259" height="200">           
        </div>

        <div class="col-md-6 order-md-2">
                <h2> AMPLIFICADOR PARA GUITARRA ELECTRICA 100W CHAMPION FENDER</h2>
                <h2> $200.00 </h2>
            <p class="lead">
                Elaborada en madera de Abeto, con cuerdas de nylon, ideal para estudiantes o músicos principiantes que buscan calidad a buen precio.
            </p>
        </div>
     </div>
</div>



@endsection