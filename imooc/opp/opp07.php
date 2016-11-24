<?php

header("Content-type:text/html; charset=utf-8");
echo "访问控制"."<br /><br /><br />";


/*
 * 类属性必须定义为公有、受保护、私有之一。为兼容PHP5以前的版本，如果采用 var 定义，则被视为公有
class Car {
    $speed = 10; //错误 属性必须定义访问控制
    public $name;   //定义共有属性
}
 */
 

/* 
 类中的方法可以被定义为公有、私有或受保护。如果没有设置这些关键字，则该方法默认为公有。 
 **/

/*
 * 如果构造函数定义成了私有方法，则不允许直接实例化对象了，
 * 这时候一般通过静态方法进行实例化，在设计模式中会经常使用这样的方法来控制对象的创建，
 * 比如单例模式只允许有一个全局唯一的对象。
 * 
 * */
class Car {
    private function __construct() {
        echo 'object create';
    }

    private static $_object = null;
    public static function getInstance() {
        if (empty(self::$_object)) {
            self::$_object = new Car(); //内部方法可以调用私有方法，因此这里可以创建对象
        }
        return self::$_object;
    }
}
//$car = new Car(); //这里不允许直接实例化对象
$car = Car::getInstance(); //通过静态方法来获得一个实例



class Car2 {
    private $speed = 0;

    public function getSpeed() {
        return $this->speed;
    }

    protected function speedUp() {
        $this->speed += 10;
    }

    //增加start方法，使他能够调用受保护的方法speedUp实现加速10
    public function start(){
        $this->speedUp();
    }


}
$car = new Car2();
$car->start();
echo $car->getSpeed();





?>