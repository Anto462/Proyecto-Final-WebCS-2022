<?php

include("conexion.php");
$con=conectar();

$ID_PRODUCTO=$_POST['ID_PRODUCTO'];
$NOMBRE_PRODUCTO=$_POST['NOMBRE_PRODUCTO'];
$PRECIO=$_POST['PRECIO'];
$DESCRIPCION=$_POST['DESCRIPCION'];
$ID_PROVEEDOR=$_POST['ID_PROVEEDOR'];



$sql="UPDATE producto SET  ID_PRODUCTO='$ID_PRODUCTO' ,NOMBRE_PRODUCTO='$NOMBRE_PRODUCTO',
PRECIO='$PRECIO',DESCRIPCION='$DESCRIPCION' ,ID_PROVEEDOR='$ID_PROVEEDOR'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: productos.php");
    }
?>