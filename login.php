

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="Css/normalize.css">
    <link rel="stylesheet" href="Css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
<section class="form my-4 mx-5">
    <div class="container loginbox">
        <div class="row no-gutters">
            <div class="col-lg-5">
            <img src="images/1001384213.jpg " class="img-fluid" style="border-radius: 33px 33px 33px 33px;
            -moz-border-radius: 33px 33px 33px 33px;
            -webkit-border-radius: 33px 33px 33px 33px;
            border: 0px solid #000000;">
        </div>
        <div class="col-lg-7">
            <form action="validar.php" method="post">
                <h1 class=" font-weight-bold py-5 animate__animated animate__backInLeft">Sistema de login</h1>
                <h4>Ingresa a tu cuenta</h4>
                <div class="form-row">
                    <div class="col-lg-7">
                <p>Usuario <input type="text" placeholder="ingrese su nombre" name="NOMBRE" class="form-control"></p>
                    </div>
                </div>

            <div class="form-row">
                <div class="col-lg-7">
                <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="ROL" class="form-control"></p>
                 </div>
            </div>
                
            <div class="form-row">
                <div class="col-lg-7">
                <input type="submit" value="Ingresar" class="loginbut">
                </div>
             </div>
                </form>
            <p>No posees una cuenta? <a href="registro.php"> Unete a nosotros!</a></p>
        </div>
        </div>
    </div>
   </section>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>