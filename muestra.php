<?php
include("conexion.php");
$con = conectar();

$sql = "select * from producto";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/styles.css">
    <link rel="stylesheet" href="Css/sidebar.css">
    <title>Productos</title>
    <link rel="icon" href="images/image_processing20200511-27037-1qp07kw.png" type="image/x-icon">
</head>

<body>
    <header th:fragment="header" class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"> <img src="https://creazilla-store.fra1.digitaloceanspaces.com/emojis/54336/hammer-and-wrench-emoji-clipart-md.png" width="40" height="40" class="d-inline-block align-top" alt="" /> Venta De Repuestos</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html"><img src="https://creazilla-store.fra1.digitaloceanspaces.com/emojis/56482/gear-emoji-clipart-md.png" width="25" height="25" class="d-inline-block align-top" alt="" /> Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="sobrenosotros.html"><img src="https://creazilla-store.fra1.digitaloceanspaces.com/emojis/56482/gear-emoji-clipart-md.png" width="25" height="25" class="d-inline-block align-top" alt="" /> Mas sobre nosotros</a>
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

    <div class="sobrenoshead centrar">
        <h1>Productos</h1>
      <div style="font-size: 15px; text-decoration: none ;">
      <br>
      <button type="button"><span></span> <a style="text-decoration:none ; color:whitesmoke ;" href="Frenos.php">FRENOS</a> </button>
      <button type="button"><span></span> <a style="text-decoration:none ; color:whitesmoke ;" href="Motores.php">MOTORES</a> </button>
      <button type="button"><span></span> <a style="text-decoration:none ; color:whitesmoke ;" href="Llantas.php">LLANTAS</a> </button>
      <button type="button"><span></span> <a style="text-decoration:none ; color:whitesmoke ;" href="Seguridad.php">SEGURIDAD</a> </button>
      <button type="button"><span></span> <a style="text-decoration:none ; color:whitesmoke ;" href="Oferta.php">EN OFERTA</a> </button>
    </div>
    </div>
        <div style="background-color:  #f1642c33;" class="main">
        <?php
            //Pagina que muestra los datos de base de datos

            require_once 'consultaBD.php';
            ImprimeDatos();

            function ImprimeDatos()
            {
                $elSQL = "SELECT pr.ID_PRODUCTO, NOMBRE_PRODUCTO, PRECIO, DESCRIPCION, ID_PROVEEDOR
                                FROM producto pr";
                $miQuery = ConsultaSQL($elSQL);
                echo "<div id=ContactDiv>";
                echo "<h3>Listado de productos:</h3>";
                echo "<br>";
                imprimeTabla($miQuery);
                echo "</div>";
            }
            //Imprimir tabla
            function imprimeTabla($miQuery)
            {
                echo "<div style='background-color:  #f1642c33; margin:5px ;' class='row row-cols-4 centrar'>";
                if ($miQuery->num_rows > 0) {
                    echo "<tr>";
                    while ($row = $miQuery->fetch_assoc()) {
                echo "<div style='margin:10px ;' class='card text-center text-white bg-dark mb-3' style='width: 18rem;'>";
                echo "<img src='images/jp-performance-4332255_1280.jpg' class='card-img-top' alt='...'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>" . $row['NOMBRE_PRODUCTO'] ."</h5>";
                echo "<h6 class='card-subtitle mb-2 text-muted'>Precio:</h6>";
                echo "<h6 class='card-subtitle mb-2 text-muted'>" . $row['PRECIO'] .      "</h6>";
                echo " <p class='card-text'>" . $row['DESCRIPCION'] .      "</p>";
                echo "<a href='mostrarProductos.php?ID_PRODUCTO=" .  $row['ID_PRODUCTO'] .
                "' class='btn btn-primary'> Modificar </a>";
                echo "</div>";
                echo "</div>";
                    }
                } else {
                    echo "<tr>";
                    echo " <th> No hay productos registrados </th>";
                    echo "</tr>";
                    //    echo "0 Filas";
                }
                echo "</div>";
                echo "</table>";
            }
            //End imprimeTabla  -----------------------------------------------------------

            ?>
        </div>
    

    <div class="centrar">
        <button> <a href="index.html" style="text-decoration: none; color: white;"><span></span> Volver a la pagina principal</a></button>
    </div>
</body>

</html>