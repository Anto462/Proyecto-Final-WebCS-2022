<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/styles.css">
    <title>Venta de respuestos</title>
    <link rel="icon" href="images/image_processing20200511-27037-1qp07kw.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script defer src="js/script.js"></script>
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
                    <a class="nav-link active" href="sobrenosotros.html"><img src="https://creazilla-store.fra1.digitaloceanspaces.com/emojis/56482/gear-emoji-clipart-md.png" width="25" height="25" class="d-inline-block align-top" alt=""/>  Mas sobre nosotros</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="muestra.php"><img src="https://creazilla-store.fra1.digitaloceanspaces.com/emojis/56482/gear-emoji-clipart-md.png" width="25" height="25" class="d-inline-block align-top" alt=""/>  Nuestros productos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html" ><img src="https://creazilla-store.fra1.digitaloceanspaces.com/emojis/56482/gear-emoji-clipart-md.png" width="25" height="25" class="d-inline-block align-top" alt=""/>  Salir</a>
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
    <div class="container">
    <div class="inicio1">
        <div class="titulos">
          <br>
          <br>
          <br>
          <h1>Bienvenido</h1>
        <h1>GRAN PROMOCION!</h1>
        <h2>Consiguele las mejores piezas a tu auto!!!</h2>
        <div>
          <p>Promocion valida hasta el 1 de Enero del 2023</p>
      </div>
      <div>
      <button type="button"><span></span> <a style="text-decoration:none ; color:whitesmoke ;" href="muestra.php">IR </a> </button>
      </div>
      <br>
       </div>
    </div>
    <br>
    <br>
    <div>
      <br>
      <button type="button"><span></span> <a style="text-decoration:none ; color:whitesmoke ;" href="Frenos.php">FRENOS</a> </button>
      <button type="button"><span></span> <a style="text-decoration:none ; color:whitesmoke ;" href="Motores.php">MOTORES</a> </button>
      <button type="button"><span></span> <a style="text-decoration:none ; color:whitesmoke ;" href="Llantas.php">LLANTAS</a> </button>
      <button type="button"><span></span> <a style="text-decoration:none ; color:whitesmoke ;" href="Seguridad.php">SEGURIDAD</a> </button>
      <button type="button"><span></span> <a style="text-decoration:none ; color:whitesmoke ;" href="Oferta.php">EN OFERTAA</a> </button>
    </div>
</div>
<div>
        <div class="contactos centrar">
          <br>
          <h2 class="centrar">Cotiza ya mismo tu repuesto</h2>

            <h2 style="color: rgb(235, 98, 19); font-size: 17px;">Contactanos llenando todos los campos</h2>
            <br>

            <div id="error"></div>

            <div class="form">
            <form id="form" action="/" method="GET">
            <div>   
            <label>Nombre:</label>
            <br>
            <input id="name" class="inputs" type="text" placeholder="Tu nombre" name="user" maxlength="30">
            <br>
            <br>
            <label>Telefono:</label>
            <br>
            <input id="phone" class="inputs" type= "number" placeholder="Tu telefono" name="tel" maxlength="8">
            </div> 
            <br>
            <label>Correo:</label>
            <br>
            <input id="mail" style="padding-right: 350px;" class="inputs" type="email" placeholder="Tu email" name="email" maxlength="50">
            <br>
            <br>
            <label>Detalle del producto:</label>
            <br>
            <input id="sms" type="text" placeholder="Producto a cotizar" name="mensaje" maxlength="10000" height="50px" width="50px">

            <br>
            <br>
            <button onclick="guardar()" type="submit"><span></span> Enviar </button>
            </div>

        </form>

</div>
<footer class="pie-pagina">
<div class="footer-cont">
<div>
<figure>
<a href="#">
  <link rel="icon" href="images/image_processing20200511-27037-1qp07kw.png" type="image/x-icon">
  </a>
  </figure>

  </div>
  <div>
    <h3 style="font-size: 35px; text-transform: capitalize;">SOBRE NOSOTROS</h3>
    <p>Numero: +506 2233-4455</p>
    <p>Mail: Soporterep@Repuestos.co.cr</p>
  </div>
  <div>
    <h3 style="font-size: 30px; text-transform: capitalize">SIGUENOS</h3>
    <ul class="socialmedia">
      <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
      <li><a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>
      <li><a href="https://www.instagram.com/?msclkid=b1784819abf211eca4613ea94873a212"><i class="fa fa-instagram"></i></a></li>
    </ul>
  </div>
  <p>&copy; 2022 PROGRA CLIENTE SERVIDOR <Span>Proyecto final</Span></p>
  </div>
</footer>

</body>
</html>