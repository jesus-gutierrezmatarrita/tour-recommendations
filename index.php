<?php include("template/cabecera.php"); ?>

<head>
    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--animate.css-->
    <link rel="stylesheet" href="css/animate.min.css">
    <!--fontawesome 5-->
    <link rel="stylesheet" href="css/all.min.css">
    <!--lity.css-->
    <link rel="stylesheet" href="css/lity.min.css">
    <!--slicknav.css-->
    <link rel="stylesheet" href="css/slicknav.min.css">
    <!--slickslider.css-->
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/slick.css">
    <!-- Custom.css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>

<section class="ws-section-spacing bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="center-title">
                    <h1 class="title">Esta es Costa Rica</h1>
                    <p class="sub-title" style="margin-bottom: 5%;">Aquí podrás encontrar las mejores recomendaciones de sitios turísticos</p>
                    <a href="filtroTipoBusqueda.php" class="btn btn-info">Empecemos</a>
                </div>
            </div>

            <div id="homeCarousel" class="carousel slide col-lg-6" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="images/pack-1.jpg" height="200px" alt="landscape1">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="images/volcan.jpg" height="200px" alt="landscape2">
                    </div>
                    <div class="carousel-item">
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

<?php include("template/pie.php"); ?>