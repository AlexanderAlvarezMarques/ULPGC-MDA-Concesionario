<?php
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
    public static function addCar($cuenta, $descripcion, $precio, $marca, $modelo, $año){
        //$result = DB::executeSQL("INSERT INTO anuncios(idanuncios, nombre_anuncio, foto_anuncio, precio_anuncio, coche_anuncio, modelo_anuncio) VALUES (0,?,?,?,?,?)",[$cuenta, $foto, $precio, $coche, $modelo]);
        $result = DB::executeSQL("INSERT INTO anuncios(idanuncios, nombre_anuncio, descripcion_anuncio, precio_anuncio, marca_anuncio, modelo_anuncio,año_vehiculo_anuncio) VALUES (0,?,?,?,?,?,?)",[$cuenta, $descripcion, $precio, $marca, $modelo, $año]);
        return $result === null ? false : true;
    }

}

?>