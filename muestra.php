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
                        <li class="nav-item">
                            <a class="nav-link active" href="login.html"><img src="https://creazilla-store.fra1.digitaloceanspaces.com/emojis/56482/gear-emoji-clipart-md.png" width="25" height="25" class="d-inline-block align-top" alt="" /> Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="registro.php"><img src="https://creazilla-store.fra1.digitaloceanspaces.com/emojis/56482/gear-emoji-clipart-md.png" width="25" height="25" class="d-inline-block align-top" alt="" /> Registrarse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="lista.php"><img src="https://creazilla-store.fra1.digitaloceanspaces.com/emojis/56482/gear-emoji-clipart-md.png" width="25" height="25" class="d-inline-block align-top" alt="" /> Lista de Registrados</a>
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
    </div>

    <div class="row">
        <div class="side">
            <div class="sidebar-wrapper">
                <div class="sidebar">
                    <ul class="sidebar__nav">
                        <li> <a href="muestra.php">Mostrar Productos</a> </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main">
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
                echo "<h3>Datos de los productos ingresados al sistema</h3>";
                echo "<br>";
                imprimeTabla($miQuery);
                echo "</div>";
            }
            //Imprimir tabla
            function imprimeTabla($miQuery)
            {
                echo "<table WIDTH=75%>";
                echo "<tr>";
                echo " <th> Código del producto  </th>";
                echo " <th> </th>";
                echo " <th> </th>";
                echo " <th> </th>";
                echo " <th> Nombre del Producto </th>";
                echo " <th> Precio  </th>";
                echo " <th> Descripción </th>";
                echo " <th> Código del proveedor </th>";
                echo "</tr>";
                if ($miQuery->num_rows > 0) {
                    echo "<tr>";
                    while ($row = $miQuery->fetch_assoc()) {
                        echo "<td colspan='4'>" . $row['ID_PRODUCTO'] .      "</td> ";
                        echo "<td>" . $row['NOMBRE_PRODUCTO'] .      "</td> ";
                        echo "<td>" . $row['PRECIO'] .      "</td> ";
                        echo "<td>" . $row['DESCRIPCION'] .      "</td> ";
                        echo "<td>" . $row['ID_PROVEEDOR'] .      "</td> ";
                        echo "<td>" . "<a href='mostrarProductos.php?ID_PRODUCTO=" .  $row['ID_PRODUCTO'] .
                            "'>Mostrar</a>" .   "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr>";
                    echo " <th> No hay productos registrados </th>";
                    echo "</tr>";
                    //    echo "0 Filas";
                }
                echo "</table>";
            }
            //End imprimeTabla  -----------------------------------------------------------

            ?>
        </div>
    </div>

    <div class="centrar">
        <button> <a href="index.html" style="text-decoration: none; color: white;"><span></span> Volver a la pagina principal</a></button>
    </div>
</body>

</html>