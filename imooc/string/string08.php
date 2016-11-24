<?php 
header("Content-type:text/html; charset=utf-8");
echo "字符串方法"."<br /><br />";

echo "替换字符串"."<br /><br />";

/*
 *  替换字符串，我们需要用到PHP的替换函数str_replace()
        函数说明：str_replace(要查找的字符串, 要替换的字符串, 被搜索的字符串, 替换进行计数[可选])
 * 
 * */
 
$str = 'I want to learn js';
$replace = str_replace('js', 'php', $str);
echo $replace;//结果显示I want to learn php

?>