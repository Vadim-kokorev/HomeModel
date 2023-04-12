<?php
declare(strict_types=1);
require_once("flat.php");
require_once("room.php");

/* объекты типа House - это многоквартирный дом, имеющий 
адресс и информацию о квартирах, которые в нем построены*/
class House{
    public string $city;
    public string $street;
    public int $number;
    public array $flats;
    function __construct(string $city,string $street,int $number,array $flat){
        $this->city = $city;
        $this->street = $street;
        $this->number = $number;
        $this->flats = $flat;
    }
    /* методы класса House позволяют получить адрес дома, его номер или его добавление, 
    а также добавить новую квартиру в дом и получить полную информацию о нем*/
    function getInfo(){
     echo "Дом находится в городе {$this->city}, "."на улице {$this->street}"; 
    }
    public function getNumber() : int{
        return $this->number;
    }
    public function setNumber(int $number): int{
        $this->number = $number;
    }
    public function addFlats(object $nextflat): array{
        array_push($this->flats,$nextflat);
    }
    public function getFlats() : string{
        return " в доме номер $this->number есть квартиры с номерами: ";
        foreach ($this->flats as $flatp){
            return "$flatp->number, ";
        }
    }
    public function getAllInfo(): string{
        return "Дом находится в городе {$this->city}, "."на улице {$this->street}"." под номером $this->number. Дом содержит в себе ";
        /*foreach ($this->flats as $flatp){
            echo "квартиру номер $flatp->number, в которой есть ";
            foreach ($flatp->rooms as $roomp){
                echo  $roomp->name;0
                echo " {$roomp->color} цвета,";
                echo " длиной {$roomp->length}м"; 
                echo " и шириной {$roomp->width}м; ";
    }
}*/
    }
};