<?php include("template/cabecera.php"); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="images/fv-icon.png" type="image/gif">
  <title>Tour recomendation</title>
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

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark ">
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <label for="formGroupExampleInput">Animales</label>
              <i class="bi bi-boombox"></i>
              <br> </br>
              <input style="margin: 11px;" type="checkbox" aria-label="Checkbox for following text input">
            </div>
        </li>
        <li class="nav-item">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <label for="formGroupExampleInput">Comidas</label>
              <br> </br>
              <input style="margin: 11px;" type="checkbox" aria-label="Checkbox for following text input">
            </div>
          </div>
        </li>

        <li class="nav-item">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <label for="formGroupExampleInput">Niños</label>
              <br> </br>
              <input style="margin: 11px;" type="checkbox" aria-label="Checkbox for following text input">
            </div>
          </div>
        </li>

        <li class="nav-item">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <label for="formGroupExampleInput">Parqueo</label>
              <br> </br>
              <input style="margin: 11px;" type="checkbox" aria-label="Checkbox for following text input">
            </div>
          </div>
        </li>
        <li class="nav-item">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <label for="formGroupExampleInput">Pago con tarjeta</label>
              <br> </br>
              <input style="margin: 11px;" type="checkbox" aria-label="Checkbox for following text input">
            </div>
          </div>
        </li>
        <li class="nav-item">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <label for="formGroupExampleInput">Familiar</label>
              <br> </br>
              <input style="margin: 11px;" type="checkbox" aria-label="Checkbox for following text input">
            </div>
          </div>
        </li>
        <li class="nav-item">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <label for="formGroupExampleInput">Facil acceso</label>
              <br> </br>
              <input style="margin: 11px;" type="checkbox" aria-label="Checkbox for following text input">
            </div>
          </div>
        </li>
        <li class="nav-item">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <label for="formGroupExampleInput">Montaña</label>
              <br> </br>
              <input style="margin: 11px;" type="checkbox" aria-label="Checkbox for following text input">
            </div>
          </div>
        </li>
        <li class="nav-item">
          <div class="input-group-prepend">
            <button style="margin: 11px; " type="button" class="btn btn-success">Filtrar</button>
          </div>
        </li>

      </ul>
    </nav>
  </div>

  <!-- Start-Package-Section -->
  <section class="ws-section-spacing bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="center-title ">
            <h2 class="title">Atractivos turistico</h2>
            <h4 class="sub-title">Se le mostrara una lista de atractivos turisticos de los cuales podra cambiar seleccionando los filtros de su interes.</h4>
          </div>
        </div>
      </div>
      <div class="row masonry-item" style="position: relative; height: 690px;">
        <div class="col-lg-4 col-md-6 col-sm-12 masonry" style="position: absolute; left: 0%; top: 0px;">
          <div class="package-list-wrap "><img src="images/pack-1.jpg" class="img-fluid" alt="">
            <div class="package-list-content">
              <p class="package-list-duration">Atractivo de playa</p>
              <h3 class="package-list-title">
                <a href="#">Puerto Viejo, Limon</a>
              </h3>
              <a class="package-list-button" href="#">Conocer mas</a>
            </div>
          </div>
        </div>
        <!-- item -->
        <div class="col-lg-4 col-md-6 col-sm-12 masonry" style="position: absolute; left: 33.3333%; top: 0px;">
          <div class="package-list-wrap "><img src="images/pack-2.jpg" class="img-fluid" alt="">
            <div class="package-list-content">
              <p class="package-list-duration">Atractivo de playa</p>
              <h3 class="package-list-title">
                <a href="#">Bahia Bayena, Guanacaste</a>
              </h3>
              <a class="package-list-button" href="#">Conocer mas</a>
            </div>
          </div>
        </div>
        <!-- item -->
        <div class="col-lg-4 col-md-6 col-sm-12 masonry" style="position: absolute; left: 66.6667%; top: 0px;">
          <div class="package-list-wrap "><img src="images/pack-3.jpg" class="img-fluid" alt="">
            <div class="package-list-content">
              <p class="package-list-duration">3Days, 4 NIghts Start From $250</p>
              <h3 class="package-list-title">
                <a href="#">Best tours in Mexico</a>
              </h3>
              <a class="package-list-button" href="#">Book Now</a>
            </div>
          </div>
        </div>
        <!-- item -->
        <div class="col-lg-4 col-md-6 col-sm-12 masonry" style="position: absolute; left: 0%; top: 345px;">
          <div class="package-list-wrap "><img src="images/pack-4.jpg" class="img-fluid" alt="">
            <div class="package-list-content">
              <p class="package-list-duration">3Days, 4 NIghts Start From $370</p>
              <h3 class="package-list-title">
                <a href="#">Holiday in Azerbaijan</a>
              </h3>
              <a class="package-list-button" href="#">Book Now</a>
            </div>
          </div>
        </div>
        <!-- item -->
        <div class="col-lg-4 col-md-6 col-sm-12 masonry" style="position: absolute; left: 33.3333%; top: 345px;">
          <div class="package-list-wrap "><img src="images/pack-5.jpg" class="img-fluid" alt="">
            <div class="package-list-content">
              <p class="package-list-duration">3Days, 4 NIghts Start From $450</p>
              <h3 class="package-list-title">
                <a href="#">Hamburger ham pork</a>
              </h3>
              <a class="package-list-button" href="#">Book Now</a>
            </div>
          </div>
        </div>
        <!-- item -->
        <div class="col-lg-4 col-md-6 col-sm-12 masonry" style="position: absolute; left: 66.6667%; top: 345px;">
          <div class="package-list-wrap "><img src="images/pack-6.jpg" class="img-fluid" alt="">
            <div class="package-list-content">
              <p class="package-list-duration">3Days, 4 NIghts Start From $550</p>
              <h3 class="package-list-title">
                <a href="#">Eternal City of Rome</a>
              </h3>
              <a class="package-list-button" href="#">Book Now</a>
            </div>
          </div>
        </div>
        <!-- item-end -->
      </div>
    </div>
  </section>
  <!-- End-Package-Section -->

  <!-- Jquery.min.js-->
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



  <style type="text/css">
    .typewrite>.wrap {
      border-right: 0.08em solid #fff
    }
  </style>
</body>

</html>
<?php include("template/pie.php"); ?>