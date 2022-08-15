<?php
function conectar(){
    $host="localhost";
    $user="root";
    $pass="Anto0402";

    $bd="repuestos";
    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);
    return $con;
}


?>