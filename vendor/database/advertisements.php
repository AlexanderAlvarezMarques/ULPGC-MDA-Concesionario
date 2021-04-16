<?php

include_once ("config.php");

class Advertisement {

    public static function getAdvertisements() {

        $ads = DB::executeSQL("SELECT * FROM anuncios");

        if (count($ads) == 0) {
          return null;
        }
        
        return $ads[0];
    }

}

?>