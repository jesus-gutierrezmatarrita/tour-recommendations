<?php include("template/cabecera.php"); ?>
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

                    <h2 class="subtitulo">Volcán</h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Arenal</p>
                    <img src="images/laguna.jpg" width="100%" alt="">
                </div>

                <div class="carousel-item">
                    <h2 class="subtitulo">Volcán</h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Arenal</p>
                    <img src="images/laguna1.jpg" alt="">
                </div>

                <div class="carousel-item">
                    <h2 class="subtitulo">Volcán</h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Arenal</p>
                    <img src="images/volcan.jpg" alt="">
                </div>





            </div>
        </div>

    </div>



    <section id="about">
        <div class="container">
            <div class="video">
                <p align="center"><iframe width="600" height="300" src="https://www.youtube.com/embed/FoisNh7h4b0?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
            </div>
            <div class="containerabout wow animated zoomIn">
                <div class="i-do  ">
                    <h3>Dirección</h3>
                    <p>Desde San José, tome la carretera Interamericana hacia el oeste con destino a San Ramón.
                        Luego siga la carretera al norte a través de Los Ángeles, La Tigra y Chachagua hasta La
                        Fortuna de ahí tomar la ruta 142, 17 km hacia Tilarán una vez que llega al puesto de la
                        Policía Turística se desvía 2 km hacia el sur. </p>
                </div>
                <div class="containerabout wow animated zoomIn ">
                    <div class="love-do  ">
                        <h3>Descripción del lugar</h3>
                        <p>El Parque Nacional Volcán Arenal se localiza en la región noroeste
                            de Costa Rica, entre el pie de monte de la Cordillera de Tilarán y
                            las Llanuras de San Carlos, a 15 km de Fortuna. Es uno de los destinos más
                            visitados de la Zona Norte, cuenta con varios senderos: Heliconias, Coladas,
                            Tucanes y los Miradores, los cuales permiten la observación de gran parte de la
                            flora y fauna del parque así como de restos de las coladas de lava.
                            El parque cuenta con 12.124 ha. En cuanto a los servicios al visitante se tiene:
                            información, casa de guarda parques, senderos, comunicación, servicios sanitarios y
                            agua potable.</p>
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
                        <p>Todos los días de 8 am a 4 pm </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-money fa-3x"></i>
                        </div>
                        <h3>Tarifas</h3>
                        <p>Adulto nacional, y residente: ¢1.000.
                            Niño nacional, y residente: ¢500.
                            Adulto no residente: $15.
                            Niño no residente: $5. </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-phone fa-3x"></i>
                        </div>
                        <h3>Contacto</h3>
                        <p>info@catuzon.com
                            www.catuzon.com
                            Tel.: (506) 2479-7512 </p>
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