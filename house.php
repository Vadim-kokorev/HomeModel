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
    public function setNumber(int $number) : void{
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
        $houseinfo = "Дом находится в городе {$this->city}, "."на улице {$this->street}"." под номером $this->number. \nДом содержит в себе квартиры:";
        foreach ($this->flats as $flat){
            $houseinfo .= "{$flat->getInfoRooms()} \n";
    }
    return $houseinfo;
}
    
};
$house1 = new House("Гагарин","Голубинская",15); 
/*создаем объект типа House, с адрессом Москва, Улица Голубинская, 
д.15.*/
$kitchen1 = new Kitchen(3,4);
$kitchen1->changeColor("голубой");
$kitchen1->AddFurniture("стол");
$kitchen1->AddFurniture("стул");
$flat1 = new Flat();
$flat1->setNumber(30);
$flat1->addRooms($kitchen1);
$kitchen2 = new Kitchen(4,5);
$kitchen2->AddFurniture("стул");
$flat1->addRooms($kitchen2);
//echo $flat1->getInfoRooms();
$house1->addflats($flat1);
// созданы две разные квартиры в доме house1
echo $house1->getAllInfo();  //используя метод getAllInfo класса House, получаем всю информацию о доме house1