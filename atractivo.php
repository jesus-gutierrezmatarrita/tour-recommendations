<?php include("template/cabecera.php"); ?>
<?php include("conexion.php"); ?>
<?php

$id= $_GET["saludo"];
//echo $id;
?>
<?php
require_once("conexion.php");

$conexion = base::conexionn();
$consulta = mysqli_query($conexion, "SELECT * FROM atractivo_Turistico WHERE id = '$id'");
      while($row = mysqli_fetch_array($consulta)){
       
        $imagen = $row['imagen'];
        $descripcion=$row['descripcion'];
        $nombre =$row['nombre'];
        $lugarDescripcion=$row['descripcion_lugar'];
        $horario=$row['horario'];
        $tarifa=$row['tarifa'];
        $contacto=$row['contacto'];
        $urlYoutube=$row['url_youtube'];

      }
    
      ?>
<!DOCTYPE html>
<html lang="es">

<meta http-equiv="X-UA-Caompatible" content="ie=edge">

<head>
    <title>Materilize | Carrousel y Media</title>
    <link rel="stylesheet" href="css/animate.css" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:500,600&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- CSS Estilos -->
    <link rel="stylesheet" href="css/estilos.css">

</head>

<body class="body">
    <div class="container">

        <div class="col s12">
            <h1 class="centar-align titulo"></h1>

            <div class="carousel center-align">
                <div class="carousel-item">

                    <h2 class="subtitulo"></h2>
                    <div class="linea-division"></div>
                    <p class="sabor"><?= $nombre?></p>
                    <img src=<?= $imagen?> width="100%" alt="">
                </div>

                <div class="carousel-item">
                    <h2 class="subtitulo"></h2>
                    <div class="linea-division"></div>
                    <p class="sabor"><?= $nombre?></p>
                    <img src=<?= $imagen?> alt="">
                </div>

                <div class="carousel-item">
                    <h2 class="subtitulo"></h2>
                    <div class="linea-division"></div>
                    <p class="sabor"><?= $nombre?></p>
                    <img src=<?= $imagen?> alt="">
                </div>





            </div>
        </div>


    </div>
    <section id="about">
        <div class="container">
            <div class="video">
                <p align="center"><iframe width="600" height="300" src="<?=$urlYoutube?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
            </div>
            <div class="containerabout wow animated zoomIn">
                <div class="i-do  ">
                    <h3>Descripcion</h3>
                    <p><?= $descripcion?></p>
                </div>
                <div class="containerabout wow animated zoomIn ">
                    <div class="love-do  ">
                        <h3>Descripción del lugar</h3>
                        <p><?= $lugarDescripcion?></p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Service section -->
    <section id="service">
        <div class="container">
            <div class="row">

                <div class="sec-title text-center">
                    <h2 class="wow animated bounceInLeft">Información Adicional</h2>

                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-calendar fa-3x"></i>
                        </div>
                        <h3>Horario</h3>
                        <p><?= $horario?> </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-money fa-3x"></i>
                        </div>
                        <h3>Tarifas</h3>
                        <p><?= $tarifa?> </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-phone fa-3x"></i>
                        </div>
                        <h3>Contacto</h3>
                        <p><?= $contacto?> </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end Service section -->
    <section id="google-map">
        <div id="map-canvas" class="wow animated fadeInUp">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3923.4997465199613!2d-84.73033738599553!3d10.461213592535898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa00e962bb51111%3A0x1062d8c68ecdfecf!2sParque%20Nacional%20Volc%C3%A1n%20Arenal!5e0!3m2!1ses-419!2scr!4v1652819056392!5m2!1ses-419!2scr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" display:block></iframe>

        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- JS Main -->
    <script src="js/carousel.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>
<?php include("template/pie.php"); ?>