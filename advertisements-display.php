<?php

include_once "vendor/database/advertisements.php";

if (!isset($_POST['page'])) $page = 0;
else $page = $_POST['page'];

$anuncios = Advertisement::getAdvertisements();
$numeroAnunciosPorPagina = 12;

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

if (count($anuncios) > $position) {

  for (; $position < ($position + 12) && $position < count($anuncios); $position++) {

    $anuncio = $anuncios[$position];

    $id = $anuncio["idanuncios"];
    $nombre = $anuncio["nombre_anuncio"];
    $descripcion = $anuncio["descripcion_anuncio"];
    $src = "data:image/jpeg;base64,".base64_encode( $anuncio['foto_anuncio'] ) .'"';
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

      </div>
    </div>
  
  <?php
  }
}


echo "</div>";
