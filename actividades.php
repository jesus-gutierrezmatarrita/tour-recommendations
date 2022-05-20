<?php include("template/cabecera.php");?>
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
            <h1 class="titulo">Las mejores actividades a su alcance</h1>
            <p class="copy">Diviertase con nuestra actividad de.</p>
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
                            <spam class="number">1</spam>Descripción
                        </h3>
                        <p>Nuestro tour a Tortuguero en Costa Rica, te llevará a conocer realmente este bosque tropical
                            lluvioso. Actualmente destino 100% ecológico, repleto de naturaleza.

                            Afortunadamente para tu conveniencia, te llevamos al verdadero Tortuguero. También navegará
                            por los ríos y canales de agua dulce dentro del Parque Nacional. Tendrás la oportunidad de
                            experimentar verdaderamente una sección de este inmenso y espectacular parque nacional.
                        </p>
                    </div>
                    <div class="service">
                        <h3 class="n-service">
                            <spam class="number">1</spam>Recomendaciones
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est voluptatem cumque quam maiores
                            ipsam, repellendus ipsa omnis perferendis accusantium nesciunt!</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service">
                            <spam class="number">2</spam>Horario
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est voluptatem cumque quam maiores
                            ipsam, repellendus ipsa omnis perferendis accusantium nesciunt!</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service">
                            <spam class="number">3</spam>Incluye
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est voluptatem cumque quam maiores
                            ipsam, repellendus ipsa omnis perferendis accusantium nesciunt!</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="gallery" id="portafolio">
            <div class="contenedor">
                <h2 class="subtitulo">Galeria</h2>
                <div class="contenedor-galeria wow animated bounceInLeft box1" data-wow-delay="0.2s">
                    <img src="images/im1.jpg" alt="" class="img-galeria">
                    <img src="images/im2.jpg" alt="" class="img-galeria">
                    <img src="images/im3.jpg" alt="" class="img-galeria">
                    <img src="images/img7.jpg" alt="" class="img-galeria">
                    <img src="images/img8.jpg" alt="" class="img-galeria">
                    <img src="images/img9.jpg" alt="" class="img-galeria">
                </div>
            </div>
        </section>
        <section class="imagen-ligth">
            <img src="img/close.svg" alt="" class="close">
            <img src="" alt="" class="agregar-imagen">
        </section>
        <section class="contenedor" id="expertos">
            <h2 class="subtitulo">Nuestro Transporte incluye:</h2>
            <section class="class experts">
                <div class="cont-expert">
                    <img src="img/aire.png" alt="">
                    <h3 class="n-expert"></h3>
                </div>
                <div class="cont-expert">
                <img src="img/wifi.svg" title="Wifi" alt="Wifi">
                    <h3 class="n-expert"></h3>
                </div>
                <div class="cont-expert">
                    <img src="img/Bus.svg" alt="">
                    <h3 class="n-expert">Servicio privado</h3>
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