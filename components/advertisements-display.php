<?php

include_once __DIR__ . "/../vendor/database/anuncios.php";

if (isset($_POST['id'])) {
	Anuncios::deleteAdvertisement($_POST['id']);
}

if (!isset($_POST['page'])) $page = 0;
else $page = $_POST['page'];

$anuncios = Anuncios::getAdvertisements();
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

		$id = $anuncio["idanuncios"];
		$nombre = $anuncio["nombre_anuncio"];
		$descripcion = $anuncio["descripcion_anuncio"];
		$src = "data:image/jpeg;base64," . base64_encode($anuncio['foto_anuncio']) . '"';
		$precio = $anuncio["precio_anuncio"];
		//$precio_financiado = $anuncio["preciof_anuncio"];
		$precio_financiado = $precio*1.12;
		$marca = $anuncio["marca_anuncio"];
		$modelo = $anuncio["modelo_anuncio"];
		$localidad = $anuncio["localidad_anuncio"];
		$ano = $anuncio["ano_vehiculo_anuncio"];
		$positiondusuario = $anuncio["idusuario"];

		//<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>

?>

		<div class="single-ad-about">

			<img class="ad-image" src="data:image/jpeg;base64, <?php echo base64_encode($anuncio['foto_anuncio']) ?>" alt="Foto de coche">

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
					<a href="../views/modified_anuncio.php?id=<?php echo $id ?>"><button class="btn btn-primary">Modificar</button></a>
						<button class="btn btn-danger mt-1" onclick='deleteAdvertisement(<?php echo $id ?> )'>Eliminar</button>
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

?>