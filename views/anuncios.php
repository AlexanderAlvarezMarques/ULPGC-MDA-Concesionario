<!DOCTYPE html>
<html lang="es">

<?php
include("../partials/head.php");
?>

<body>

  <?php
  include("../partials/header.php");
  ?>

  <section id="page-section">


  <!--
    <div class="container advertisements">

      <!-- Card --
      <div class="card">
        <img class="card-img-top" src="../Imagenes/Coches/Coche de inicio.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <!-- Card --
      <div class="card">
        <img class="card-img-top" src="../Imagenes/Coches/prueba_imagen_anuncio.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <!-- Card --
      <div class="card">
        <img class="card-img-top" src="../Imagenes/Coches/prueba_imagen_anuncio.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <!-- Card --
      <div class="card">
        <img class="card-img-top" src="../Imagenes/Coches/prueba_imagen_anuncio.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <!-- Card --
      <div class="card">
        <img class="card-img-top" src="../Imagenes/Coches/prueba_imagen_anuncio.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

    </div>

-->

  </section>

  <script>

    $parameters = {
      "page": 0
    }

    $.ajax({

      data: $parameters,
      url: '../components/advertisements-display.php',
      type: 'post',
      success:
        function (response) {
          $("#page-section").html(response);
        }

    });

  </script>

  <?php
  include("../partials/footer.php");
  ?>

</body>

</html>