<?php

/* объекты типа Room-это ни что иное, как комнаты в квартирах, 
которые имеют название, цвет и длину с шириной*/
class Room{
    public $name;
    public $color;
    public $length;
    public $width;
    function __construct($name,$color,$length,$width){
        $this->name = $name;
        $this->color = $color;
        $this->length = $length;
        $this->width = $width;
    }
    public function checkColor(){  //позволяет узнать цвет комнаты
        return $this->color;
    }
    public function changeColor($color){   //позволяет поменять цвет комнаты
        $this->color = $color;
    }
};