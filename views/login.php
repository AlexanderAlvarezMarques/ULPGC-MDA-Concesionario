<!DOCTYPE html>
<html lang="es">

<?php
include ("../partials/head.php");
?>

<link href="../assets/css/login.css" rel="stylesheet" type="text/css">

<body>

  <?php
  include ("../partials/header.php");
  ?>

  <form id='loginForm' name="loginForm" method='post'>
    <label><img src='../Imagenes/LoginForm/usuarioprin.jpg' alt="Imagen de inicio"/></label>
    <section>
      <label><img src='../Imagenes/LoginForm/usuario.jpg' alt="Imagen de usuario"/></label>
      <input id='cuenta' name='cuenta' type='text' placeholder='Usuario' value=''/>
    </section>
    <section>
      <label><img src='../Imagenes/LoginForm/contrasena.jpg' alt="Imagen de contraseña"/></label>
      <input id='clave' name='clave' type='password' placeholder='Contraseña' value=''/>
    </section>
    <section>
      <input class='botonForm' style='margin-right:10%; float:left;' type='button' onclick='iniciarsesion()' value='Iniciar sesión'/>
      <input class='botonForm' type='button' value='Registrarse' onclick="location.href='registro.html'">
    </section>
  </form>

  <?php
  include ("../partials/footer.php");
  ?>

</body>
</html>