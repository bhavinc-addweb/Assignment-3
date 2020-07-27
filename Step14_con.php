<?php

class connection
{
    public static function make()
    {
        try{

            $pdo = new PDO('mysql:host=localhost;dbname=demo','root','');
        } 	catch (PDOException $e){
            die('e->getMessage()');
        }
    }
}
?>
