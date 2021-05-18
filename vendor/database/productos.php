<?php
include_once ("config.php");
class Productos {

    //Coger productos
    public static function getProducts() {
        $result = DB::executeSQL("SELECT * FROM productos");
        if ($result !== null && count($result) == 0) {
          return null;
        }
        return $result;
    }

    //Coger un producto
    public static function getProduct($idProducto) {
        $result = DB::executeSQL("SELECT * FROM productos WHERE idproductos = ?",[$idProducto] );
        if ($result === null) return null;
        if (count($result) == 0) return null;
        return $result;
    }

    
    //Eliminar producto 
    public static function deleteProducto($idProducto){
        $result = DB::executeSQL("DELETE FROM productos WHERE idproductos = ?",[$idProducto]);
        return $result === null ? false : true;
    }

}
?>
