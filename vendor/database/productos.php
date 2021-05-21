<?php
include_once ("config.php");
class Productos {

    
    //Eliminar producto 
    public static function deleteProducto($idProducto){
        $result = DB::executeSQL("DELETE FROM productos WHERE idcomponentes = ?",[$idProducto]);
        return $result === null ? false : true;
    }

    //Coger producto
    public static function getProducts() {
        $result = DB::executeSQL("SELECT * FROM productos");
        if ($result !== null && count($result) == 0) {
          return null;
        }
        return $result;
    }

    //Coger un producto
    public static function getProduct($idProducto) {
        $result = DB::executeSQL("SELECT * FROM productos WHERE idcomponentes = ?",[$idProducto] );
        if ($result === null) return null;
        if (count($result) == 0) return null;
        return $result;

    }

}
?>
