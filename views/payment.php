<!DOCTYPE html>
<html lang="es">

<?php

include __DIR__ . "/../vendor/database/productos.php";
include __DIR__ . "/../vendor/database/anuncios.php";

if (isset($_POST['buy'])) {
	if ($_POST['buy']) {
		Anuncios::deleteAdvertisement($_POST['id']);
		header("Location: ./");
	}
}

include ("../partials/head.php");

// Calculate final price
$products = Productos::getProducts();
$price = Anuncios::getAdvertisement($_POST['advertisement'])[0]['precio_anuncio'];

foreach ($products as $product) {

	$name = $product["nombre"];

	if (isset($_POST[$name])) {
		$price += $product['precio'];
	}

}

?>

<head>
	<link rel="stylesheet" href="../assets/css/payment.css">
</head>

<body>

  <?php
  include ("../partials/header.php");
  ?>

	<div class="container payment">
		
		<form action="payment.php" method="POST">
		
			<div class="form-group card_number">
				<label for="card_number">Número de tarjeta:</label>
				<input type="text" name="card_number" id="card_number" class="form-control" pattern="[0-9]{16}" title="16 números" required>
			</div>

			<div class="form-group flex-vertical size">
				
				<label for="expiration_date">Fecha de expiración:</label>
				
				<select name="expiration_date" id="expiration_date">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
				</select>

				<select name="expiration_date" id="expiration_date">

					<?php

						$year = date("Y");

						for ($i = 0; $i < 20; $i++) {
							echo "<option value='" . ($year + $i) . "'>" . ($year + $i) . "</option>";
						}

					?>

				</select>

			</div>

			<div class="form-group flex-vertical size">
				<label for="sec_cod">Cód seguridad:</label>
				<input type="text" name="sec_cod" id="sec_cod" pattern="[0-9]{3}" title="Solo 3 números" required>
			</div>

			<div class="form-group flex-vertical size">
				<p>Price:</p>
				<b><?php echo $price ?>€</b>
			</div>

			<div class="form-group size text-center">
				<input type="submit" class="btn btn-primary mt-4" value="Comprar">
				<input type="hidden" name="buy" value="true">
				<input type="hidden" name="id" value="<?php echo $_POST['advertisement'] ?>">
			</div>
		
		</form>

	</div>

	<?php
		include ("../partials/footer.php");
	?>

</body>

</html>