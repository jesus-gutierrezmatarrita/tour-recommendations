<?php include("template/cabecera.php"); ?>
<?PhP include("algoritmoBayesActividades.php"); ?>
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
  <section class="ws-section-spacing bg-gray">
    <div class="search_area">
      <div class="container">
        <!--Search Form-->
        <form class=" row search_area-inner" method="POST">
          <div class="col-lg-3">
            <label>Tipo de turista</label>
            <select class="selectpicker search-fields form-control" name="tipoTurista">

              <option value="1"> Nacional</option>
              <option value="2"> Extranjero</option>
            </select>
          </div>
          <div class="col-lg-3">
            <label>Tipo de clima</label>
            <select class="selectpicker search-fields form-control" name="tipoClima">

              <option value="1"> Frío</option>
              <option value="2"> Caliente</option>
            </select>
          </div>
          <div class="col-lg-3">
            <label>Disponibildad de internet</label>
            <select class="selectpicker search-fields form-control" name="señalInternet">

              <option value="1"> si</option>
              <option value="2"> No</option>
            </select>
          </div>
          <div class="col-lg-3">
            <label>Precio</label>
            <select class="selectpicker search-fields form-control" name="precio">

              <option value="1"> Entre 5000 a 15000</option>
              <option value="2"> Entre 15000 a 30000 </option>
              <option value="3"> Mayor a 30000 </option>
            </select>
          </div>
          <div class="col-lg-3">
            <label>Lugar</label>
            <select class="selectpicker search-fields form-control" name="lugar">

              <option value="1"> San José</option>
              <option value="2"> Alajuela </option>
              <option value="3"> Cartago </option>
              <option value="4"> Heredia </option>
              <option value="5"> Guanacaste </option>
              <option value="3"> Puntarenas </option>
              <option value="3"> Limón </option>
            </select>
          </div>
          <div style="margin-top: 1%;">
            <button name="recomendacion" type="submit" class="btn-tour">Filtrar</button>
          </div>
        </form>
      </div>
    </div>

    <?PhP

    $datos = array_rand($arrayDatos, 6);
    $phpVariable = "Dog";
    ?>


  </section>
  <!-- Start-Package-Section -->
  <section class="ws-section-spacing bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="center-title ">
            <h2 class="title">Actividades</h2>
            <h4 class="sub-title">Se le mostrara una lista de actividades turisticas de los cuales podra cambiar seleccionando los filtros de su interes.</h4>
          </div>
        </div>
      </div>
      <div class="row masonry-item" style="position: relative; height: 690px;">
        <div class="col-lg-4 col-md-6 col-sm-12 masonry" style="position: absolute; left: 0%; top: 0px;">
          <div class="package-list-wrap "><img src=<?= $arrayDatos[$datos[0]][3] ?> class="img-fluid" style="
                  
                    height: 367px;
                    margin-top: 1%;
                " alt="">
            <div class="package-list-content">
              <h3 class="package-list-title">
                <a href="atractivo.php"><?= $arrayDatos[$datos[0]][1] ?></a>
              </h3>
              <br>
              <a class="package-list-button" href="actividades.php?direccion=<?= $arrayDatos[$datos[0]][0]; ?>">Conocer más</a>
              <button type="button" class="btn btn-primary" <?php $id = $arrayDatos[$datos[0]][0];  ?> data-toggle="modal" data-target="#dialogo1">Vistazo rápido</button>
            </div>
          </div>
        </div>
        <!-- item -->
        <div class="col-lg-4 col-md-6 col-sm-12 masonry" style="position: absolute; left: 33.3333%; top: 0px;">
          <div class="package-list-wrap "><img src=<?= $arrayDatos[$datos[1]][3] ?> style="
                  
                  height: 367px;
                  margin-top: 1%;
              " class="img-fluid" alt="">
            <div class="package-list-content">
              <h3 class="package-list-title">
                <a href="atractivo.php"><?= $arrayDatos[$datos[1]][1] ?></a>
              </h3>
              <a class="package-list-button" href="actividades.php?direccion=<?=$arrayDatos[$datos[1]][0];?>">Conocer más</a>
              <button type="button" class="btn btn-primary" <?php $id = $arrayDatos[$datos[1]][0];  ?> data-toggle="modal" data-target="#dialogo1">Vistazo rápido</button>
            </div>
          </div>
        </div>
        <!-- item -->
        <div class="col-lg-4 col-md-6 col-sm-12 masonry" style="position: absolute; left: 66.6667%; top: 0px;">
          <div class="package-list-wrap "><img src=<?= $arrayDatos[$datos[2]][3] ?> style="
                  
                  height: 367px;
                  margin-top: 1%;
              " class="img-fluid" alt="">
            <div class="package-list-content">
              <h3 class="package-list-title">
                <a href="atractivo.php"><?= $arrayDatos[$datos[2]][1] ?></a>
              </h3>
              <a class="package-list-button" href="actividades.php?direccion=<?=$arrayDatos[$datos[2]][0];?>">Conocer más</a>
              <button type="button" class="btn btn-primary" <?php $id = $arrayDatos[$datos[2]][0];  ?> data-toggle="modal" data-target="#dialogo1">Vistazo rápido</button>
            </div>
          </div>
        </div>
        <!-- item -->
        <div class="col-lg-4 col-md-6 col-sm-12 masonry" style="position: absolute; left: 0%; top: 345px;">
          <div class="package-list-wrap "><img src=<?= $arrayDatos[$datos[3]][3] ?> style="
                  
                  height: 367px;
                  margin-top: 1%;
              " class="img-fluid" alt="">
            <div class="package-list-content">
              <h3 class="package-list-title">
                <a href="atractivo.php"><?= $arrayDatos[$datos[3]][1] ?></a>
              </h3>
              <a class="package-list-button"  href="actividades.php?direccion=<?=$arrayDatos[$datos[3]][0];?>">Conocer más</a>
              <button type="button" class="btn btn-primary" <?php $id = $arrayDatos[$datos[3]][0];  ?> data-toggle="modal" data-target="#dialogo1">Vistazo rápido</button>
            </div>
          </div>
        </div>
        <!-- item -->
        <div class="col-lg-4 col-md-6 col-sm-12 masonry" style="position: absolute; left: 33.3333%; top: 345px;">
          <div class="package-list-wrap "><img src=<?= $arrayDatos[$datos[4]][3] ?> style="
                  
                  height: 367px;
                  margin-top: 1%;
              " class="img-fluid" alt="">
            <div class="package-list-content">
              <h3 class="package-list-title">
                <a href="atractivo.php"><?= $arrayDatos[$datos[4]][1] ?></a>
              </h3>
              <a class="package-list-button" href="actividades.php?direccion=<?=$arrayDatos[$datos[4]][0];?>">Conocer más</a>
              <button type="button" class="btn btn-primary" <?php $id = $arrayDatos[$datos[4]][0];  ?> data-toggle="modal" data-target="#dialogo1">Vistazo rápido</button>
            </div>
          </div>
        </div>
        <!-- item -->
        <div class="col-lg-4 col-md-6 col-sm-12 masonry" style="position: absolute; left: 66.6667%; top: 345px;">
          <div class="package-list-wrap "><img src=<?= $arrayDatos[$datos[5]][3] ?> style="
                  
                  height: 367px;
                  margin-top: 1%;
              " class="img-fluid" alt="">
            <div class="package-list-content">
              <h3 class="package-list-title">
                <a href="atractivo.php"><?= $arrayDatos[$datos[5]][1] ?></a>
              </h3>
              <a class="package-list-button" href="actividades.php?direccion=<?=$arrayDatos[$datos[5]][0];?>">Conocer más</a>
              <button type="button" class="btn btn-primary" <?php $id = $arrayDatos[$datos[5]][0];  ?> data-toggle="modal" data-target="#dialogo1">Vistazo rápido</button>
            </div>
          </div>
        </div>
        <!-- item-end -->
      </div>
    </div>
  </section>

<!-- Modal -->
<div class="modal fade" id="dialogo1">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- cabecera del diálogo -->
        <div class="modal-header">
          <h4 class="modal-title">Vistazo rápido</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border: none;background-color:white;">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>

        <!-- cuerpo del diálogo -->
        <div class="modal-body">

          <div class="row">
            <div class="col-5">
              <!--<img src=<?= $imagen ?> class="img-fluid" alt="">-->
            </div>

          </div>
        </div>

        <!-- pie del diálogo -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>

      </div>
    </div>
  </div>


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
  <script>
    $('.openBtn').on('click', function() {
      $('.modal-body').load('CargarContenido.php?saludo<?= $arrayDatos[$datos[0]][0]; ?>', function() {
        $('#myModal').modal({
          show: true
        });
      });
    });
  </script>
  <style type="text/css">
    .typewrite>.wrap {
      border-right: 0.08em solid #fff
    }
  </style>
</body>

</html>
<?php include("template/pie.php"); ?>