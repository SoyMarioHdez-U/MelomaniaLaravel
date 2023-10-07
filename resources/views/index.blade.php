@extends('plantilla')
@section('content')
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/inicio/1.png') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/inicio/2.png') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/inicio/3.png') }}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="subseccion">
    <p class="titles">Te ofrecemos</p>
</div>

<div class="sub-tienda">
<div class="containerSub">
        <img src="{{ asset('images/inicio/4.png') }}" alt="Imagen">
        <div class="text-overlay">
            <h1 class="titleSub">Cursos</h1>
            <p>Te enseñamos a ejecutar el instrumento de tu preferencia o perfeccionamos tu técnica.
              Tenemos cursos disponibles para todo tipo de músicos, desde principiante hasta los más avanzados.</p>
            <a href="{{ route('cursos') }}" class="button-overlay">Ir a <b>cursos</b> ⟶ </a>
        </div>
    </div>
</div>

<div class="subseccion">
    <p class="titles"> </p>
</div>

<div class="sub-tienda">
<div class="containerSub">
        <img src="{{ asset('images/inicio/5.png') }}" alt="Imagen">
        <div class="text-overlay">
            <h1 class="titleSub">Tienda</h1>
            <p>Te ofrecemos instrumentos musicales y equipo de sonido de las marcas más reconocidas.</p>
            <a href="{{ route('tienda') }}" class="button-overlay">Ir a <b>tienda</b> ⟶ </a>
        </div>
    </div>
</div>


<div class="subseccion">
    <p class="titles">Productos recomendados</p>
</div>







<div class="recommended">
<div class="card recommended" style="width: 18rem;">
  <img src="{{ asset('images/inicio/9.png') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">SINTETIZADOR ROLAND XPS-30</h5>
    <p class="card-text">Teclado de 61 teclas con más de 1000 sonidos editables.</p>
    <p class="card-text"><B>$925.00</B></p>
    <a href="#" class="btn btn-primary">Comprar</a>
  </div>
</div>

<div class="card recommended" style="width: 18rem;">
  <img src="{{ asset('images/inicio/8.png') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">GUITARRA SQUIER BULLET STRATOCASTER</h5>
    <p class="card-text">Simple, asequible y práctica, diseñada para principiantes y estudiantes..</p>
    <p class="card-text"><B>$400.80</B></p>
    <a href="#" class="btn btn-primary">Comprar</a>
  </div>
</div>

<div class="card recommended" style="width: 18rem;">
  <img src="{{ asset('images/inicio/6.png') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">TECLADO YAMAHA MX88</h5>
    <p class="card-text">Teclado de 61 teclas con más de 1000 sonidos editables.</p>
    <p class="card-text"><B>$2,400.80</B></p>
    <a href="#" class="btn btn-primary">Comprar</a>
  </div>
</div>

<div class="card recommended" style="width: 18rem;">
  <img src="{{ asset('images/inicio/7.png') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">BATERIA PDP LIMITED EDITION</h5>
    <p class="card-text">El modelo de batería PDLT2213TI edición limitada, está construida con madera de arce europeo y cuenta con diseño Twisted Ivory.</p>
    <p class="card-text"><B>$1400.00</B></p>
    <a href="#" class="btn btn-primary">Comprar</a>
  </div>
</div>
</div>






@endsection