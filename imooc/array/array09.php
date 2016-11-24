<?php 
header("Content-type:text/html; charset=utf-8");
echo "访问关联数组内容".'<br />';

// 用数组变量的名字后跟中括号+键的方式来访问数组中的值，键使用单引号或者双引号括起来。

// 比如：

$fruit = array('apple'=>"苹果",'banana'=>"香蕉",'pineapple'=>"菠萝"); 

$fruit0 = $fruit['banana'];

print_r($fruit0);


?>