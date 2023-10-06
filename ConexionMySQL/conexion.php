<?php
function ConectarDB(){
    $servidor="localhost";
    $usuario="root";
    $clave="180294"; //catolica
    $bd="melomania";
    $cnx=mysqli_connect($servidor, $usuario, $clave, $bd);
    return $cnx;
}

?>