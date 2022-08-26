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
    <link rel="stylesheet" href="Css/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/styles.css">
    <link rel="icon" href="images/image_processing20200511-27037-1qp07kw.png" type="image/x-icon">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
<header th:fragment="header" class="header">  
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.html"> <img src="https://creazilla-store.fra1.digitaloceanspaces.com/emojis/54336/hammer-and-wrench-emoji-clipart-md.png" width="40" height="40" class="d-inline-block align-top" alt=""/>  Venta De Repuestos</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html" ><img src="https://creazilla-store.fra1.digitaloceanspaces.com/emojis/56482/gear-emoji-clipart-md.png" width="25" height="25" class="d-inline-block align-top" alt=""/>  Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="sobrenosotros.html"><img src="https://creazilla-store.fra1.digitaloceanspaces.com/emojis/56482/gear-emoji-clipart-md.png" width="25" height="25" class="d-inline-block align-top" alt=""/>  Mas sobre nosotros</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="muestra.php"><img src="https://creazilla-store.fra1.digitaloceanspaces.com/emojis/56482/gear-emoji-clipart-md.png" width="25" height="25" class="d-inline-block align-top" alt=""/>  Nuestros productos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="registro.php"><img src="https://creazilla-store.fra1.digitaloceanspaces.com/emojis/56482/gear-emoji-clipart-md.png" width="25" height="25" class="d-inline-block align-top" alt=""/> Registrar</a>
                  </li>
                </ul>
              </div>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link nav-derecha"> Numero: +506 2233-4455</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-derecha"> Mail: Soporterep@Repuestos.co.cr</a>
                </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <br>
    <div class="sobrenoshead centrar">
    <h1>Usuarios registrados</h1>
    </div>
    <div class="container mt-5 centrar" >
                   

                        <div class="col-md-8 ">
                        <div class="table-responsive-lg">
                            <table class="table caption-top  table-striped" >
                            <caption>Listado de usuarios agregados</caption>
                                <thead class="table-dark table-striped" >
                                    <tr>
                                    <th>Cedula</th>
                                    <th>Nombre</th>
                                        <th>Primer Apellido</th>
                                        <th>Segundo Apellido</th>
                                        <th>telefono</th>
                                        <th>email</th>
                                        <th>direccion</th>
                                        <th>Cedula Confirm</th>
                                        <th>Contraseña</th>
                                        
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
                                                <th><?php  echo $row['ROL']?></th>   
                                                 

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
            </div>
            <div  class="centrar">
            <button> <a href="admin.php" style="text-decoration: none; color: white;"><span></span> Volver a la pagina principal</a></button>
            </div>
</body>
</html>