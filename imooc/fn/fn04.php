<?php 
header("Content-type:text/html; charset=utf-8");
echo "可变函数"."<br /><br />";

/*
所谓可变函数，即通过变量的值来调用函数，因为变量的值是可变的，所以可以通过改变一个变量的值来实现调用不同的函数。
经常会用在回调函数、函数列表，或者根据动态参数来调用不同的函数。可变函数的调用方法为变量名加括号。

*/

function name() {
    echo 'jobs';
}
$func = 'name';
$func(); //调用可变函数


// 可变函数也可以用在对象的方法调用上。

class book {
    function getName() {
        return 'bookname';
    }
}
$func = 'getName';
$book = new book();
$book->$func();


?>