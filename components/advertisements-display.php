<?php

include_once '../vendor/database/advertisements.php';

if (!isset($_POST['page'])) $page = 0;
else $page = $_POST['page'];

$anuncios = Advertisement::getAdvertisements();
$numeroAnunciosPorPagina = 12;

echo "<p>Entrando a display.php</p>";

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

echo ($anuncios);
/*
echo "<div class='container advertisements'>";

// Check array length
$position = $page * $numeroAnunciosPorPagina;
if (count($anuncios) > $position) {

  for ($i = $position; $i < 12 && $i < count($anuncios); $i++) {

    $id = $anuncios[$i]["idanuncio"];
    $nombre = $anuncios[$i]["nombre_anuncio"];
    $descripcion = $anuncios[$i]["descripcion_anuncio"];
    $src = "data:image/jpeg;base64,'.base64_encode( $anuncios[$i]['foto_anuncio'] ).'";
    $precio = $anuncios[$i]["precio_anuncio"];
    $precio_financiado = $anuncios[$i]["preciof_anuncio"];
    $marca = $anuncios[$i]["marca_anuncio"];
    $modelo = $anuncios[$i]["modelo_anuncio"];
    $localidad = $anuncios[$i]["localidad_anuncio"];
    $ano = $anuncios[$i]["año_vehiculo_anuncio"];
    $idusuario = $anuncios[$i]["idusuario"];

    //<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>

  ?>

    <!-- Card -->
    <div class="card">
        
        <img class="card-img-top" src="../Imagenes/Coches/Coche de inicio.jpg" alt="Card image cap">
      
      <div class="card-body">
        
        <h5 class="card-title"><?php $nombre ?></h5>
        
        <p class="card-text"><?php $descripcion ?></p>
        
        <a href="#" class="btn btn-primary">Go somewhere</a>

      </div>
    </div>

  <?php
  }
}


echo "</div>";
*/