<?php include("template/cabecera.php"); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="images/fv-icon.png" type="image/gif">
  <title>Tour Recomendation</title>
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

  <!-- Desination-slide -->
  <section class="same-section-spacing desination-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="center-title ">
            <h2 class="title">Tipo de búsqueda</h2>
            <h4 class="sub-title">Por favor, escoja una de las opciones para mostrar los lugares de su interés.</h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="destination-slide slick-initialized slick-slider slick-dotted">
            <div class="slick-list draggable">
              <div class="slick-track" style="opacity: 1; width: 5550px; transform: translate3d(-1110px, 0px, 0px);">
                <div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" role="tabpanel" id="slick-slide11" style="width: 370px;">
                </div>
                <div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" role="tabpanel" id="slick-slide12" style="width: 370px;">
                </div>
                <div class="slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide13" style="width: 370px;">
                </div>
                <div class="slick-slide" data-slick-index="4" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide14" style="width: 370px;margin-right: 4%;margin-left: 3%;">
                  <div>
                    <div class="item" style="width: 100%; display: inline-block;">
                      <div class="place-box">
                        <div class="wapper-img">
                          <img src="images/des-5.jpg" alt="">
                          <a href="listaAtractivos.php" class="pop-btn" tabindex="-1">Seleccionar</a>
                        </div>
                        <div class="desi-inner">
                          <h4>Atractivos </h4>
                          <span class="float-right">6 Atractivos</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="slick-slide" data-slick-index="5" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide15" style="width: 370px;">
                  <div>
                    <div class="item" style="width: 100%; display: inline-block;">
                      <div class="place-box">
                        <div class="wapper-img">
                          <img src="images/des-6.jpg" alt="">
                          <a href="#" class="pop-btn" tabindex="-1">Seleccionar</a>
                        </div>
                        <div class="desi-inner">
                          <h4>Recomendaciones </h4>
                          <span class="float-right">6 Recomendaciones</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End-Desination-slide -->
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