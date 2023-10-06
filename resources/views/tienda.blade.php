@extends('plantilla')
@section('content')

    <!-- Parte cabezera de la tienda-->
    <img src="http://localhost/MelomaniaSV/Img/tienda/tienda.jpeg" alt="tienda" width="1115px" height="500px">
    <div>
        <div class= "texto-superpuesto">
          <h1>Tienda</h1>
        </div>    
    </div>
      
    <!-- Aquí se desplegarán los productos -->
      <div class="container"> <!-- Toda la parte de las secciones y barra -->
          <!-- Barra de navegación -->
        <div class="barralateral">
          <ul>
            <li><button class="botones">Intrumentos</button></li>
            <li><button class="botones">Equipo de sonido</button></li>
            <li><button class="botones">Libros</button></li>
          </ul>
        </div>        
      
     <!-- productos -->
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
              <div class="card shadow-sm" >
                <img src="{{ asset('images/AMPLIFICADOR PARA GUITARRA ELECTRICA 100W CHAMPION FENDER.jpg') }}" alt="" width="259" height="200">
                <div class="card-body">
                  <h5 class="card-title">AMPLIFICADOR PARA GUITARRA ELECTRICA 100W CHAMPION FENDER</h5>
                  <p class="card-text">$200.00 </p>
                  <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                      <a href=" " class="botondetalles">Detalles</a>
                    </div>
                      <a href=" " class="botoncarrito">Agregar</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
              <img src="{{ asset('/images/GUIT ACUSTICA CONCERT NYLON CLASSICAL CGIG BAG GODIN.jpeg') }}" alt="" width="259" height="200">
                <div class="card-body">
                  <h5 class="card-title">GUIT. ACUSTICA CONCERT NYLON CLASSICAL C/GIG BAG GODIN</h5>
                  <p class="card-text">$500.00 </p>
                  <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                      <a href=" " class="botondetalles">Detalles</a>
                    </div>
                      <a href=" " class="botoncarrito">Agregar</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
              <img src="{{ asset('/images/50-Partituras-Para-Aficionados-Al-Piano.jpg') }}" alt="" width="259" height="200">
                <div class="card-body" >
                  <h5 class="card-title">50 Partituras Para Aficionados Al Piano</h5>
                  <p class="card-text">$20.00</p>
                  <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                      <a href=" " class="botondetalles">Detalles</a>
                    </div>
                      <a href=" " class="botoncarrito">Agregar</a>
                  </div>
                </div>
              </div>
            </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

@endsection