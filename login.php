

<?php include("template/cabecera.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <link rel="stylesheet" href="css/estilosregistro.css">
 <title>Tour Recomendation</title>
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
    <div class="col-12" style="display: flex;padding: 0px 33rem;margin-top: 40px;">
                <form action="login.php" method="post" id="form">
                <div class="form">
                    
                        <h1>INICIAR SESIÓN</h1>
                    
                    <div class="grupo">
                        <input type="text" name="email" ><span class="barra"></span>
                        <label for="">Ingrese su Usuario</label>
                    </div>
                    <div class="grupo">
                        <input type="text" name="password" ><span class="barra"></span>
                        <label for="">Ingrese su Contraseña</label>
                    </div>
                        <button type="submit" name="accion">INGRESAR</button>

                    <div class="grupo">
                        <span class=""><a href="registro.php">Olvide mi contraseña?</a></span>
                    </div>
                    
                    <div class="grupo">
                        <span class=""><a href="registro.php">Registrarse</a></span>
                    </div>
                    </div>
                </form>
    </div>
</body>

</html>