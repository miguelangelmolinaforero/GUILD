<?php

define('USER', 'root');
define('PASSWORD', '');
define('HOST', 'localhost');
define('DATABASE', 'guild');

 
/*
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
*/
class Db
{
    private static $instance=null;
    
    public function __construct()
    {
    }

    public static function getConnect()
    {
        if (!isset(self::$instance)) {
            $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
            self::$instance= new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD, $pdo_options);
        }
        return self::$instance;
    }
}

?>