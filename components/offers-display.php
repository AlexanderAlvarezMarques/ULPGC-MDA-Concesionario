<?php

include_once __DIR__ . "/../vendor/database/ofertas.php";

if (isset($_POST['id'])) {
  Ofertas::deleteOffer($_POST['id']);
}

if (!isset($_POST['page'])) $page = 0;
else $page = $_POST['page'];

$anuncios = Ofertas::getOffers();
$numeroAnunciosPorPagina = 10;

if ($anuncios == -1) {
  $html = "<p>Se ha producido un error al acceder a la base de datos</p>";

  echo $html;
  return;
}

if ($anuncios == -2) {
  $html = "<p>Se ha producido un error al intentar cargar los anuncios</p>";

  echo $html;
  return;
}

echo "<div class='container advertisements'>";

// Check array length
$position = $page * $numeroAnunciosPorPagina;
$limit = $position + $numeroAnunciosPorPagina;

if ($anuncios !== null && count($anuncios) > $position) {

  while ($position < $limit && $position < count($anuncios)) {

    $anuncio = $anuncios[$position];

    $id = $anuncio["idoferta"];
    $nombre = $anuncio["nombre_oferta"];
    $descripcion = $anuncio["descripcion_oferta"];
    $src = "data:image/jpeg;base64," . base64_encode($anuncio['foto_oferta']) . '"';
    $precio = $anuncio["precio_oferta"];
    $precio_financiado = $precio * 1.12;
    $marca = $anuncio["marca_oferta"];
    $modelo = $anuncio["modelo_oferta"];
    $localidad = $anuncio["localidad_oferta"];
    $ano = $anuncio["ano_vehiculo_oferta"];
    $positiondusuario = $anuncio["idusuario"];
    //$precio_financiado = $anuncio["preciof_oferta"];
    //<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>

?>

    <div class="single-ad-about">

      <img class="ad-image" src="data:image/jpeg;base64, <?php echo base64_encode($anuncio['foto_oferta']) ?>" alt="Foto de coche">

      <div class="car-details">

        <!-- Cambiar por variables -->
        <h3><?php echo $marca . " " . $modelo ?></h3>
        <h5 style="color: #474747;"><?php echo $ano ?></h5>
        <h6 style="color: #474747;"><?php echo $localidad ?></h6>

        <div class="prices">

          <div class="group">
            <h7>Precio financiado</h7>
            <h2 style="color: #c00000;"><?php echo $precio_financiado ?> €</h2>
          </div>

          <div class="group">
            <h7>Precio al contado</h7>
            <h2><?php echo $precio ?> €</h2>
          </div>

          <div class="group">
            <button class="btn btn-danger mt-1" onclick='deleteOffer(<?php echo $id ?> )'>Eliminar</button>
          </div>

        </div>
      </div>

      <div class="fav-icon">
        <img src="../Imagenes/icons/heart_icon_empty.png" alt="">
      </div>

    </div>

<?php
    $position = $position + 1;
  }
}

echo '<div class="text-center" style="width: 100%;">';

if ($page > 0) {
  $page--;
  echo "<button onclick='loadAdvertisements($page)' class='btn btn-primary'>Prev</button>";
}

if ($anuncios !== null && $position < count($anuncios)) {
  $page++;
  echo "<button onclick='loadAdvertisements($page)' class='btn btn-primary ml-1'>Next</button>";
}

echo '</div>';
echo "</div>";