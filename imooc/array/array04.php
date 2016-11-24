<?php 
header("Content-type:text/html; charset=utf-8");
echo "访问索引数组内容".'<br />';

$fruit = array('苹果','香蕉');
$fruit0 = $fruit['0'];
print_r($fruit0);//结果为苹果


?>