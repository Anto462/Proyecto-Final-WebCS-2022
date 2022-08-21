<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['ID_PRODUCTO'];

$sql="SELECT * FROM producto WHERE ID_PRODUCTO='$id'";
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
                    <form action="updateProductos.php" method="POST">
                   
                    
                                <input type="hidden" name="ID_PRODUCTO" value="<?php echo $row['ID_PRODUCTO']  ?>">
                                

                                <input type="text" class="form-control mb-3" name="NOMBRE_PRODUCTO" placeholder="NOMBRE_PRODUCTO" value="<?php echo $row['NOMBRE_PRODUCTO']  ?>">
                                    <input type="number" class="form-control mb-3" name="PRECIO" placeholder="PRECIO"  value="<?php echo $row['PRECIO']  ?>">
                                    <input type="text" class="form-control mb-3" name="DESCRIPCION" placeholder="DESCRIPCION" value="<?php echo $row['DESCRIPCION']  ?>">
                                    <input type="number" class="form-control mb-3" name="ID_PROVEEDOR" placeholder="ID_PROVEEDOR" value="<?php echo $row['ID_PROVEEDOR']  ?>">

                                    
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>