<?php

class DB {

    private static $conn = null;

    private static function connect () {

        if(self::$conn === null){
            
            $host = 'localhost';        
            $dbname = 'mda_bd';
            $username = 'mda';
            $password = 'mda';

            self::$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            self::$conn->exec('PRAGMA foreign_keys = ON;');
            self::$conn->exec('PRAGMA encoding="UTF-8";');
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }

    }

    private static function disconnect () {
        self::$conn->close();
        self::$conn = null;
    }

    public static function executeSQL ($SQL) {

        if (self::$conn === null) {
            self::connect();
        }

        $exec = self::$conn->prepare($SQL);

        if ($exec) {

            if ($exec->execute()) {
                $exec->setFetchMode(PDO::FETCH_NAMED);
                $query = $exec->fetchAll();
                return $query;
            }

        }

        self::disconnect();

        return null;
    }

}

?>