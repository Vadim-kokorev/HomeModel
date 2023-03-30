<?php
namespace HomeModel;
require_once("flat.php");
require_once("room.php");
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
$rooms = array();
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
$room1->changeColor("черного");
/*построены комнаты в двух квартирах*/
$house1->getAllInfo($house1); // используя метод getAllInfo класса House, получаем всю информацию о доме house1

