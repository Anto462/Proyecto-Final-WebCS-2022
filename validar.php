<?php
include('conexion.php');
$usuario=$_POST['NOMBRE'];
$pass=$_POST['ROL'];
session_start();
$_SESSION['NOMBRE']=$usuario;


$conexion=mysqli_connect("localhost","root","Anto0402","repuestos");

$consulta="SELECT*FROM cliente where NOMBRE='$usuario' and ROL='$pass'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['ROL']==1){//administrador
  
    header("location:admin.php");

}else
if($filas['ROL']==2){
  header("location:cliente.php");
}
else{
    ?>
    <?php
    include("login.php");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);