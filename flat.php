<?php
declare(strict_types=1);
require_once("room.php");

class Flat{                              
    public $number;
    public $rooms;
    function __construct(NULL $number,$room){
        $this->number = $number;  
        $this->rooms = $room; 
    }
    /* следующие методы позволяют узнать номер квартиры, 
    заменить его или создать, добавить квартиру в дом
    или получить информацию о ее свойствах соответственно*/
    public function getNumber(){
        return $this->number;
    }
    public function setNumber($number){
        $this->number = $number;
    }
    public function addRooms($nextroom){
        array_push($this->rooms,$nextroom);
    }
    public function getRooms(){
        echo " в квартире номер $this->number есть ";
        foreach ($this->rooms as $roomp){
            echo  $roomp->name;
            echo " {$roomp->color} цвета";
            echo " длиной {$roomp->length}"; 
            echo " и шириной {$roomp->width}"; 
    }
}
};