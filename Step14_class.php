<?php

function fetchAllTasks($pdo){
    $statment = $pdo->prepare('select * from users');

    $statment->execute();

    return $statment->fetchAll(PDO::FETCH_CLASS, 'Task');
}

function dd($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}
?>