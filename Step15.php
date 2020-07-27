<?php

$password = 'Admin@123';

$passwordHashed = password_hash($password, PASSWORD_BCRYPT);

echo $passwordHashed;

?>