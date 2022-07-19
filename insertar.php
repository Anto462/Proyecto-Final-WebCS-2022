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



$sql="INSERT INTO cliente VALUES('$CEDULA_CLI','$NOMBRE','$APELLIDO1','$APELLIDO2','$TELEFONO','$EMAIL','$DIRECCION','$CEDULA_EMP')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: lista.php");
    
}else {
}
?>