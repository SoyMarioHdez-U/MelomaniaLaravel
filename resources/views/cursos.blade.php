@extends('plantilla')
@section('content')
   
            <div class="secciones">
                <h1 class="titles">Cursos</h1>
                <p class="titleContent">Es una de nuestras metas brindarte herramientas para
                                        que puedas desarrollarte musicalmente en lo que desees.<br> 
                                        Por lo que esta sección es para ti que estás interesado en aprender. Aquí 
                                        encontraras cursos básicos hasta avanzados, <br>entre nuestros
                                        cursos encontrarás algunos gratis y para todo público
                                        y otros específicamente para los miembros de nuestra comunidad.<br>
                                      </p> <p><br></p>
                                        
</div>

<div class="carrusel-cursos">
<div class="titulo-curso">
  <h1 class="titles">Cursos Basicos</h1>
<<<<<<< HEAD
=======
  <p align="center"><a class="ver-cursos" href="{{ route('cursosbasicos')}}"> Ver los cursos...</a></p>
>>>>>>> 8b429aff2b13a993fdd951c753fbea450e4c1606
</div>  

  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('images/cursos/prin1.png') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/cursos/prin2.png') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/cursos/prin3.png') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/cursos/prin4.png') }}" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="carrusel-cursos">
<div class="titulo-curso">
  <h1 class="titles">Cursos Intermedios</h1>
<<<<<<< HEAD
=======
  <p align="center"><a class="ver-cursos" href="{{ route('cursosintermedios')}}"> Ver los cursos...</a></p>
>>>>>>> 8b429aff2b13a993fdd951c753fbea450e4c1606
</div>  

  <div id="carouselExample2" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('images/cursos/inter1.png') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/cursos/inter2.png') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/cursos/inter3.png') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/cursos/inter4.png') }}" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>


<div class="carrusel-cursos">
<div class="titulo-curso">
  <h1 class="titles">Cursos Avanzados</h1>
<<<<<<< HEAD
=======
  <p align="center"><a class="ver-cursos" href="{{ route('cursosavanzados')}}"> Ver los cursos...</a></p>
>>>>>>> 8b429aff2b13a993fdd951c753fbea450e4c1606
</div>  

  <div id="carouselExample3" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('images/cursos/ava1.png') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/cursos/ava2.png') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/cursos/ava3.png') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/cursos/ava4.png') }}" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample3" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample3" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>



</div>






<script src="{{ asset('js/cursos.png') }}"></script>
@endsection