<?php
include_once ("config.php");
class Favoritos {


    //Coger favoritos
    public static function getFavs() {
        $result = DB::executeSQL("SELECT * FROM favoritos");
        if ($result !== null && count($result) == 0) {
          return null;
        }
        return $result;
    }

    //Coger un favorito
    public static function getFav($idFav) {
        $result = DB::executeSQL("SELECT * FROM favoritos WHERE id = ?",[$idFav] );
        if ($result === null) return null;
        if (count($result) == 0) return null;
        return $result;
    }

    //Añadir una oferta
    public static function addFav($cuenta, $descripcion,$foto, $precio, $marca, $modelo, $año){
        $result = DB::executeSQL("INSERT INTO favoritos(id, nombre_favorito, descripcion_favorito,foto_favorito, precio_favorito, marca_favorito, modelo_favorito,ano_vehiculo_favorito) VALUES (0,?,?,?,?,?,?,?)",[$cuenta, $descripcion,$foto, $precio, $marca, $modelo, $año]);
        return $result === null ? false : true;
    }

    //Eliminar anuncio 
    public static function deleteFav($idOferta){
        $result = DB::executeSQL("DELETE FROM favoritos WHERE id = ?",[$idOferta]);
        return $result === null ? false : true;
    }
 
}
?>