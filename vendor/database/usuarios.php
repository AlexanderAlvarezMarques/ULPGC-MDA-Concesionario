<?php

include_once ("config.php");

class Usuarios {

    public static function getUsers() {

        $users = DB::executeSQL("SELECT * FROM usuarios");

        if ($users === null) {
            return null;
        }

        return $users;
    }

}

?>