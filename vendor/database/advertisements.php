<?php

include_once ("config.php");

class Advertisement {

    public static function getAdvertisements() {

        $ads = DB::executeSQL("SELECT * FROM anuncios");

        if ($ads === null) {
            return null;
        }

        return $ads;
    }

}

?>