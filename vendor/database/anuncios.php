<?php

include_once("config.php");

class Anuncios
{

  public static function getAnuncios()
  {
    
    $anuncios = DB::executeSQL("SELECT * FROM anuncios");
    
    if ($anuncios === null) {
      return null;
    }

    if (count($anuncios) == 0) {
      return null;
    }
    
    return $anuncios[0];
  }

}
