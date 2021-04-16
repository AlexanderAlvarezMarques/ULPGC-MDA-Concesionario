<?php

include_once "../vendor/database/anuncios.php";

if (!isset($_POST['page'])) $page = 0;
else $page = $_POST['page'];

$anuncios = Anuncios::getAnuncios();
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

echo "<section class='page-section'>";

echo "<div class='container advertisements'>";

// Check array length
$position = $page * $numeroAnunciosPorPagina;
if (count($anuncios) > $position) {

  $id = $anuncios[$position]["idanuncio"];
  $nombre = $anuncios[$position]["nombre_anuncio"];
  $descripcion = $anuncios[$position]["descripcion_anuncio"];
  $src = "data:image/jpeg;base64,'.base64_encode( $anuncios[$position]['foto_anuncio'] ).'";
  $precio = $anuncios[$position]["precio_anuncio"];
  $precio_financiado = $anuncios[$position]["preciof_anuncio"];
  $marca = $anuncios[$position]["marca_anuncio"];
  $modelo = $anuncios[$position]["modelo_anuncio"];
  $localidad = $anuncios[$position]["localidad_anuncio"];
  $ano = $anuncios[$position]["año_vehiculo_anuncio"];
  $idusuario = $anuncios[$position]["idusuario"];

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


echo "</div>";
echo "</section>";