<?php 
header("Content-type:text/html; charset=utf-8");
echo "关联数组赋值".'<br />';


// 第一种：用数组变量的名字后面跟一个中括号的方式赋值，当然，关联数组中，中括号内的键一定是字符串。比如，
$arr['apple']='苹果';



// 第二种：用array()创建一个空数组，使用=>符号来分隔键和值，左侧表示键，右侧表示值。当然，关联数组中，键一定是字符串。比如，
array('apple'=>'苹果');

?>