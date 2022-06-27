<?php include("template/cabecera.php"); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilosL.css">
    <title>LOGIN</title>
</head>
<?php
  session_start();
  if(isset($_POST['accion'])) {
  // Obtengo los datos cargados en el formulario de login.
  $email = $_POST['email'];
  $password = $_POST['password'];
   
  // Esto se puede remplazar por un usuario real guardado en la base de datos.
  if($email == 'email@dominio.com' && $password == '1234'){
    // Guardo en la sesión el email del usuario.
    $_SESSION['email'] = $email;
     
    // Redirecciono al usuario a la página principal del sitio.
    header("HTTP/1.1 302 Moved Temporarily"); 
    header("Location: listaAtractivos.php"); 
  }else{
    echo 'El email o password es incorrecto, <a href="login.php.html">vuelva a intenarlo</a>.<br/>';
  }
 
}

?>
<body>
    <div class="container">
        <div class="row justify-content-center pt-5 mt-5 m-1">
            <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formulario">
                <form action="login.php" method="post">
                    <div class="form-group text-center pt-3">
                        <h1 class="text-light">INICIAR SESIÓN</h1>
                    </div>
                    <div class="form-group mx-sm-4 pt-3">
                        <input type="text" name="email" class="form-control" placeholder="Ingrese su Usuario">
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <input type="text" name="password" class="form-control" placeholder="Ingrese su Contraseña">
                    </div>
                    <div class="form-group mx-sm-4 pb-2">
                        <input type="submit" name="accion" class="btn btn-block ingresar" value="INGRESAR">
                    </div>
                    <div class="form-group mx-sm-4 text-right">
                        <span class=""><a href="#" class="olvide">Olvide mi contraseña?</a></span>
                    </div>
                    <div class="form-group text-center">
                        <span><a href="" class="olvide1">REGISTRARSE</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>