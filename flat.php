<?php
declare(strict_types=1);
require_once("room.php");

class Flat{                              
    public int $number;
    public array $rooms;
    function __construct(array $room){
        $this->number = $number;  
        $this->rooms = $room; 
    }
    /* следующие методы позволяют узнать номер квартиры, 
    заменить его или создать, добавить квартиру в дом
    или получить информацию о ее свойствах соответственно*/
    public function getNumber(): int{
        return $this->number;
    }
    public function setNumber(int $number) : int{
        $this->number = $number;
    }
    public function addRooms(object $nextroom): array{
        array_push($this->rooms,$nextroom);
    }
    public function getRooms() : string{
        return " в квартире номер $this->number есть комната";
        foreach ($this->rooms as $roomp){
            return " длиной {$roomp->length}"; 
            return " и шириной {$roomp->width}"; 
    }
}
};