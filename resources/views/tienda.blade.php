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
            <li><button class="botones">Guitarras</button></li>
            <li><button class="botones">Teclados</button></li>
            <li><button class="botones">Violines</button></li>
            <li><button class="botones">Melates</button></li>
            <li><button class="botones">Percución</button></li>
            <li><button class="botones">Equipo de sonido</button></li>
            <li><button class="botones">Amplificadores</button></li>
            <li><button class="botones">Libros</button></li>
          </ul>
        </div>        
      
     <!-- productos -->
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
              <div class="card shadow-sm" >
                <img src="{{ asset('images/productos/1/ampli-guitar.jpg') }}" alt="" width="259" height="200">
                <div class="card-body">
                  <h5 class="card-title">AMPLIFICADOR PARA GUITARRA ELECTRICA 100W CHAMPION FENDER</h5>
                  <p class="card-text">$0200.0 </p>
                  <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                      <a href="{{ route('detalleampli') }}" class="botondetalles">Detalles</a>
                    </div>
                      <a href=" " class="botoncarrito">Agregar</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
              <img src="{{ asset('images/productos/2/guit-acus.jpeg') }}" alt="" width="259" height="200">
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
              <img src="{{ asset('/images/productos/3/50-Partituras-Para-Aficionados-Al-Piano.jpg') }}" alt="" width="259" height="200">
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

            <div class="col">
              <div class="card shadow-sm">
              <img src="{{ asset('images/productos/4/yamaha-sbp2f5.jpg') }}" alt="" width="259" height="200">
                <div class="card-body">
                  <h5 class="card-title">BATERIA ACUSTICA PROFESIONAL YAMAHA STAGE CUSTOM</h5>
                  <p class="card-text">$4,000.00 </p>
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
              <img src="{{ asset('images/productos/5/lpa1331-1-1030x1030.jpg') }}" alt="" width="259" height="200">
                <div class="card-body">
                  <h5 class="card-title">CAJON PERUANO LP ASPIRE 1331 NATURAL</h5>
                  <p class="card-text">$120.00 </p>
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
              <img src="{{ asset('images/productos/6/jackson-js32rt-dinky-151963.jpg') }}" alt="" width="259" height="200">
                <div class="card-body">
                  <h5 class="card-title">GUITARRA ELECTRICA JS32RT JACKSON</h5>
                  <p class="card-text">$1000.00 </p>
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
              <img src="{{ asset('images/productos/7/psre273.jpg') }}" alt="" width="259" height="200">
                <div class="card-body">
                  <h5 class="card-title">TECLADO ELECTRICO PSR-E273</h5>
                  <p class="card-text">$299.00 </p>
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
              <img src="{{ asset('images/productos/8/yamaha-pss-a50-teclado-portatil.jpg') }}" alt="" width="259" height="200">
                <div class="card-body">
                  <h5 class="card-title">TECLADO PORTATIL PSS-A50 YAMAHA</h5>
                  <p class="card-text">$16.00 </p>
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
              <img src="{{ asset('images/productos/9/xps-30_gal.jpg') }}" alt="" width="259" height="200">
                <div class="card-body">
                  <h5 class="card-title">TECLADO ROLAND XPS-30</h5>
                  <p class="card-text">$5000.00 </p>
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
              <img src="{{ asset('images/productos/10/yas-62-1030x1030.jpg') }}" alt="" width="259" height="200">
                <div class="card-body">
                  <h5 class="card-title">SAXOFON ALTO DORADO YAS-62 YAMAHA</h5>
                  <p class="card-text">$600.00 </p>
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
              <img src="{{ asset('images/productos/11/YTR2330YA-1030x1030.jpg') }}" alt="" width="259" height="200">
                <div class="card-body">
                  <h5 class="card-title">TROMPETA DORADA SERIE STANDAR YTR2330 YAMAHA</h5>
                  <p class="card-text">$400.00 </p>
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
              <img src="{{ asset('images/productos/12/S082-3-4.jpg') }}" alt="" width="259" height="200">
                <div class="card-body">
                  <h5 class="card-title">VIOLIN 3/4 XCALIBUR</h5>
                  <p class="card-text">$69.00 </p>
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