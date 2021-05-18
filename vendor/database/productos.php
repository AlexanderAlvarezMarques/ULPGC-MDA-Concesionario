<?php
include_once ("config.php");
class Productos {

    
    //Añadir anuncio
    public static function addProducto($cuenta, $descripcion,$foto, $precio, $marca, $modelo, $año){
        $result = DB::executeSQL("INSERT INTO anuncios(idanuncios, nombre_anuncio, descripcion_anuncio,foto_anuncio, precio_anuncio, marca_anuncio, modelo_anuncio,ano_vehiculo_anuncio) VALUES (0,?,?,?,?,?,?,?)",[$cuenta, $descripcion,$foto, $precio, $marca, $modelo, $año]);
        return $result === null ? false : true;
    }

    //Eliminar anuncio 
    public static function deleteProducto($idProducto){
        $result = DB::executeSQL("DELETE FROM productos WHERE idproductos = ?",[$idProducto]);
        return $result === null ? false : true;
    }

    //Coger anuncios
    public static function getProducts() {
        $result = DB::executeSQL("SELECT * FROM productos");
        if ($result !== null && count($result) == 0) {
          return null;
        }
        return $result;
    }

    //Coger un anuncio
    public static function getProduct($idProducto) {
        $result = DB::executeSQL("SELECT * FROM productos WHERE idproductos = ?",[$idProducto] );
        if ($result === null) return null;
        if (count($result) == 0) return null;
        return $result;

    }

}
?>
