<?php 
header("Content-type:text/html; charset=utf-8");
echo "字符串方法"."<br /><br />";

echo "查找字符串"."<br /><br />";

/*
 *  查找字符串，我们需要用到PHP的查找字符串函数strpos();
        函数说明：strpos(要处理的字符串, 要定位的字符串, 定位的起始位置[可选])
 * 
 * */
 
$str = 'I want to study at imooc';
$pos = strpos($str, 'imooc');
echo $pos;//结果显示19，表示从位置0开始，imooc在第19个位置开始出现

?>