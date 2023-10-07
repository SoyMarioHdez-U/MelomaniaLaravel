@extends('plantilla')
@section('content')
   
            <div class="secciones">
                <h1 class="titles">Cursos</h1>
                <p class="titleContent">Es una de nuestras metas brindarte herramientas para
                                        que puedas desarrollarte musicalmente en lo que desees.<br> 
                                        Por lo que esta sección es para ti que estás interesado en aprender. Aquí 
                                        encontraras cursos básicos hasta avanzados, entre nuestros,<br>
                                        cursos encontrarás algunos gratis y para todo público
                                        y otros específicamente para los miembros de nuestra comunidad.<br>
                                      </p> <p><br></p>
                                        
</div>

<div class= "container_carru">
    <!--carrusel cursos basicos-->

    <h1 class="titles">Cursos Basicos</h1>
    <div style="text-align: center">
    <button class="BotonC">Ver Más....</button>
    </div>

  <div id="actions">
    <a id="arrowrigth">
      <img src="http://localhost/MelomaniaSV/Img/flecha-correcta.png" class="arrowrigth">
    </a>
    <a id="arrowleft">
      <img src="https://localhost/MelomaniaSV/Img/flecha-correcta.png" class="arrowleft">
    </a>
  </div>
  <div id="items">
    <img draggable="false" id="item" src="http://th.bing.com/th/id/OIP.58LdOl81xyiPtzI-SGi9xgHaFV?pid=ImgDet&rs=1" alt=" ">
    <img draggable="false" id="item" src="http://th.bing.com/th/id/OIP.3wbBhOw6xUzv4g-ThR_-JgHaE7?pid=ImgDet&rs=1" alt="">
    <img draggable="false" id="item" src="http://th.bing.com/th/id/R.76362c642d0b0c87bf4fc2541bf6679f?rik=E4oxmORvoBoecg&pid=ImgRaw&r=0" alt="" >
    <img draggable="false" id="item" src="http://www.1zoom.me/big2/84/184275-Sepik.jpg" alt="">
    <img draggable="false" id="item" src="http://th.bing.com/th/id/R.a77d53bf43b85e08d774d39bf9196a79?rik=iSYDP1%2fnonkS7g&pid=ImgRaw&r=0" alt="">
  </div>
</div>

<div class="container_carru">
    <!--carrusel cursos Intermedio-->
    <h1 class="titles">Cursos Intermedios</h1>
    <div style="text-align: center">
    <button class="BotonC">Ver Más....</button>
    </div>

  <div id="actions">
    <a id="arrowrigth">
      <img src="http://localhost/MelomaniaSV/Img/flecha-correcta.png" class="arrowrigth">
    </a>
    <a id="arrowleft">
      <img src="https://localhost/MelomaniaSV/Img/flecha-correcta.png" class="arrowleft">
    </a>
  </div>
  <div id="items">
    <img draggable="false" id="item" src="http://localhost/MelomaniaSV/Img/libro-solfeo.jpeg">
    <img draggable="false" id="item" src="http://localhost/MelomaniaSV/Img/microfono.jpeg">
    <img draggable="false" id="item" src="http://localhost/MelomaniaSV/Img/bongos.jpeg">
    <img draggable="false" id="item" src="http://localhost/MelomaniaSV/Img/guitarra.jpeg">
    <img draggable="false" id="item" src="http://localhost/MelomaniaSV/Img/saxofon.jpeg">
  </div>
</div>

    <div class="container_carru">
         <!--carrusel cursos Avanzado-->
         <h1 class="titles">Cursos Avanzados</h1>
         <div style="text-align: center">
    <button class="BotonC">Ver Más....</button>
    </div>

  <div id="actions">
    <a id="arrowrigth">
      <img src="http://localhost/MelomaniaSV/Img/flecha-correcta.png" class="arrowrigth">
    </a>
    <a id="arrowleft">
      <img src="https://localhost/MelomaniaSV/Img/flecha-correcta.png" class="arrowleft">
    </a>
  </div>
  <div id="items">
    <img draggable="false" id="item" src="http://localhost/MelomaniaSV/Img/piano.jpeg">
    <img draggable="false" id="item" src="http://localhost/MelomaniaSV/Img/violin.jpeg">
    <img draggable="false" id="item" src="http://localhost/MelomaniaSV/Img/DIRECCION.jpeg">
    <img draggable="false" id="item" src="http://localhost/MelomaniaSV/Img/guitarra.jpeg">
    <img draggable="false" id="item" src="http://localhost/MelomaniaSV/Img/saxofon.jpeg">
  </div>
</div>
@endsection