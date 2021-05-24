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
        $anuncio = DB::executeSQL("SELECT * FROM anuncios WHERE idanuncios= ?",[$id])[0];
        $param = array(11);
        $i = 0;
        foreach ($anuncio as $key=>$value){
            $param[$i]=$value;
            $i++;
        }
        $n = count($anuncio);
        //echo "<script>console.info('$anuncio');</script>";
        //print_r($anuncio);
        $result = DB::executeSQL("INSERT INTO favoritos (id, nombre_favorito, descripcion_favorito,foto_favorito, precio_favorito,preciof_favorito, marca_favorito, modelo_favorito,localidad_favorito,ano_vehiculo_favorito,idusuario) VALUES (?,?,?,?,?,?,?,?,?,?,?)",$param);
        return $result === null ? false : true;
    }

    //Eliminar favorito 
    public static function deleteFav($idFavorito){
        $result = DB::executeSQL("DELETE FROM favoritos WHERE id = ?",[$idFavorito]);
        return $result === null ? false : true;
    }
 
}
?>