<?php

include("conexion.php");
$con=conectar();

$CEDULA_CLI=$_POST['CEDULA_CLI'];
$NOMBRE=$_POST['NOMBRE'];
$APELLIDO1=$_POST['APELLIDO1'];
$APELLIDO2=$_POST['APELLIDO2'];
$TELEFONO=$_POST['TELEFONO'];
$EMAIL=$_POST['EMAIL'];
$DIRECCION=$_POST['DIRECCION'];
$CEDULA_EMP=$_POST['CEDULA_EMP'];
$ROL=$_POST['ROL'];



$sql="UPDATE cliente SET  CEDULA_CLI='$CEDULA_CLI' ,NOMBRE='$NOMBRE',APELLIDO1='$APELLIDO1',APELLIDO2='$APELLIDO2' ,TELEFONO='$TELEFONO' ,EMAIL='$EMAIL' ,DIRECCION='$DIRECCION' ,CEDULA_EMP='$CEDULA_EMP', ROL='$ROL' WHERE CEDULA_CLI='$CEDULA_CLI'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: lista.php");
    }
?>