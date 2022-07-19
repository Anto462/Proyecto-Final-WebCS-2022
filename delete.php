<?php

include("conexion.php");
$con=conectar();

$CEDULA_CLI=$_GET['id'];

$sql="DELETE FROM cliente  WHERE CEDULA_CLI='$CEDULA_CLI'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: lista.php");
    }
?>