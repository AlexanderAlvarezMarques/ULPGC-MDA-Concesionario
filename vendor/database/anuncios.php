<?php

include_once "config.php";

class Anuncios {

  public static function getAnuncios () {

    $advertisements = DB::executeSQL("SELECT * FROM anuncios");

    if ($advertisements === null) {
      return -1;
    }

    if (count($advertisements == 0)) {
      return -2;
    }

    return $advertisements[0];

  }

}



