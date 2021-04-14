<!DOCTYPE html>
<html lang="es">

<?php
include ("../partials/head.php");
?>

<link href="../assets/css/about.css" rel="stylesheet" type="text/css">

<body>
	
  <?php
  include ("../partials/header.php");
  ?>

    <div class="single-ad-about">
      <img src="../Imagenes/Coches/prueba_imagen_anuncio.jpg" alt="Foto de coche" class ="ad-image">
      <div class="car-details">
        <!-- Cambiar por variables -->
        <h3>Toyota GR Yaris</h3>
        <h5 style="color: #474747;">2021 - 2.500 km</h5>
        <h6 style="color: #474747;">Las Palmas - Gasolina</h6>
        <div class="prices">
          <h7>Precio financiado</h7>
          <h2 style="color: #c00000;">30.990 €</h2>
          <div style="float: right; padding-left: 150px;">
            <h7>Precio al contado</h7>
            <h2>33.990 €</h2></div>
          </div>
        </div>
        <div class="fav-icon">
          <img src="../Imagenes/icons/heart_icon_empty.png" alt="" style="object-fit: contain;  width: 25px; height: 25px;">
        </div>
      </div>
    </div>

  </body>

  <?php
    include ("../partials/footer.php");
  ?>
</html>