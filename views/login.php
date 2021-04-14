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


  <form id='loginForm' class="my-4" name="loginForm" method='post'>
    <label><img src='../Imagenes/LoginForm/usuarioprin.png' alt="Imagen de inicio" style="width: 125px; height: 125px;"/></label>
    <section>
      <input id='cuenta' name='cuenta' type='text' placeholder='Usuario' value=''/>
    </section>
    <section>
      <input id='clave' name='clave' type='password' placeholder='Contraseña' value=''/>
    </section>
    <div>
      <input style='margin-right:10%;' type='button' onclick='iniciarsesion()' value='Iniciar sesión'/>
      <input type='button' value='Registrarse' onclick="location.href='registro.php'">
    </div>
  </form>

</body>


<?php
  include ("../partials/footer.php");
?>

</html>