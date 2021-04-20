<?php

include_once "vendor/database/anuncios.php";

if (isset($_POST['send'])) {

  $id = $_POST['id'];
  $nombre = $_POST['nombre'];
  $descripcion = $_POST['descripcion'];
  $marca = $_POST['marca'];
  $modelo = $_POST['modelo'];
  $precio = $_POST['precio'];
  $ano_vehiculo = $_POST['ano_vehiculo'];
  $foto = file_get_contents($_FILES['imagen']['tmp_name']);

 
  if($descripcion == ""){
    $descripcion = " ";
  }

  $result = Anuncios::updateAdvertisement($id,$nombre, $descripcion, $foto, $precio, $marca, $modelo, $ano_vehiculo);

  if ($result) {
    header('Location:http://localhost/ULPGC-MDA-Concesionario/views/anuncio.php');
  } else {
    header("Location:http://localhost/ULPGC-MDA-Concesionario/views/modified_anuncio.php?id=$id");
  }
}