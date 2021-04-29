<?php
include_once ("config.php");
class Anuncios {

    
    //Añadir anuncio
    public static function addAdvertisement($cuenta, $descripcion,$foto, $precio, $marca, $modelo, $año){
        $result = DB::executeSQL("INSERT INTO anuncios(idanuncios, nombre_anuncio, descripcion_anuncio,foto_anuncio, precio_anuncio, marca_anuncio, modelo_anuncio,ano_vehiculo_anuncio) VALUES (0,?,?,?,?,?,?,?)",[$cuenta, $descripcion,$foto, $precio, $marca, $modelo, $año]);
        return $result === null ? false : true;
    }

    //Eliminar anuncio 
    public static function deleteAdvertisement($idAnuncio){
        $result = DB::executeSQL("DELETE FROM anuncios WHERE idanuncios = ?",[$idAnuncio]);
        return $result === null ? false : true;
    }

    //Coger anuncios
    public static function getAdvertisements() {
        $result = DB::executeSQL("SELECT * FROM anuncios");
        if ($result !== null && count($result) == 0) {
          return null;
        }
        return $result;
    }

    //Coger un anuncio
    public static function getAdvertisement($idAnuncio) {
        $result = DB::executeSQL("SELECT * FROM anuncios WHERE idanuncios = ?",[$idAnuncio] );
        if ($result === null) return null;
        if (count($result) == 0) return null;
        return $result;

    }

    //Modificar anuncio
    public static function updateAdvertisement($nombre, $descripcion, $foto, $precio, $marca, $ano){
        $result = DB::executeSQL("UPDATE anuncios SET nombre_anuncio=?, descripcion_anuncio=?, foto_anuncio=?, precio_anuncio=?, marca_anuncio=?, ano_vehiculo=?",[$nombre, $descripcion, $foto, $precio, $marca, $ano]);
        return $result === null ? false : true;
    }   
}
?>
