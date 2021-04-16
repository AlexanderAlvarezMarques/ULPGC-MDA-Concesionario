<?php
<<<<<<< HEAD
include_once ("config.php");
class Anuncios {
    public static function getCars() {
        $add = DB::executeSQL("SELECT * FROM anuncios");
        if ($add === null) {
            return null;
        }
        return $add;
    }

    //Añadir anuncio
    public static function addCar($cuenta, $descripcion,$foto, $precio, $marca, $modelo, $año){
        $result = DB::executeSQL("INSERT INTO anuncios(idanuncios, nombre_anuncio, descripcion_anuncio,foto_anuncio, precio_anuncio, marca_anuncio, modelo_anuncio,año_vehiculo_anuncio) VALUES (0,?,?,?,?,?,?,?)",[$cuenta, $descripcion,$foto, $precio, $marca, $modelo, $año]);
        return $result === null ? false : true;
    }
    

}

?>
=======

include_once("config.php");

class Anuncios
{

  public static function getAnuncios()
  {
    
    $anuncios = DB::executeSQL("SELECT * FROM anuncios");
    
    if ($anuncios === null) {
      return null;
    }

    if (count($anuncios) == 0) {
      return null;
    }
    
    return $anuncios[0];
  }

}
>>>>>>> 283683180471964f182252c48d27ebcb4de737c1
