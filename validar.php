<?php
include('conexion.php');
$usuario=$_POST['NOMBRE'];
$pass=$_POST['CEDULA_EMP'];
session_start();
$_SESSION['NOMBRE']=$usuario;


$conexion=mysqli_connect("localhost","root","","repuestos");

$consulta="SELECT*FROM cliente where NOMBRE='$usuario' and CEDULA_EMP='$pass'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:index.html");

}else{
    ?>
    <?php
    include("login.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);