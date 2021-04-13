<?php
class DB {
    private static $connection=null;
    public static function get(){
        if(self::$connection === null){
            $host = 'localhost';        
            $dbname = 'mda_bd';
            $username = 'root';
            $password = 'root';
            self::$connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            self::$connection->exec('PRAGMA foreign_keys = ON;');
            self::$connection->exec('PRAGMA encoding="UTF-8";');
            self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$connection;
        
    }
    
    public static function execute_sql($sql,$parms=null){
        try {
            $db = self::get();
            $ints= $db->prepare ( $sql );
            if ($ints->execute($parms)) {
                return $ints;
            }
        }
        catch (PDOException $e) {
            echo '<h3>Error en al DB: ' . $e->getMessage() . '</h3>';
        }
        return false;
    }


    
    
} 
?>