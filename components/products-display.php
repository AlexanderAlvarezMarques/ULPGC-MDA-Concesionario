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
	$html = "<p>Se ha producido un error al intentar cargar los productos</p>";

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
		$id = $producto["idcomponentes"];
		$nombre = $producto["nombre"];
		$descripcion = $producto["descripcion"];
		//$src = "data:image/jpeg;base64," . base64_encode($productos['foto']) . '"';
		$marca = $producto["marca"];
		$modelo = $producto["modelo"];
		$cantidad = $producto["cantidad"];
		$precio = $producto["precio"];



?>

		<div class="single-ad-about tamano-fijo">

			<img class="ad-image" src="data:image/jpeg;base64, <?php echo base64_encode($anuncio['foto_anuncio']) ?>" alt="Foto de producto">

			<div class="car-details">

				<!-- Cambiar por variables -->
				<h3><?php echo $marca . " " . $modelo ?></h3>

				<div class="prices">

					<div class="group">
						<h7><?php echo $nombre ?></h7>
						<h7>Precio:</h7>
						<h2><?php echo $precio ?> €</h2>
					</div>
					<div class="group">
						<h6>Añadir componente</h6>
						<input type="checkbox" style="width: 50px; -webkit-transform: scale(2); align-self: center;" name="<?php echo $nombre ?>"/>
					</div>
				</div>
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