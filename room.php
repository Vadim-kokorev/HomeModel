<?php
declare(strict_types=1);

/* объекты типа Room-это ни что иное, как комнаты в квартирах, 
которые имеют название, цвет и длину с шириной*/
class Room{
    public $length;
    public $width;
    function __construct(int $length,int $width){
        $this->length = $length;
        $this->width = $width;
    }
    public function getInfoRooms(){
            $inforoom = " длиной {$this->length}"." и шириной {$this->width}"; 
            echo $inforoom;
    }
};