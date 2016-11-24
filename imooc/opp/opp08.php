<?php

header("Content-type:text/html; charset=utf-8");
echo "对象继承"."<br /><br /><br />";


class Car {
    public $speed = 0; //汽车的起始速度是0
    
    public function speedUp() {
        $this->speed += 10;
        return $this->speed;
    }
}
//定义继承于Car的Truck类
class Truck extends Car{
    public function speedUp(){
        return $this->speed = parent::speedUp() + 50;
    }
}

$car = new Truck();
$car->speedUp();
echo $car->speed;




?>