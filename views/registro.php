<!DOCTYPE html>
<html lang="es">

<?php
include("../partials/head.php");
?>

<body>

	<?php
	include("../partials/header.php");
	?>

	<div>
		<form id='loginForm' class='my-4' name='loginForm' method='post' style="font-family: 'Arial';">
			<label><img src='../Imagenes/LoginForm/usuarioprin.png' style="width: 125px; height: 125px;" /></label>
			<section>
				<input id='cuenta' name='cuenta' type='text' placeholder='Usuario' value='' />
			</section>
			<section>
				<input id='dni' name='dni' type='text' placeholder='DNI o NIE' value='' />
			</section>
			<section>
				<input id='clave' name='clave' type='password' placeholder='Contraseña' value='' />
			</section>
			<section>
				<input id='confirmarclave' name='confirmarclave' type='password' placeholder='Confirmar Contraseña' value='' />
			</section>
			<section>
				<input id='correo' name='correo' type='email' placeholder='Correo' value='' />
			</section>
			<div>
				<input style='margin-right:10%;' type='button' value='Volver' onclick="location.href='login.php'">
				<input type='button' onclick='registrarse()' value='Registrarse' />
			</div>
		</form>
	</div>

	<?php
	include("../partials/footer.php");
	?>

</body>

</html>