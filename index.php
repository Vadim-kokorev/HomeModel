<?php
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
};
$room1 = new Room("Кухней","Бежевого","4м","5м");
$roomp1 = $room1->getInfo();
$room2 = new Room("Спальней","Голубого","6м","4м");
$roomp2 = $room2->getInfo();
$room3 = new Room("Коридором","Синего","4м","2м");
$roomp3 = $room3->getInfo();
$room4 = new Room("Кухней","Желтого","3м","2м");
$roomp4 = $room4->getInfo();
$room5 = new Room("Спальней","Розового","6м","5м");
$roomp5 = $room5->getInfo();
$room6 = new Room("Коридором","Фиолетового","4м","3м");
$roomp6 = $room6->getInfo();

class Flat{
    public $number;
    public $room1;
    public $room2;
    public $room3;
    function __construct($number,$room1,$room2,$room3){
        $this->number = $number;
        $this->room1 = $room1;
        $this->room2 = $room2;
        $this->room3 = $room3;
    }
    function getInfo(){
        return "и с номером {$this->number}"." с {$this->room1},"." {$this->room2},"." {$this->room3}";
    }
};
$flat1 = new Flat("1",$roomp1,$roomp2,$roomp3);
$flatp1 = $flat1->getInfo();
$flat2 = new Flat("2",$roomp4,$roomp5,$roomp6);
$flatp2 = $flat2->getInfo();
class House{
    public $sity;
    public $street;
    public $number;
    public $flat1;
    public $flat2;
    function __construct($sity,$street,$number,$flat1,$flat2){
        $this->sity = $sity;
        $this->street = $street;
        $this->number = $number;
        $this->flat1 = $flat1;
        $this->flat2 = $flat2;
    }
    function getInfo(){
     echo "Дом находится в городе {$this->sity}, "."на улице {$this->street}, "."под номером {$this->number}, в котором квартиры "."{$this->flat1}"."{$this->flat2}";
    }
};
$house1 = new House("Москва","Голубинская","15",$flatp1,$flatp2);
$house1->getInfo();


