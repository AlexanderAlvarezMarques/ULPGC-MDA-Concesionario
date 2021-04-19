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
        $ads = DB::executeSQL("SELECT * FROM anuncios");
        
        

        if (count($ads) == 0) {
          return null;
        }
        return $ads;
    }
    

}

?>
