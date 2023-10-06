
<?php
require 'config/database2.php';
$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT id_producto, nombre, precio_unitario FROM productos WHERE activo=1");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC); 

?>


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
            <?php foreach ($resultado as $row) { ?>
              <div class="col">
                <div class="card shadow-sm">
                  <?php

                  $id = $row['id_producto'];
                  $imagen = "{{ asset('images/productos/" . $id_producto . "/ampli-guitar.jpg') }}";

                  if (!file_exists($imagen)) {
                    $imagen = "images/no-image.jpeg";
                  }
                  ?>
                  <img scr="<?php echo $imagen; ?>">

                  <img src=" <?php echo $imagen; ?> " alt="" width="259" height="200">
                  <div class="card-body">
                    <h5 class="card-title"> <?php echo $row['nombre']; ?> </h5>
                    <!-- <h5 class="card-title">AMPLIFICADOR PARA GUITARRA ELECTRICA 100W CHAMPION FENDER</h5> -->
                    <h5 class="card-title"> <?php echo $row['precio']; ?> </h5>
                    <!-- <p class="card-text">$200.00 </p> -->
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <!-- <div class="btn-group">
                      <a href="details.php?id=<?php echo $row['id']; ?>&token=<?php echo 
                      hash_hmac('sha1', $row['id'], KEY_TOKEN); ?>" class="botondetalles">Detalles</a>
                      </div> -->
                        <a href=" " class="botondetalles">Detalles</a>
                      </div>
                        <a href=" " class="botoncarrito">Agregar</a>
                    </div>
                  </div>
                </div>
              </div>
            <?php  } ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

@endsection