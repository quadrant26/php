<?php

header("Content-type:text/html; charset=utf-8");
echo "定义类的方法"."<br /><br /><br />";


/*
 * 方法就是在类中的function，很多时候我们分不清方法与函数有什么差别，
 * 在面向过程的程序设计中function叫做函数，在面向对象中function则被称之为方法。
 * 
 * 
 * 访问控制的关键字代表的意义为：

    public：公开的
    protected：受保护的
    private：私有的
 * */

class Car {
    public $speed = 0;
    //增加speedUp方法，使speed加10
    public function speedUp(){
        $this->speed += 10;
    }
}
$car = new Car();
$car->speedUp();
echo $car->speed;


// 使用关键字static修饰的，称之为静态方法，静态方法不需要实例化对象，可以通过类名直接调用，操作符为双冒号::。

class Car2 {
    public static function getName() {
        return '汽车';
    }
}

echo Car2::getName(); //结果为“汽车”


?>