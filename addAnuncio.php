<?php

if (isset($_POST['send'])) {

  # Colocar condicionales de ningun campo vacio así como comprobaciones de patrones
  if ($_POST['nombre'] == "") {
    header('Location:http://localhost/ULPGC-MDA-Concesionario/views/anadir_anuncio.php?error=true');
  }


  $nombre = $_POST['nombre'];
  $descripcion = $_POST['descripcion'];
  $marca = $_POST['marca'];
  $modelo = $_POST['modelo'];
  $precio = $_POST['precio'];
  $ano_vehiculo = $_POST['ano_vehiculo'];
  $foto = file_get_contents($_FILES['imagen']['tmp_name']);

  include_once "vendor/database/anuncios.php";

  $result = Anuncios::addCar($nombre, $descripcion, $foto, $precio, $marca, $modelo, $ano_vehiculo);

  if ($result !== null) {
    header('Location:http://localhost/ULPGC-MDA-Concesionario/views/anadir_anuncio.php?error=false');
  } else {
    header('Location:http://localhost/ULPGC-MDA-Concesionario/views/anadir_anuncio.php?error=null');
  }


  //echo "$nombre<br>";
  //echo "$descripcion<br>";
  //echo "$marca<br>";
  //echo "$modelo<br>";
  //echo "$precio<br>";
  //echo "$ano_vehiculo<br>";
  //echo "$foto";

}