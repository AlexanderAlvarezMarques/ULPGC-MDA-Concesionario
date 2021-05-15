<!DOCTYPE html>
<html lang="es">

<?php
include ("../partials/head.php");
?>

<head>
	<link rel="stylesheet" href="../assets/css/payment.css">
</head>

<body>

  <?php
  include ("../partials/header.php");
  ?>

	<div class="container payment">
		
		<form action="" method="POST">
		
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
					<option value="1">2021</option>
					<option value="2">2022</option>
					<option value="3">2023</option>
					<option value="4">2024</option>
					<option value="5">2025</option>
					<option value="6">2026</option>
					<option value="7">2027</option>
					<option value="8">2028</option>
					<option value="9">2029</option>
					<option value="10">2030</option>
					<option value="11">2031</option>
					<option value="12">2032</option>
				</select>

			</div>

			<div class="form-group flex-vertical size">
				<label for="sec_cod">Cód seguridad:</label>
				<input type="text" name="sec_cod" id="sec_cod" pattern="[0-9]{3}" title="Solo 3 números" required>
			</div>

			<div class="form-group flex-vertical size">
				<p>Price:</p>
				<b>12000€</b>
			</div>

			<div class="form-group size">
				<input type="submit" class="btn btn-primary" value="Comprar">
			</div>
		
		</form>

	</div>

	<?php
		include ("../partials/footer.php");
	?>

</body>

</html>