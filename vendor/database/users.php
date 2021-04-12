<?php

include_once ("config.php");

class Users {

    public static function getUsers() {

        $users = DB::executeSQL("SELECT * FROM users");

        if ($users === null) {
            return null;
        }

        return $users;
    }

}

?>