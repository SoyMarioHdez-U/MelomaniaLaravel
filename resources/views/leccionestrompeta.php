@extends('plantilla')
@section('content')
<div class="leccion">
    <h1>Lección 1</h1>
    <p>Contenido de la lección...</p>
</div>

<div class="leccion">
    <h1>Lección 2</h1>
    <p>Contenido de la lección...</p>
</div>

<div class="leccion">
    <h1>Lección 3</h1>
    <p>Contenido de la lección...</p>
</div>

<div class="marcador">
    <p>Progreso: <span id="progreso">0%</span></p>
</div>

<button id="avanzar">Siguiente</button>

<script src="http://localhost//MelomaniaSV/js/cursos.js"></script>
    
@endsection