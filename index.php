<?php

class Flat{
    public $number;
    public $rooms;
    function __construct($number,$room){
        $this->number = $number;  
        $this->rooms = $room; 
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
    public function getRooms(){
        echo $this->number;
        foreach ($this->rooms as $roomp){
            echo $roomp->name;
            echo " {$roomp->color} цвета";
            echo " длиной {$roomp->length}"; 
            echo " и шириной {$roomp->width}"; 
    }
}
};
$rooms = array();

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
    function getInfo(){
        return "{$this->name} "."{$this->color} цвета "."длиной {$this->length} "."и шириной {$this->width}";
    }
    public function checkColor(){
        return $this->color;
    }
    public function changeColor($color){
        $this->color = $color;
    }
};
class House{
    public $sity;
    public $street;
    public $number;
    public $flats;
    function __construct($sity,$street,$number,$flat){
        $this->sity = $sity;
        $this->street = $street;
        $this->number = $number;
        $this->flats = $flat;
    }
    function getInfo(){
     echo "Дом находится в городе {$this->sity}, "."на улице {$this->street}"; 
    }
    public function getNumber(){
        return $this->number;
    }
    public function setNumber($number){
        $this->number = $number;
    }
    public function addFlats($nextflat){
        array_push($this->flats,$nextflat);
    }
    public function getFlats(){
        echo $this->number;
        /*print_r($this->flats);*/
        foreach ($this->flats as $key => $value){
            echo "{$key} => {$value}";
        }
    }
};
$flats = array();
$house1 = new House("Москва","Голубинская","15",$flats);
$house1->addflats($flat1 = new Flat(NULL, $rooms));
$house1->addflats($flat2 = new Flat("2", $rooms));
$house1->setNumber("123");
$flat1->setNumber("15");
$flat1->addRooms($room1 = new Room("Кухня","Белого","4м","3м"));
$flat1->addRooms($room2 = new Room("Спальня","Синего","4м","3м"));
$flat2->addRooms($room3 = new Room("Кухня","Желтого","5м","3м"));
$flat2->getRooms();
