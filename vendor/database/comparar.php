<?php
include_once ("config.php");

$advertisementsIds = array();

    class Comparar {

        //Añadir anuncio a la comparacion
        public static function compare($id){
            array_push($advertisementsIds, $id);
        }  
        
        //Coger anuncios
        public static function getAdvertisementsToCompare() {
            global $advertisementsIds;
            array_push($advertisementsIds, 34);
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