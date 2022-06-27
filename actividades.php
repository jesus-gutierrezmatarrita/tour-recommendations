<?php include("template/cabecera.php"); ?>
<?php include("conexion.php"); ?>
<?php

$id= $_GET["direccion"];
//echo $id;
?>
<?php
require_once("conexion.php");

$conexion = base::conexionn();
$consulta = mysqli_query($conexion, "SELECT * FROM Actividad WHERE id = '$id'");
      while($row = mysqli_fetch_array($consulta)){
       
        $imagen = $row['imagen'];
        $descripcion=$row['descripcion'];
        $nombre =$row['nombre'];
        $precio=$row['precio'];


      }
    
      ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Web</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/estilos1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/animate.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'> 

    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:500,600&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header" id="inicio">
        <div class="contenedor head">
            <h1 class="titulo"><?= $nombre?></h1>
            <p class="copy">Have fun with our activities!!</p>
        </div>
    </header>
    <main>
        <section class="contenedor" id="servicio">
            <h2 class="subtitulo">...</h2>
            <div class="contenedor-servicio">
                <div class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/OtECxqXOhn0?autoplay=1"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="checklist-servicio">
                    <div class="service ">
                        <h3 class="n-service ">
                            <spam class="number">1</spam>Description
                        </h3>
                        <p><?= $descripcion?>
                        </p>
                    </div>
                    <div class="service">
                        <h3 class="n-service">
                            <spam class="number">2</spam>Schedule
                        </h3>
                        <p>Lunes-Juves: 11:00am 4pm</p>
                        <p>Viernes-Domingo: 11:00am 4pm</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service">
                            <spam class="number">3</spam>Price
                        </h3>
                        <p><?= $precio?></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="gallery" id="portafolio">
            <div class="contenedor">
                <h2 class="subtitulo">Gallery</h2>
                <div class="contenedor-galeria wow animated bounceInLeft box1" data-wow-delay="0.2s">
                    <img src=<?= $imagen?> alt="" class="img-galeria">
                    <img src=<?= $imagen?> alt="" class="img-galeria">
                    <img src=<?= $imagen?> alt="" class="img-galeria">
                    <img src=<?= $imagen?> alt="" class="img-galeria">
                    <img src=<?= $imagen?> alt="" class="img-galeria">
                    <img src=<?= $imagen?> alt="" class="img-galeria">
                </div>
            </div>
        </section>
        <section class="imagen-ligth">
            <img src="images/close.svg" alt="" class="close">
            <img src=<?= $imagen?> alt="" class="agregar-imagen">
        </section>
        <section class="contenedor" id="expertos">
            <h2 class="subtitulo">Our transport includes:</h2>
            <section class="class experts">
                <div class="cont-expert">
                    <img src="images/aircon.jpg" alt="">
                    <h3 class="n-expert">Air-conditioning</h3>
                </div>
                <div class="cont-expert">
                <img src="images/wifi.jpg" title="Wifi" alt="Wifi">
                    <h3 class="n-expert">Wi-Fi</h3>
                </div>
                <div class="cont-expert">
                    <img src="images/Bus.svg" alt="">
                    <p></p>
                    <h1></h1>
                    <br>
                    <br>
                    <h3 class="n-expert">Private service</h3>
                </div>
            </section>
        </section>
    </main>

    <script src="js/menu.js"></script>
    <script src="js/ligthbox.js"></script>
    <script src="js/wow.min.js"></script>
    <script>

   new WOW().init();
 
</script>

</body>

</html>