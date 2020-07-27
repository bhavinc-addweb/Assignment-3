<?php

try{

    $pdo = new PDO('mysql:host=localhost;dbname=demo','root','');
} catch (PDOException $e){
    die('could not connect');
}

$statment = $pdo->prepare('select * from users');
$statment->execute();

?>


