<?php include("template/cabecera.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=s, initial-scale=1.0">
  <title>Tour Recommendations</title>
  <link rel="stylesheet" href="./css/bootstrap.min.css">
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
            <div class="input-group-text">
              <label for="formGroupExampleInput">Playa</label>
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


  <div class="card-group">
    <div class="card">
      <div class="row">
        <div class="col-lg-12">
          <img class="rounded float-left" src="https://cdn.adobecar.com/wp-content/uploads/2019/02/15153142/monteverde-2.jpg" class="card-img-top">
        </div>
      </div>
      <div class="card-body">
        <h5 class="card-title">Monteverde: Reserva Biológica Bosque Nuboso</h5>
        <p class="card-text">La reserva del bosque nuboso Monteverde está ubicada a 5 kilómetros al este del centro de Santa Elena. Esta Reserva Biológica pertenece al Centro Científico Tropical, fundado en 1962, organización no gubernamental costarricense. Localizada en la Zona Protectora Arenal – Monteverde, que pertenece al Área de Conservación Arenal-Tilarán.

          Los objetivos del Área de Conservación son preservar la valiosa biodiversidad de esta región, proteger los numerosos manantiales y crear condiciones óptimas para la naturaleza, protegiendo las reservas naturales de Costa Rica.

          La reserva está muy bien desarrollada y proporciona una muy buena visión de la vegetación de la selva tropical. El acceso a la reserva de Monteverde está limitada a un máximo de 200 personas al mismo tiempo. Monteverde es famosa por sus atracciones de aventura, desde avistamiento de aves, paseos a caballo, hasta volar en canopy sobre el bosque nuboso hasta una distancia de 1 km.</p>
      </div>
      <div class="card-footer">
        <button style="margin: 11px; " type="button" class="btn btn-success">Visitar</button>
      </div>
    </div>
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</body>

</html>
<?php include("template/pie.php"); ?>