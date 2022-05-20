<?php include("template/cabecera.php"); ?>

<div class="bd-masthead mb-3" id="content">
    <div class="container-xxl bd-gutter">
        <section class="col-md-8 mx-auto text-center" src="images/laguna.jpg" data-image-width="256" data-image-height="256" id="welcomeText">
            <div class="">
                <h1 class="mb-3 fw-semibold">Esta es Costa Rica</h1>
                <p>Aquí podrás encontrar las mejores recomendaciones de sitios turísticos</p>
                <a href="filtroTipoBusqueda.php" class="btn btn-info">Empecemos</a>
            </div>
        </section>
    </div>

</div>

<div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="images/pack-1.jpg" class="d-block w-100" alt="landscape1">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="images/volcan.jpg" class="d-block w-100" alt="landscape2">
        </div>
        <div class="carousel-item">
            <img src="images/pack-3.jpg" class="d-block w-100" alt="landscape3">
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

<?php include("template/pie.php"); ?>