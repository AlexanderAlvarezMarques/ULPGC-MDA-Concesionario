<?php

if (isset($_POST['send'])) {

  # Colocar condicionales de ningun campo vacio así como comprobaciones de patrones
  if ($_POST['nombre'] == "") {
    header('Location:/views/anadir_favorito.php?error=true');
  }


  $nombre = $_POST['nombre'];
  $descripcion = $_POST['descripcion'];
  $marca = $_POST['marca'];
  $modelo = $_POST['modelo'];
  $precio = $_POST['precio'];
  $ano_vehiculo = $_POST['ano_vehiculo'];
  $foto = file_get_contents($_FILES['imagen']['tmp_name']);

  include_once "vendor/database/favoritos.php";

  $result = Favoritos::addFav($id);

  if ($result !== null) {
    header('Location:ULPGC-MDA-Concesionario/views/anadir_favorito.php?error=false');
  } else {
    header('Location:ULPGC-MDA-Concesionario/views/anadir_favorito.php?error=null');
  }


  //echo "$nombre<br>";
  //echo "$descripcion<br>";
  //echo "$marca<br>";
  //echo "$modelo<br>";
  //echo "$precio<br>";
  //echo "$ano_vehiculo<br>";
  //echo "$foto";

}