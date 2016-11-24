<?php 
header("Content-type:text/html; charset=utf-8");
echo "字符串方法"."<br /><br />";

echo "字符串的连接"."<br /><br />";

/*
 * PHP中用英文的点号.来连接两个字符串。
 * 
 * */
 
$hello='hello';
$world=' world';

$hi = $hello.$world;
echo $hi;//我们可以用echo函数输出一下这个字符串连接。

$i='I';
$love=' Love';
$you=' You';
//连接一下三个字符串
echo $i.$love.$you;
?>