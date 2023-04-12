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
    public array $flats=array();
    function __construct(string $city,string $street,int $number,){
        $this->city = $city;
        $this->street = $street;
        $this->number = $number;
    }
    /* методы класса House позволяют получить адрес дома, его номер или его добавление, 
    а также добавить новую квартиру в дом и получить полную информацию о нем*/
    function getInfo(){
     echo "Дом находится в городе {$this->city}, "."на улице {$this->street}"; 
    }
    public function getNumber() : int{
        return $this->number;
    }
    public function setNumber(int $number){
        $this->number = $number;
    }
    public function addFlats(object $nextflat){
        array_push($this->flats,$nextflat);
    }
    public function getFlats() : string{
        return " в доме номер $this->number есть квартиры с номерами: ";
        foreach ($this->flats as $flat){
            return "$flat->number, ";
        }
    }
    public function getAllInfo(){
        echo "Дом находится в городе {$this->city}, "."на улице {$this->street}"." под номером $this->number. Дом содержит в себе";
        foreach ($this->flats as $flat){
            echo "{$flat->getRooms()}";
    }
}
    
};
$house1 = new House("Гагарин","Голубинская",15); 
/*создаем объект типа House, с адрессом Москва, Улица Голубинская, 
д.15.*/
$kitchen1 = new Kitchen(3,4);
$kitchen1->changeColor("белая");
$kitchen1->AddFurniture("стол");
$room4 = new Room(2,3);
$room4->typeRoom($kitchen1);
$flat1 = new Flat();
$flat1->setNumber(30);
$flat1->addRooms($room4);
$kitchen2 = new Kitchen(4,5);
$flat1->addRooms($room5 = new Room(8,9));
$room5->typeRoom($kitchen2);
$kitchen2->AddFurniture("стул");
$house1->addflats($flat1);
// созданы две разные квартиры в доме house1
echo $house1->getAllInfo();  //используя метод getAllInfo класса House, получаем всю информацию о доме house1