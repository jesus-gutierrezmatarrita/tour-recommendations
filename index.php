<?php include("template/cabecera.php"); ?>

<head>
    <style>
        .gm-control-active>img {
            box-sizing: content-box;
            display: none;
            left: 50%;
            pointer-events: none;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%)
        }

        .gm-control-active>img:nth-child(1) {
            display: block
        }

        .gm-control-active:focus>img:nth-child(1),
        .gm-control-active:hover>img:nth-child(1),
        .gm-control-active:active>img:nth-child(1),
        .gm-control-active:disabled>img:nth-child(1) {
            display: none
        }

        .gm-control-active:focus>img:nth-child(2),
        .gm-control-active:hover>img:nth-child(2) {
            display: block
        }

        .gm-control-active:active>img:nth-child(3) {
            display: block
        }

        .gm-control-active:disabled>img:nth-child(4) {
            display: block
        }
    </style>
    <style>
        .gm-ui-hover-effect {
            opacity: .6
        }

        .gm-ui-hover-effect:hover {
            opacity: 1
        }

        .gm-ui-hover-effect>span {
            background-color: #000
        }

        @media (forced-colors:active),
        (prefers-contrast:more) {
            .gm-ui-hover-effect>span {
                background-color: ButtonText
            }
        }
    </style>
    <style>
        .gm-style .gm-style-cc a,
        .gm-style .gm-style-cc button,
        .gm-style .gm-style-cc span,
        .gm-style .gm-style-mtc div {
            font-size: 10px;
            box-sizing: border-box
        }

        .gm-style .gm-style-cc a,
        .gm-style .gm-style-cc button,
        .gm-style .gm-style-cc span {
            outline-offset: 3px
        }
    </style>
    <style>
        @media print {

            .gm-style .gmnoprint,
            .gmnoprint {
                display: none
            }
        }

        @media screen {

            .gm-style .gmnoscreen,
            .gmnoscreen {
                display: none
            }
        }
    </style>
    <style>
        .dismissButton {
            background-color: #fff;
            border: 1px solid #dadce0;
            color: #1a73e8;
            border-radius: 4px;
            font-family: Roboto, sans-serif;
            font-size: 14px;
            height: 36px;
            cursor: pointer;
            padding: 0 24px
        }

        .dismissButton:hover {
            background-color: rgba(66, 133, 244, .04);
            border: 1px solid #d2e3fc
        }

        .dismissButton:focus {
            background-color: rgba(66, 133, 244, .12);
            border: 1px solid #d2e3fc;
            outline: 0
        }

        .dismissButton:focus:not(:focus-visible) {
            background-color: #fff;
            border: 1px solid #dadce0;
            outline: none
        }

        .dismissButton:focus-visible {
            background-color: rgba(66, 133, 244, .12);
            border: 1px solid #d2e3fc;
            outline: 0
        }

        .dismissButton:hover:focus {
            background-color: rgba(66, 133, 244, .16);
            border: 1px solid #d2e2fd
        }

        .dismissButton:hover:focus:not(:focus-visible) {
            background-color: rgba(66, 133, 244, .04);
            border: 1px solid #d2e3fc
        }

        .dismissButton:hover:focus-visible {
            background-color: rgba(66, 133, 244, .16);
            border: 1px solid #d2e2fd
        }

        .dismissButton:active {
            background-color: rgba(66, 133, 244, .16);
            border: 1px solid #d2e2fd;
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 1px 3px 1px rgba(60, 64, 67, .15)
        }

        .dismissButton:disabled {
            background-color: #fff;
            border: 1px solid #f1f3f4;
            color: #3c4043
        }
    </style>
    <style>
        .gm-style-moc {
            background-color: rgba(0, 0, 0, .45);
            pointer-events: none;
            text-align: center;
            transition: opacity ease-in-out
        }

        .gm-style-mot {
            color: white;
            font-family: Roboto, Arial, sans-serif;
            font-size: 22px;
            margin: 0;
            position: relative;
            top: 50%;
            transform: translateY(-50%);
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%)
        }
    </style>
    <style>
        .gm-style img {
            max-width: none;
        }

        .gm-style {
            font: 400 11px Roboto, Arial, sans-serif;
            text-decoration: none;
        }
    </style>
    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--animate.css-->
    <link rel="stylesheet" href="css/animate.min.css">
    <!--fontawesome 5-->
    <link rel="stylesheet" href="css/all.min.css">
    <!--slicknav.css-->
    <link rel="stylesheet" href="css/slicknav.min.css">
    <!--lity.css-->
    <link rel="stylesheet" href="css/lity.min.css">
    <!--slickslider.css-->
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/slick.css">
    <!-- Custom.css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <section class="ws-section-spacing bg-gray shadow-lg p-3 mb-5 bg-body rounded" style="overflow:hidden; margin-top: 10%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6  d-flex align-items-center">
                    <div class="center-title">
                        <h1 class="title">Esta es Costa Rica</h1>
                        <p class="sub-title" style="margin-bottom: 5%;">Aquí podrás encontrar las mejores recomendaciones de sitios turísticos</p>
                        <a href="filtroTipoBusqueda.php" class="btn btn-info">Empecemos</a>
                    </div>
                </div>

                <div id="homeCarousel" class="carousel slide col-lg-6" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="4000">
                            <img src="images/pack-1.jpg" height="200px" alt="landscape1">
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            <img src="images/volcan.jpg" height="200px" alt="landscape2">
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            <img src="images/pack-3.jpg" height="200px" alt="landscape3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <footer  class="ws-section-spacing img-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-7 col-sm-12">
                    <div class="footer-widget">
                        <div class="title">
                            <h3>Acerca de</h3>
                        </div>
                        <p>Una nplataforma para explorar y descubrir de un sin fin de lugares que no sabías que existían.</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-7 col-sm-12">
                    <div class="footer-widget">
                        <div class="title">
                            <h3>Creado</h3>
                        </div>
                        <p>Por un grupo de estudiantes de la Universidad de Costa Rica.</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-5 col-sm-12">
                    <div class="footer-widget">
                        <div class="title">
                            <h3>Nuevas funciones
                            </h3>
                        </div>
                        <ul class="recent-post-list">
                            <li>
                                <div class="post-thum">
                                    <img src="images/f1.jpg" alt="" class="img-rounded">
                                </div>
                                <div class="post-content">
                                    <h5><a >Filtra según tus nececidades.</a>
                                    </h5>
                                    <span>12 Mayo, 2022</span>
                                </div>

                            </li>
                            <li>
                                <div class="post-thum">
                                    <img src="images/f2.jpg" alt="" class="img-rounded">
                                </div>
                                <div class="post-content">
                                    <h5><a >La función de crear un perfil de usuario.</a></h5>
                                    <span>20 Mayo, 2022</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-12">
                    <div class="footer-widget">
                        <div class="title">
                            <h3>Gallery</h3>
                        </div>
                        <ul class="ftr-gallery-list">
                            <li><a href="images/pack-7.jpg" data-lity=""><img src="images/pack-7.jpg" alt=""></a>
                            </li>
                            <li><a href="images/pack-1.jpg" data-lity=""><img src="images/pack-1.jpg" alt=""></a>
                            </li>
                            <li><a href="images/pack-2.jpg" data-lity=""><img src="images/pack-2.jpg" alt=""></a>
                            </li>
                            <li><a href="images/pack-6.jpg" data-lity=""><img src="images/pack-6.jpg" alt=""></a>
                            </li>
                            <li><a href="images/pack-5.jpg" data-lity=""><img src="images/pack-5.jpg" alt=""></a>
                            </li>
                            <li><a href="images/pack-4.jpg" data-lity=""><img src="images/pack-4.jpg" alt=""></a>
                            </li>
                            <li><a href="images/pack-3.jpg" data-lity=""><img src="images/pack-3.jpg" alt=""></a>
                            </li>
                            <li><a href="images/pack-2.jpg" data-lity=""><img src="images/pack-2.jpg" alt=""></a>
                            </li>
                            <li><a href="images/pack-1.jpg" data-lity=""><img src="images/pack-1.jpg" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery.1.12.4.js"></script>
    <!--bootstrap.min.js-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <!--slicknav.min.js-->
    <script src="js/jquery.slicknav.min.js"></script>
    <!--slickslider.min.js-->
    <script src="js/slick.min.js"></script>
    <!-- counterup.min.js -->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- magnific-popup.js -->
    <script src="js/lity.min.js"></script>
    <!-- isotope.pkgd.min.js -->
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/imagesloaded.js"></script>
    <!-- main.js -->
    <script src="js/main.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgIfLQi8KTxTJahilcem6qHusV-V6XXjw&amp;callback=initMap"></script>


    <style type="text/css">
        .typewrite>.wrap {
            border-right: 0.08em solid #fff
        }
    </style>
</body>
<?php include("template/pie.php"); ?>