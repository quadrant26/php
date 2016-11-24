<?php

header("Content-type:text/html; charset=utf-8");
echo "构造函数和析构函数"."<br /><br /><br />";


/*
 * PHP5可以在类中使用__construct()定义一个构造函数，具有构造函数的类，
 * 会在每次对象创建的时候调用该函数，因此常用来在对象创建的时候进行一些初始化工作。
 * 
 * */

class Car {
   function __construct() {
       print "构造函数被调用\n";
   }
}
$car = new Car(); //实例化的时候 会自动调用构造函数__construct，这里会输出一个字符串

// 在子类中如果定义了__construct则不会调用父类的__construct，如果需要同时调用父类的构造函数，需要使用parent::__construct()显式的调用。

class Car2 {
    function __construct() {
        print "父类构造函数被调用\n";
    }
}
class Truck extends Car2 {
    function __construct() {
        print "子类构造函数被调用\n";
        parent::__construct();
    }
}
$car = new Truck();

// PHP5支持析构函数，使用__destruct()进行定义，析构函数指的是当某个对象的所有引用被删除，或者对象被显式的销毁时会执行的函数。

class Car3 {
    function __construct() {
        print "构造函数被调用 \n";
    }
    function __destruct() {
        print "析构函数被调用 \n";
    }
}
$car = new Car3(); //实例化时会调用构造函数
echo '使用后，准备销毁car对象 \n';
unset($car); //销毁时会调用析构函数

?>