<?php

include_once __DIR__ . "/../vendor/database/productos.php";


if (!isset($_POST['page'])) $page = 0;
else $page = $_POST['page'];

$productos = Productos::getProducts();
$numeroAnunciosPorPagina = 10;

if ($productos == -1) {
	$html = "<p>Se ha producido un error al acceder a la base de datos</p>";

	echo $html;
	return;
}

if ($productos == -2) {
	$html = "<p>Se ha producido un error al intentar cargar los anuncios</p>";

	echo $html;
	return;
}

echo "<div class='container advertisements'>";

// Check array length
$position = $page * $numeroAnunciosPorPagina;
$limit = $position + $numeroAnunciosPorPagina;

if ($productos !== null && count($productos) > $position) {

	while ($position < $limit && $position < count($productos)) {

		$producto = $productos[$position];

		$id = $producto["idproductos"];
		$nombre = $producto["nombre"];
		$descripcion = $producto["descripcion"];
		$src = "data:image/jpeg;base64," . base64_encode($producto['foto']) . '"';
		$marca = $producto["marca"];
		$modelo = $producto["modelo"];
		$cantidad = $producto["cantidad"];
		$precio = $producto["precio"];
		

		//<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>

?>

		<div class="single-ad-about">

			<img class="ad-image" src="data:image/jpeg;base64, <?php echo base64_encode($anuncio['foto']) ?>" alt="Foto de producto">

			<div class="car-details">

				<!-- Cambiar por variables -->
				<h3><?php echo $marca . " " . $modelo ?></h3>
				

				<div class="prices">


					<div class="group">
						<h7>Precio al contado</h7>
						<h2><?php echo $precio ?> €</h2>
					</div>

					<div class="group">
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

if ($productos !== null && $position < count($productos)) {
	$page++;
	echo "<button onclick='loadAdvertisements($page)' class='btn btn-primary ml-1'>Next</button>";
}

echo '</div>';


echo "</div>";

?>