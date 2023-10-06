<?php
function ConectarDB(){
    $servidor="localhost";
    $usuario="root";
    $clave="catolica"; //catolica //180294
    $bd="melomania";
    $cnx=mysqli_connect($servidor, $usuario, $clave, $bd);
    return $cnx;
}

?>