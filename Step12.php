<?php

class Rectangle
{
    
    public $length=20;
    public $width=10;
     
    public function getPerimeter(){
        return (2 * ($this->length + $this->width));
    }
    
    public function getArea(){
        return ($this->length * $this->width);
    }
}
?>
