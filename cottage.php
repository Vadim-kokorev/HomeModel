<?php
declare(strict_types=1);
require_once("room.php");

/* объекты типа Cottage - это загородный дом, имеющий 
адресс и информацию о комнатах, которые в нем построены*/
class Cottage{
    public $sity;
    public $street;
    public $number;
    public $rooms;
    function __construct(string $sity,string $street,int $number,$room){
        $this->sity = $sity;
        $this->street = $street;
        $this->number = $number;
        $this->rooms = $room;
    }
    /* методы класса Cottage позволяют получить адрес дома, его номер, если он есть, а если нет, то 
    добавить его, а также добавить новую квартиру в дом и получить полную информацию о нем*/
    function getInfo(){
     echo "Дом находится в городе {$this->sity}, "."на улице {$this->street}"; 
    }
    public function getNumber(){
        return $this->number;
    }
    public function setNumber($number){
        $this->number = $number;
    }
    public function addRooms($nextroom){
        array_push($this->rooms,$nextroom);
    }
    public function getAllInfo($cottagep){
        $cottagep->getInfo();
        echo " под номером $this->number. Дом содержит в себе ";
        foreach ($this->rooms as $roomp){
            echo  $roomp->name;
            echo " {$roomp->color} цвета,";
            echo " длиной {$roomp->length}м"; 
            echo " и шириной {$roomp->width}м; ";
        }
    }
};
$rooms = array();
$cottage1 = new Cottage("Куршево", "Мира",62,$rooms);
$cottage1->addRooms($room10 = new Room("кухню","белого",6,6));
$cottage1->addRooms($room11 = new Room("спальню","бежевого",5,4));
$cottage1->addRooms($room12 = new Room("спальню","розового",5,4));
$cottage1->addRooms($room13 = new Room("ванную","голубого",3,3));
$cottage1->getAllInfo($cottage1);