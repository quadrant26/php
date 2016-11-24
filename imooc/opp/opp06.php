<?php

header("Content-type:text/html; charset=utf-8");
echo "Static静态关键字"."<br /><br /><br />";


/*
 * 静态属性与方法可以在不实例化类的情况下调用，
 * 直接使用类名::方法名的方式进行调用。静态属性不允许对象使用->操作符调用。
 * 
 * */

class Car {
    private static $speed = 10;
    
    public static function getSpeed() {
        return self::$speed;
    }
}
echo Car::getSpeed();  //调用静态方法

// 静态方法也可以通过变量来进行动态调用

$func = 'getSpeed';
$className = 'Car';
echo $className::$func();  //动态调用静态方法

// 静态方法中，$this伪变量不允许使用。可以使用self，parent，static在内部调用静态方法与属性。


class Car2 {
    private static $speed = 10;

    public static function getSpeed() {
        return self::$speed;
    }

    public static function speedUp() {
        return self::$speed+=10;
    }
}
class BigCar extends Car2 {
    public static function start() {
        parent::speedUp();
    }
}

BigCar::start();
echo BigCar::getSpeed();






class Car3 {
    private static $speed = 10;

    public function getSpeed() {
        return self::$speed;
    }

    //在这里定义一个静态方法，实现速度累加10
    public static function speedUp(){
        return self::$speed+=10;
    }
}

$car = new Car3();
Car::speedUp();  //调用静态方法加速
echo $car->getSpeed();  //调用共有方法输出当前的速度值






?>