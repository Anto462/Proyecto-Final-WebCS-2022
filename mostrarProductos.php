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

    <?php     
        function recogeGet($var, $m = "")
        {
            if (!isset($_GET[$var])) {
                $tmp = (is_array($m)) ? [] : "";
            } elseif (!is_array($_GET[$var])) {
                $tmp = trim(htmlspecialchars($_GET[$var], ENT_QUOTES, "UTF-8"));
            } else {
                $tmp = $_GET[$var];
                array_walk_recursive($tmp, function (&$valor) {
                    $valor = trim(htmlspecialchars($valor, ENT_QUOTES, "UTF-8"));
                });
            }
            return $tmp;
        }
        $ID_PRODUCTO = recogeGet('ID_PRODUCTO');
        $validaDatosBD = true;

        require_once 'consultaBD.php';

        $elSQL = "SELECT NOMBRE_PRODUCTO, PRECIO, DESCRIPCION, ID_PROVEEDOR
                    FROM producto
                        where ID_PRODUCTO='$ID_PRODUCTO'";
        $miQuery = ConsultaSQL($elSQL);

        if ($miQuery->num_rows > 0) {
            while ($row = $miQuery->fetch_assoc()) {
                $NOMBRE_PRODUCTO = $row["NOMBRE_PRODUCTO"];
                $PRECIO = $row["PRECIO"];
                $DESCRIPCION = $row["DESCRIPCION"];
                $ID_PROVEEDOR = $row["ID_PROVEEDOR"];
            }
        } else {
            $validaDatosBD = false;
        }

        ?>

   <div class="main">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Lista de productos</h5>
                    <p class="card-text">
                        Codigo de producto: <?php echo "<strong>$ID_PRODUCTO</strong>" ?> <br>
                        Nombre del producto: <?php echo "<strong>$NOMBRE_PRODUCTO</strong>" ?>
                        <br>
                        Precio: <?php echo "<strong>$PRECIO</strong>" ?>
                        <br>
                        Descripción: <?php echo "<strong>$DESCRIPCION</strong>" ?> <br>
                        Código del proveedor: <?php echo "<strong>$ID_PROVEEDOR</strong>" ?> <br>
                    </p>

                    <table>
                        <td>
                            <a href="productos.php" class="btn btn-outline-primary">Volver a los productos</a>
                        </td>
                        <td>
                            <a href="actualizaProductos.php?ID_PRODUCTO=<?php echo $ID_PRODUCTO ?>" class="btn btn-outline-success">Modifcar producto</a>
                        </td>
                        <td>
                        <a href="eliminaProductos.php?id=<?php echo $ID_PRODUCTO ?>" class="btn btn-danger">deletar producto</a>
                        </td>
                    </table>
                </div>
            </div>
        </div>
  </div>

  <div class="centrar">
    <button> <a href="index.html" style="text-decoration: none; color: white;"><span></span> Volver a la pagina principal</a></button>
  </div>
  <script language="JavaScript" type="text/javascript" src="js/script.js"></script>

</body>

</html>