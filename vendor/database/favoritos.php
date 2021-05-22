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

    //Añadir una favorito
    public static function addFav($id){
        $result = DB::executeSQL("INSERT INTO favoritos SELECT * FROM anuncios WHERE id= ?",[$id]);
        return $result === null ? false : true;
    }

    //Eliminar favorito 
    public static function deleteFav($idFavorito){
        $result = DB::executeSQL("DELETE FROM favoritos WHERE id = ?",[$idFavorito]);
        return $result === null ? false : true;
    }
 
}
?>