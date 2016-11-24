<?php

header("Content-type:text/html; charset=utf-8");
echo "类的属性"."<br /><br /><br />";

// $name = 'qiche';
/*
 * 在类中定义的变量称之为属性，通常属性跟数据库中的字段有一定的关联，因此也可以称作“字段”。
 * 属性声明是由关键字 public，protected 或者 private 开头，后面跟一个普通的变量声明来组成。
 * 属性的变量可以设置初始化的默认值，默认值必须是常量。
 * 
 * 
 * 访问控制的关键字代表的意义为：

    public：公开的
    protected：受保护的
    private：私有的
 * */

class Car {
    //定义公共属性
    public $name = '汽车';

    //定义受保护的属性
    protected $corlor = '白色';

    //定义私有属性
    private $price = '100000';
    
    public function getPrice() {
        return $this->price; //内部访问私有属性
    }
}

$car = new Car();
echo $car->name;   //调用对象的属性
echo $car->color;  //错误 受保护的属性不允许外部调用
echo $car->price;  //错误 私有属性不允许外部调用

?>