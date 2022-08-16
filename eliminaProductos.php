<?php

include("conexion.php");
$con=conectar();

$ID_PRODUCTO=$_GET['id'];

$sql="DELETE FROM producto  WHERE ID_PRODUCTO='$ID_PRODUCTO'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: muestra.php");
    }
?>