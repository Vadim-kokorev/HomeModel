<?php
declare(strict_types=1);
require_once("flat.php");
require_once("room.php");
require_once("house.php");
require_once("cottage.php");
require_once("kitchen.php");


$rooms = array();
$flats = array();
$house1 = new House("Гагарин","Голубинская",15); 
/*создаем объект типа House, с адрессом Москва, Улица Голубинская, 
д.15.*/
$house1->addflats($flat1 = new Flat($rooms));
$house1->addflats($flat2 = new Flat($rooms));
// созданы две разные квартиры в доме house1
$house1->setNumber(123);
$flat1->setNumber(15);
$flat2->setNumber(16);
$flat1->addRooms($room1 = new Room("кухня","белого",4,3));
$flat1->addRooms($room2 = new Room("спальню","синего",4,3));
$flat2->addRooms($room3 = new Room("кухня","желтого",7,3));
$room1->changeColor("черного");
// построены комнаты в двух квартирах
//$house1->getAllInfo();  используя метод getAllInfo класса House, получаем всю информацию о доме house1

/*$cottage1 = new Cottage("Куршево", "Мира",62,$rooms);
$cottage1->addRooms($room10 = new Room("кухню","белого",6,6));
$cottage1->addRooms($room11 = new Room("спальню","бежевого",5,4));
$cottage1->addRooms($room12 = new Room("спальню","розового",5,4));
$cottage1->addRooms($room13 = new Room("ванную","голубого",3,3));
$cottage1->getAllInfo($cottage1);*/
$kitchen1 = new Kitchen(3,4);
//$kitchen1->changeColor("белая");
$kitchen1->AddFurniture("стол");
echo $kitchen1->getInfoRoom();