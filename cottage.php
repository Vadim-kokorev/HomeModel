<?php
declare(strict_types=1);
require_once("room.php");

/* объекты типа Cottage - это загородный дом, имеющий 
адресс и информацию о комнатах, которые в нем построены*/
class Cottage{
    public string $sity;
    public string $street;
    public int $number;
    public array $rooms;
    function __construct(string $sity,string $street,int $number,array $room){
        $this->sity = $sity;
        $this->street = $street;
        $this->number = $number;
        $this->rooms = $room;
    }
    /* методы класса Cottage позволяют получить адрес дома, его номер, если он есть, а если нет, то 
    добавить его, а также добавить новую квартиру в дом и получить полную информацию о нем*/
    function getInfo() : string{
     return "Дом находится в городе {$this->sity}, "."на улице {$this->street}"; 
    }
    public function getNumber(): int{
        return $this->number;
    }
    public function setNumber(int $number): int{
        $this->number = $number;
    }
    public function addRooms(object $nextroom): array{
        array_push($this->rooms,$nextroom);
    }
    public function getAllInfo(): string{
        return "Дом находится в городе {$this->sity}, "."на улице {$this->street}"." под номером $this->number. Дом содержит в себе ";
        foreach ($this->rooms as $roomp){
            return "{$roomp->name}"." {$roomp->color} цвета,"." длиной {$roomp->length}м"." и шириной {$roomp->width}м; ";
        }
    }
};