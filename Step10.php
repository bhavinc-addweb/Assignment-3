<?php

function checkAge($age) {
   return ($age < 21) ? false : true; 
};

if(checkAge(33)) {
     echo 'welcome to the club';
 }
else {
    echo 'sorry! you are younger than 21';
}

?>

