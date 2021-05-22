<?php
include_once ("config.php");

$advertisementsIds = array();

    class Comparar {

        //Añadir anuncio a la comparacion
        public static function compare($id){
            global $advertisementsIds;
            array_push($advertisementsIds, 34);
        }  
        
        //Coger anuncios
        public static function getAdvertisementsToCompare() {
            global $advertisementsIds;
            $result = null;
            foreach ($advertisementsIds as &$id) {
                $result = DB::executeSQL("SELECT * FROM anuncios WHERE idanuncios = ?",[$id]);
            }
            if ($result !== null && count($result) == 0) {
                return null;
            }
            return $result;
        }
    }
?>