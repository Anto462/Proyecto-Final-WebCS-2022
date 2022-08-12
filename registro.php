<?php
include("conexion.php");
$con=conectar();

$sql="select *from cliente";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/normalize.css">
    <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
<div class="container loginbox">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                        <div class="col-lg-5">
                        <img src="images/1001384213.jpg " class="img-fluid" style="border-radius: 33px 33px 33px 33px;
                        -moz-border-radius: 33px 33px 33px 33px;
                        -webkit-border-radius: 33px 33px 33px 33px;
                         border: 0px solid #000000;">
                         </div>
                            <h1>Registrarse</h1>
                            <form action="insertar.php" method="POST">
                            <input type="text" class="form-control mb-3" name="CEDULA_CLI" placeholder="CEDULA_CLI">
                                    <input type="text" class="form-control mb-3" name="NOMBRE" placeholder="NOMBRE">
                                    <input type="text" class="form-control mb-3" name="APELLIDO1" placeholder="APELLIDO1">
                                    <input type="text" class="form-control mb-3" name="APELLIDO2" placeholder="APELLIDO2">
                                    <input type="text" class="form-control mb-3" name="TELEFONO" placeholder="TELEFONO">
                                    <input type="email" class="form-control mb-3" name="EMAIL" placeholder="EMAIL">
                                    <input type="text" class="form-control mb-3" name="DIRECCION" placeholder="DIRECCION">
                                    <input type="password" class="form-control mb-3" name="CEDULA_EMP" placeholder="CEDULA_EMP">
                                    

                                    <input type="submit" href="index.html" class="btn btn-dark">
                                </form>
                        </div>

                       
                    </div>  
                    </div>
            </div>
</body>
</html>