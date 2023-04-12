<?php
require_once("room.php");
/*class Kitchen extends Room{
    public string $name;
    public string $color;
    public array $furnitures = array();

    public function __construct($length, $width){
        parent::__construct($length, $width);
        $this->color = "белая";
        $this->name = "кухня";
    }
    public function AddFurniture(string $furniture){
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
$kitchen1->changeColor("синяя");
$kitchen1->AddFurniture("стул");
$kitchen1->AddFurniture("стол");
$kitchen1->AddFurniture("раковина");
echo $kitchen1->getInfoRoom();*/
class Kitchen extends Room{
    public string $name = "кухня";
    public string $color;
    public array $furnitures = array();

    public function __construct($length, $width){
        parent::__construct($length, $width);
        $this->color = "белая";
    }
    public function AddFurniture(string $furniture){
        array_push($this->furnitures,$furniture);
    }
    public function getInfoRoom(){
        echo "-{$this->color} {$this->name}, в которой есть такая мебель, как";
        foreach ($this->furnitures as $furniture){
            echo " {$furniture},";
    }
}
};
