<?php

include_once __DIR__ . "/../vendor/database/anuncios.php";

if(isset($_POST['id'])){
  Anuncios::deleteAdvertisement($_POST['id']);
} 

if (!isset($_POST['page'])) $page = 0;
else $page = $_POST['page'];

$anuncios = Anuncios::getAdvertisements();
$numeroAnunciosPorPagina = 5;

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

    $id = $anuncio["idanuncios"];
    $nombre = $anuncio["nombre_anuncio"];
    $descripcion = $anuncio["descripcion_anuncio"];
    $src = "data:image/jpeg;base64," . base64_encode($anuncio['foto_anuncio']) . '"';
    $precio = $anuncio["precio_anuncio"];
    $precio_financiado = $anuncio["preciof_anuncio"];
    $marca = $anuncio["marca_anuncio"];
    $modelo = $anuncio["modelo_anuncio"];
    $localidad = $anuncio["localidad_anuncio"];
    $ano = $anuncio["ano_vehiculo_anuncio"];
    $positiondusuario = $anuncio["idusuario"];

    //<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>

?>

    <!-- Card -->
    <div class="card">

      <?php
      echo '<img class="card-img-top" src="data:image/jpeg;base64,' . base64_encode($anuncio['foto_anuncio']) . '" alt="Card image cap">';
      ?>

      <header>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      </header>

      <div class="card-body">

        <h3 class="card-title text-center"><?php echo $nombre ?></h3>

        <p class="card-text"><?php echo $descripcion ?></p>

        <p><b>Precio:</b> <?php echo $precio ?></p>

        <p><b>Precio financiado:</b> <?php echo $precio_financiado ?></p>

        <p><b>Marca:</b> <?php echo $marca ?></p>

        <p><b>Modelo:</b> <?php echo $modelo ?></p>

        <p><b>Año:</b> <?php echo $ano ?></p>

        <p><b>Localidad:</b> <?php echo $localidad ?></p>

        <a href="#" class="btn btn-primary">Go somewhere</a>
          <button id='boton' class='material-icons' onclick='deleteAdvertisement(<?php echo $id?> )' >delete</button>
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

?>
