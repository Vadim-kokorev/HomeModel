<?php
declare(strict_types=1);

/* объекты типа Room-это ни что иное, как комнаты в квартирах, 
которые имеют название, цвет и длину с шириной*/
class Room{
    public string $color;
    public int $length;
    public int $width;
    function __construct(int $length,int $width){
        $this->length = $length;
        $this->width = $width;
    }
    public function checkColor(){  //позволяет узнать цвет комнаты
        return $this->color;
    }
    public function changeColor(string $color){   //позволяет поменять цвет комнаты
        $this->color = $color;
    }
    /*public function getInfoRooms(){
            $inforoom = " длиной {$this->length}"." и шириной {$this->width}"; 
            echo $inforoom;
    }*/
};