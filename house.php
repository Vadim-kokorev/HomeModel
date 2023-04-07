<?php
declare(strict_types=1);
require_once("flat.php");
require_once("room.php");

/* объекты типа House - это многоквартирный дом, имеющий 
адресс и информацию о квартирах, которые в нем построены*/
class House{
    public $sity;
    public $street;
    public $number;
    public $flats;
    function __construct(string $sity,string $street,int $number,array $flat){
        $this->sity = $sity;
        $this->street = $street;
        $this->number = $number;
        $this->flats = $flat;
    }
    /* методы класса House позволяют получить адрес дома, его номер или его добавление, 
    а также добавить новую квартиру в дом и получить полную информацию о нем*/
    function getInfo(){
     echo "Дом находится в городе {$this->sity}, "."на улице {$this->street}"; 
    }
    public function getNumber(){
        return $this->number;
    }
    public function setNumber(int $number){
        $this->number = $number;
    }
    public function addFlats(object $nextflat){
        array_push($this->flats,$nextflat);
    }
    public function getFlats(){
        echo " в доме номер $this->number есть квартиры с номерами: ";
        foreach ($this->flats as $flatp){
            echo "$flatp->number, ";
        }
    }
    public function getAllInfo(object $housep){
        $housep->getInfo();
        echo " под номером $this->number. Дом содержит в себе ";
        foreach ($this->flats as $flatp){
            echo "квартиру номер $flatp->number, в которой есть ";
            foreach ($flatp->rooms as $roomp){
                echo  $roomp->name;
                echo " {$roomp->color} цвета,";
                echo " длиной {$roomp->length}м"; 
                echo " и шириной {$roomp->width}м; ";
    }
}
    }
};