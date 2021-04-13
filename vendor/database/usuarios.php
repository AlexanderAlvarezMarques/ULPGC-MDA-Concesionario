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

    public static function ckeckUserExist($username){
        $users = DB::executeSQL("SELECT * FROM usuarios WHERE nombre_usuario = ?",[$username]);

        if ($users === null) {
            return false;
        }

        return true;
    }

    //Añadir usuario
    public static function addUser($cuenta,$dni, $clave, $email){

        $clave = md5($clave);
        $result = DB::executeSQL("INSERT INTO usuarios(nombre_usuario,dni_usuario,password_usuario, correo_usuario) VALUES (?,?,?,?)",[$cuenta, $dni, $clave, $email]);

        return $result === null ? false : true;
    }

}

?>