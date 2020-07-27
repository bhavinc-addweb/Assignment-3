<?php

require "Step12.php";

$obj = new Rectangle;

echo $obj->length . "<br>";
echo $obj->width . "<br>"; 


$obj->length = 30;
$obj->width = 20;


echo $obj->length . "<br>"; 
echo $obj->width . "<br>"; 

echo $obj->getPerimeter() . "<br>"; 
echo $obj->getArea() . "<br>"; 
?>