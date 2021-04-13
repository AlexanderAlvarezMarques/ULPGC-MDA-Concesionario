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

    public static function findUser($username) {

        $users = DB::executeSQL("SELECT * FROM users WHERE username=?", [$username]);

        if ($users === null || count($users) == 0) {
            return null;
        }
        
        return $users[0];

    }

}

?>