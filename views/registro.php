<!DOCTYPE html>
<html lang="es">

<?php
    include ("../partials/register.php");
	include ("../partials/head.php");
?>

<link href="../assets/css/login.css" rel="stylesheet">

<body>

<?php
	include ("../partials/header.php");
?>

<div>
            <form id='loginForm' class='my-4' name='loginForm' method='post'>
                <label><img src='../Imagenes/LoginForm/usuarioprin.jpg'/></label>
                <section>
                    <label><img src='../Imagenes/LoginForm/usuario.jpg'/></label>
                    <input id='cuenta' name='cuenta' type='text' placeholder='Usuario' value=''/>
                </section>
                <section>
                    <label><img src='../Imagenes/LoginForm/usuario.jpg'/></label>
                    <input id='dni' name='dni' type='text' placeholder='DNI o NIE' value=''/>
                </section>
                <section>
                    <label><img src='../Imagenes/LoginForm/contrasena.jpg'/></label>
                    <input id='clave' name='clave' type='password' placeholder='Contraseña' value=''/>
                </section>
                <section>
                    <label><img src='../Imagenes/LoginForm/contrasena.jpg'/></label>
                    <input id='confirmarclave' name='confirmarclave' type='password' placeholder='Confirmar Contraseña' value=''/>
                </section>
                <section>
                    <label><img src='../Imagenes/LoginForm/correo.png'/></label>
                    <input id='correo' name='correo' type='text' placeholder='Correo' value=''/>
                </section>
                <div>
                    <input class='botonRegistrarse' type='button' onclick='registrarse()' value='Registrarse'/>
                </div>
            </form>
        </div>

<?php
	include ("../partials/footer.php");
?>

</body>
</html>