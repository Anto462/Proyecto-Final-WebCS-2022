<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM cliente WHERE CEDULA_CLI='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                   
                    
                                <input type="hidden" name="CEDULA_CLI" value="<?php echo $row['CEDULA_CLI']  ?>">
                                

                                <input type="text" class="form-control mb-3" name="NOMBRE" placeholder="NOMBRE" style="width:504px;" value="<?php echo $row['NOMBRE']  ?>">
                                    <input type="text" class="form-control mb-3" name="APELLIDO1" placeholder="APELLIDO1"  style="width:504px;" value="<?php echo $row['APELLIDO1']  ?>">
                                    <input type="text" class="form-control mb-3" name="APELLIDO2" placeholder="APELLIDO2" style="width:504px;" value="<?php echo $row['APELLIDO2']  ?>">
                                    <input type="text" class="form-control mb-3" name="TELEFONO" placeholder="TELEFONO" style="width:504px;" value="<?php echo $row['TELEFONO']  ?>">
                                    <input type="email" class="form-control mb-3" name="EMAIL" placeholder="EMAIL" style="width:504px;" value="<?php echo $row['EMAIL']  ?>">
                                    <input type="text" class="form-control mb-3" name="DIRECCION" placeholder="DIRECCION" style="width:504px;" value="<?php echo $row['DIRECCION']  ?>">
                                    <input type="text" class="form-control mb-3" name="CEDULA_EMP" placeholder="CEDULA_EMP" style="width:504px;" value="<?php echo $row['CEDULA_EMP']  ?>">
                                    <input type="password" class="form-control mb-3" name="ROL" placeholder="ROL" style="width:504px;" value="<?php echo $row['ROL']  ?>">
                                    
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>