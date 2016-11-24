<?php

header("Content-type:text/html; charset=utf-8");
echo "面向对象"."<br /><br /><br />";

// $name = 'qiche';
/*
 * 类是面向对象程序设计的基本概念，通俗的理解类就是对现实中某一个种类的东西的抽象， 
 * 比如汽车可以抽象为一个类，汽车拥有名字、轮胎、速度、重量等属性，可以有换挡、前进、后退等操作方法。
 * */

class Car{
    var $name = 'qiche';
    function getName() {
        return $this->name;
    }
}

/*
 * 类是一类东西的结构描述，而对象则是一类东西的一个具体实例，例如汽车这个名词可以理解为汽车的总类，
 * 但这辆汽车则是一个具体的汽车对象。

    对象通过new关键字进行实例化
 * */
 
$c1 = new Car();
$n = c1.getName();
echo $n;
?>