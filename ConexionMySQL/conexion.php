<?php
function ConectarDB(){
    $servidor="localhost";
    $usuario="root";
    $clave="catolica";
    $bd="melomania";
    $cnx=mysqli_connect($servidor, $usuario, $clave, $bd);
    return $cnx;
}

?>