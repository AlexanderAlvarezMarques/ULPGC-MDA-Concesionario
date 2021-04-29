<?php
include_once ("config.php");
class Ofertas {


    //Coger ofertas
    public static function getOffers() {
        $result = DB::executeSQL("SELECT * FROM ofertas");
        if ($result !== null && count($result) == 0) {
          return null;
        }
        return $result;
    }

    //Coger una oferta
    public static function getOffer($idOferta) {
        $result = DB::executeSQL("SELECT * FROM ofertas WHERE idoferta = ?",[$idOferta] );
        if ($result === null) return null;
        if (count($result) == 0) return null;
        return $result;
    }

    //Añadir una oferta
    public static function addOffer($cuenta, $descripcion,$foto, $precio, $marca, $modelo, $año){
        $result = DB::executeSQL("INSERT INTO ofertas(idoferta, nombre_oferta, descripcion_oferta,foto_oferta, precio_oferta, marca_oferta, modelo_oferta,ano_vehiculo_oferta) VALUES (0,?,?,?,?,?,?,?)",[$cuenta, $descripcion,$foto, $precio, $marca, $modelo, $año]);
        return $result === null ? false : true;
    }

    //Eliminar anuncio 
    public static function deleteOffer($idOferta){
        $result = DB::executeSQL("DELETE FROM ofertas WHERE idoferta = ?",[$idOferta]);
        return $result === null ? false : true;
    }
 
}
?>