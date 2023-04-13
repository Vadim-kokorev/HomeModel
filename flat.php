<?php
declare(strict_types=1);
require_once("room.php");

class Flat{                              
    public int $number;
    public array $rooms = array();

    /* следующие методы позволяют узнать номер квартиры, 
    заменить его или создать, добавить квартиру в дом
    или получить информацию о ее свойствах соответственно*/
    public function getNumber(): int{
        return $this->number;
    }
    public function setNumber(int $number){
        $this->number = $number;
    }
    public function addRooms(object $nextroom) : void{
        array_push($this->rooms,$nextroom);
    }
    public function getInfoRooms(){
        $info = "номер $this->number c: ";
        foreach ($this->rooms as $room){
            $info .= "{$room->getInfoRoom()}\n"; 
    }
    return $info;
}
}; 