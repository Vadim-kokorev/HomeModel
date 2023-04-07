<?php
require_once("room.php");
class Kitchen extends Room{
    public $name;
    public $color;
    public $furniture;
    function __construct(int $length,int $width, array $furniture){
        /*parent::__construct(int $length,int $width);*/
        $this->$furniture = $furniture;
    }
    public function checkColor(){  //позволяет узнать цвет комнаты
        echo $this->color;
    }
    public function changeColor(string $color){   //позволяет поменять цвет комнаты
        $this->color = $color;
    }
    public function getInfoRoom(){
        $inforoom = parent::getInfoRooms();
        $inforoom .=" {$this->name}"." {$this->color}"; 
        echo $inforoom;
    }
};
$furniturearr = array();
$kitchen1 = new Kitchen(4,3,$furniturearr);
$kitchen1->getInfoRooms();
