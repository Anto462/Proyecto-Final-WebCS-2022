<?php
include("conexion.php");
$con=conectar();

$sql="select * from cliente";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
                   

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                    <th>Cedula</th>
                                    <th>Nombre</th>
                                        <th>Primer Apellido</th>
                                        <th>Segundo Apellido</th>
                                        <th>telefono</th>
                                        <th>email</th>
                                        <th>direccion</th>
                                        <th>password</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                        <form action="registro.php" method="GET">
                                            <tr>
                                            <th><?php  echo $row['CEDULA_CLI']?></th> 
                                                <th><?php  echo $row['NOMBRE']?></th>
                                                <th><?php  echo $row['APELLIDO1']?></th>
                                                <th><?php  echo $row['APELLIDO2']?></th>
                                                <th><?php  echo $row['TELEFONO']?></th>    
                                                <th><?php  echo $row['EMAIL']?></th>   
                                                <th><?php  echo $row['DIRECCION']?></th>   
                                                <th><?php  echo $row['CEDULA_EMP']?></th>   
                                                 

                                                <th><a href="actualizar.php?id=<?php echo $row['CEDULA_CLI'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['CEDULA_CLI'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                            </form>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        
                    </div>  
            </div>
            <button> <a href="index.html">Volver a la pagina principal</a></button>
</body>
</html>