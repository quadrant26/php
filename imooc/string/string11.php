<?php 
header("Content-type:text/html; charset=utf-8");
echo "字符串方法"."<br /><br />";

echo "字符串的转义"."<br /><br />";

/*
 *  php字符串转义函数addslashes()
        函数说明：用于对特殊字符加上转义字符，返回一个字符串
        返回值：一个经过转义后的字符串
 * 
 * */
 
$str = "what's your name?";
echo addslashes($str);//输出：what\'s your name?


?>