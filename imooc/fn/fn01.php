<?php 
header("Content-type:text/html; charset=utf-8");
echo "自定义函数"."<br /><br />";

/*PHP函数的定义方式：
    1.使用关键字“function”开始
    2.函数名可以是字母或下划线开头：function name()
    3.在大括号中编写函数体：
*/
function name() {
    echo 'Eric';
}

name();
?>