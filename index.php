<?php
/*объекты типа Flat являют собой построенные квартиры в доме, которые 
обладают такими свойствами, как номер квартиры и комнаты в виде массива*/
class Flat{                              
    public $number;
    public $rooms;
    function __construct($number,$room){
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
$rooms = array();
/* объекты типа Room-это ни что иное, как комнаты в квартирах, 
которые имеют название, цвет и длину с шириной*/
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
    public function checkColor(){  //позволяет узнать цвет комнаты
        return $this->color;
    }
    public function changeColor($color){   //позволяет поменять цвет комнаты
        $this->color = $color;
    }
};
/* объекты типа House - это многоквартирный дом, имеющий 
адресс и информацию о квартирах, которе в нем построены*/
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
    /* методы класса House позволяют получить адрес дома, его номер или его добавление, 
    а также добавить новую квартиру в дом и получить полную информацию о нем*/
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
        echo " в доме номер $this->number есть квартиры с номерами: ";
        foreach ($this->flats as $flatp){
            echo "$flatp->number, ";
        }
    }
    public function getAllInfo($housep){
        $housep->getInfo();
        echo " под номером $this->number. Дом содержит в себе ";
        foreach ($this->flats as $flatp){
            echo "квартиру номер $flatp->number, в которой есть ";
            foreach ($flatp->rooms as $roomp){
                echo  $roomp->name;
                echo " {$roomp->color} цвета,";
                echo " длиной {$roomp->length}"; 
                echo " и шириной {$roomp->width}; ";
    }
}
    }
};
$flats = array();
$house1 = new House("Москва","Голубинская","15",$flats); 
/*создаем объект типа House, с адрессом Москва, Улица Голубинская, 
д.15. с пустым массивом квартир, потому что они еще не построены.*/
$house1->addflats($flat1 = new Flat(NULL, $rooms));
$house1->addflats($flat2 = new Flat("2", $rooms));
/*созданы две разные квартиры в доме house1*/
$house1->setNumber("123");
$flat1->setNumber("15");
$flat1->addRooms($room1 = new Room("коридор","белого","4м","3м"));
$flat1->addRooms($room2 = new Room("спальню","синего","4м","3м"));
$flat2->addRooms($room3 = new Room("кухня","желтого","5м","3м"));
/*построены комнаты в двух квартирах*/
$house1->getAllInfo($house1); // используя метод getAllInfo класса House, получаем всю информацию о доме house1

