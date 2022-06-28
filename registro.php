<?php include("template/cabecera.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Recomendation</title>
    <link rel="stylesheet" href="css/estilosregistro.css">
</head>


<body>

<div class="col-12" style="display: flex;padding: 0px 33rem;margin-top: 40px;">
    <form action="" method="POST" id="form">
        <div class="form">
            <h1>Registro</h1>
            <div class="grupo">
                <input type="text" name="" id="name" required><span class="barra"></span>
                <label for="">Nombre</label>
            </div>
            <div class="grupo">
                <input type="email" name="" id="email" required><span class="barra"></span>
                <label for="">Email</label>
            </div>
            <div class="grupo">
                <input type="password" name="" id="password" required><span class="barra"></span>
                <label for="">Password</label>
            </div>

            <button type="submit">Suscribirte</button>
        </div>
    </form>

    </div>
</body>
</html>