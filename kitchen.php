<?php
require_once("room.php");
class Kitchen extends Room{
    public string $name = "кухня";
    public string $color;
    public array $furnitures = array();

    public function __construct($length, $width){
        parent::__construct($length, $width);
        $this->color = "белая";
    }
    public function AddFurniture(string $furniture) : array{
        array_push($this->furnitures,$furniture);
    }
    public function getInfoRoom() : string{
        return "эта комната-{$this->color} {$this->name} длинной {$this->length}м и шириной {$this->width}м, в которой есть такая мебель, как ";
        foreach ($this->furnitures as $furniture){
            return " {$furniture},";
    }
}
};
$kitchen1 = new Kitchen(3,4);
//$kitchen1->changeColor("белая");
$kitchen1->AddFurnitures("стол");
echo $kitchen1->getInfoRoom();
