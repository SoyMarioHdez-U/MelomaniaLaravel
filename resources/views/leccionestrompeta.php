@extends('plantilla')
@yield('content')
 <div class="leccion">
    <h1>Lección 1</h1>
    <p><iframe width="560" height="315" src="https://www.youtube.com/embed/_VkDa3ADjuQ?si=UZlCtWNHP9hChtTt" frameborder="0" allowfullscreen></iframe></p>
 </div>

 <div class="leccion">
    <h1>Lección 2</h1>
    <p><iframe width="560" height="315" src="https://www.youtube.com/embed/ICyGgIbnUx0?si=2Lc0Z-hyF7Rpgv7v" frameborder="0" allowfullscreen></iframe></p>
 </div>

 <div class="leccion">
    <h1>Lección 3</h1>
    <p><iframe width="560" height="315" src="https://www.youtube.com/embed/x8PmMbAvSU4?si=LQ_-3ZWqOKMkE4p6"  frameborder="0" allowfullscreen></iframe></p>
 </div>

 <div class="marcador">
    <p>Progreso: <span id="progreso">0%</span></p>
 </div>

 <button id="avanzar">Siguiente</button>

 <script src="http://localhost//MelomaniaSV/js/cursos.js"></script>

@endsection